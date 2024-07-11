<?php
session_start();
include("admin/admin_inc/db.php");

// Fetch all music tracks
$sel = "SELECT * FROM musics";
$musicTracks = $con->query($sel);

$songsList = [];
if ($musicTracks->num_rows > 0) {
    while ($row = $musicTracks->fetch_assoc()) {
        $songsList[] = [
            'name' => htmlspecialchars($row['m_name']),
            'artist' => htmlspecialchars($row['m_artist']),
            'src' => 'admin/uploads/' . htmlspecialchars($row['m_audio']),
            'cover' => 'admin/uploads/' . htmlspecialchars($row['m_cover']),
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlazeBody - Music Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .song-container {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            width: 200px;
            text-align: center;
            background: linear-gradient(orange, white, green);
        }
        .cover img {
            display: inline-block;
            border: 2px solid transparent;
            border-image: linear-gradient(45deg, red, yellow, green, blue, purple);
            border-image-slice: 1;
            animation: borderAnimation 3s infinite;
            overflow: hidden;
        }
        @keyframes borderAnimation {
            0% {
                border-image-source: linear-gradient(45deg, white, blue, white, blue);
            }
            25% {
                border-image-source: linear-gradient(45deg, blue, white, blue, white);
            }
            50% {
                border-image-source: linear-gradient(45deg, white, blue, white, blue);
            }
            75% {
                border-image-source: linear-gradient(45deg, blue, white, blue, white);
            }
            100% {
                border-image-source: linear-gradient(45deg, white, blue, white, blue);
            }
        }
        img {
            width: 80%;
            height: 120px;
        }
        .controls {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            color: black;
        }
        .progress-bar {
            height: 5px;
            background: #ccc;
            border-radius: 5px;
            margin: 10px 0;
            position: relative;
        }
        .fill-bar {
            height: 100%;
            background: blue;
            width: 0;
            border-radius: 5px;
        }.time{
            color: black;
        }
        .song-name{
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: bold;
        }
        .artist-name{
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <?php include("inc/topbar.php"); ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Music Library</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Music Library</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Music Content Start -->
    <div class="container" id="music-container">
        <!-- Song containers will be dynamically added here -->
    </div>
    <!-- Music Content End -->

    <!-- Footer Start -->
    <?php include("inc/footer.php"); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        const songsList = <?php echo json_encode($songsList); ?>;
        let currentAudio = null; // Track the current playing audio

        document.addEventListener('DOMContentLoaded', () => {
            const musicContainer = document.getElementById('music-container');

            songsList.forEach((song, index) => {
                const songElement = document.createElement('div');
                songElement.classList.add('song-container');
                songElement.innerHTML = `
                    <div class="song-name">${song.name}</div>
                    <div class="artist-name">${song.artist}</div>
                    <div class="cover"><img src="${song.cover}" alt="Cover Photo"></div>
                    <div class="progress-bar">
                        <div class="fill-bar" id="fill-bar-${index}"></div>
                    </div>
                    <div class="time" id="time-${index}">0:00 - 0:00</div>
                    <div class="controls">
                        <i style="cursor: pointer;" id="play-${index}" class="play-btn fa-solid fa-play"></i>
                    </div>
                `;
                musicContainer.appendChild(songElement);

                // Event Listeners
                const playBtn = document.getElementById(`play-${index}`);
                const fillBar = document.getElementById(`fill-bar-${index}`);
                const time = document.getElementById(`time-${index}`);
                const prog = songElement.querySelector('.progress-bar');

                let audio = new Audio(song.src);
                let playing = false;

                function updateProgress() {
                    if (audio.duration) {
                        const pos = (audio.currentTime / audio.duration) * 100;
                        fillBar.style.width = `${pos}%`;

                        const duration = formatTime(audio.duration);
                        const currentTime = formatTime(audio.currentTime);
                        time.innerText = `${currentTime} - ${duration}`;
                    }
                }

                function formatTime(seconds) {
                    const minutes = Math.floor(seconds / 60);
                    const secs = Math.floor(seconds % 60);
                    return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
                }

                function togglePlayPause() {
                    if (currentAudio && currentAudio !== audio) {
                        currentAudio.pause();
                        currentAudio.currentTime = 0;
                        const currentPlayBtn = document.querySelector('.fa-pause');
                        if (currentPlayBtn) {
                            currentPlayBtn.classList.remove('fa-pause');
                            currentPlayBtn.classList.add('fa-play');
                        }
                    }

                    if (playing) {
                        audio.pause();
                    } else {
                        audio.play();
                        currentAudio = audio;
                    }
                    playing = !playing;
                    playBtn.classList.toggle('fa-pause', playing);
                    playBtn.classList.toggle('fa-play', !playing);
                }

                function seek(e) {
                    const pos = (e.offsetX / prog.clientWidth) * audio.duration;
                    audio.currentTime = pos;
                }

                audio.addEventListener('timeupdate', updateProgress);
                audio.addEventListener('ended', () => {
                    playBtn.classList.remove('fa-pause');
                    playBtn.classList.add('fa-play');
                    playing = false;
                });
                playBtn.addEventListener('click', togglePlayPause);
                prog.addEventListener('click', seek);
            });
        });
    </script>

</body>

</html>

<?php
$con->close();
?>
