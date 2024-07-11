<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bmi.css" rel="stylesheet">
    <style>
    
        .callout {
            padding: 1em;
            border-radius: 4px;
            margin-bottom: 1em;
        }

        .btn-close {
            top: 0.4em;
            bottom: 0.5em;
            position: absolute;
            background: none;
            right: 0.5em;
            font-size: 2.5em;
            border: none;
            color: whitesmoke;
            cursor: pointer;
            line-height: 1;
            font-weight: bold;
            border-radius: 30%;
            padding: 0.2em 0.5em;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-close:hover {
            color: white;
        }
    </style>
</head>
<body style="background-image: url('img/gym-image.jpg'); width:fit-content; height: 200px;">
    <div class="callout">
        <button class="btn-close" aria-label="Close" id="closeBtn">&times;</button>
        
    </div>
<div class="container">
    
  
    <div class="box">
        <h1>BMI Calculator</h1>
        <div class="content">
            <div class="input">
                <label for="height">Height(cm)</label>
                <input type="number" id="height">
            </div>
            <div class="input">
                <label for="weight">Weight(kg)</label>
                <input type="number" id="weight">
            </div>
            <button id="calculate" class="btn btn-primary">Calculate BMI</button>
        </div>
        <div class="result">
            <p>Your BMI is</p>
            <div id="result">00.00</div>
            <p class="comment"></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dietChartModal">
                Show Diet Chart
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dietChartModal" tabindex="-1" aria-labelledby="dietChartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="dietChartModalLabel">Diet Chart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="dietChartContent">
                <!-- Diet chart content will be injected here -->
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!--End of Modal -->

<script>
    document.getElementById('calculate').onclick = () => {
        const height = document.getElementById('height').value;
        const weight = document.getElementById('weight').value;
        const bmi = (weight / ((height / 100) ** 2)).toFixed(2);

        document.getElementById('result').innerText = bmi;
        document.querySelector('.comment').innerText = getComment(bmi);
        updateDietChart(bmi);
    };

    function getComment(bmi) {
        if (bmi < 18.5) return 'Underweight';
        if (bmi < 24.9) return 'Normal weight';
        if (bmi < 29.9) return 'Overweight';
        return 'Obesity';
    }

    function updateDietChart(bmi) {
        let dietChartContent = '';

        if (bmi < 18.5) {
            dietChartContent = `
                <h2>Diet Plan for Underweight Individuals</h2>
                <p>To gain weight, focus on nutrient-dense foods and balanced meals. Here are some tips:</p>
                <ul>
                    <li><strong>Frequent Meals:</strong> Eat five to six small meals throughout the day.</li>
                    <li><strong>Protein-Rich Foods:</strong> Include lean meats, eggs, dairy, legumes, and nuts.</li>
                    <li><strong>Healthy Fats:</strong> Add avocados, olive oil, and nut butters to your diet.</li>
                    <li><strong>Whole Grains:</strong> Choose whole wheat bread, brown rice, quinoa, and oats.</li>
                    <li><strong>Fruits and Vegetables:</strong> Ensure a variety of colorful fruits and vegetables.</li>
                    <li><strong>Hydration:</strong> Drink plenty of water and consider protein shakes or smoothies.</li>
                </ul>`;
        } else if (bmi < 24.9) {
            dietChartContent = `
                <h2>Diet Plan for Normal Weight Individuals</h2>
                <p>Maintain your weight by focusing on a balanced and varied diet. Here are some tips:</p>
                <ul>
                    <li><strong>Balanced Meals:</strong> Ensure each meal includes protein, carbohydrates, and healthy fats.</li>
                    <li><strong>Portion Control:</strong> Be mindful of portion sizes to avoid overeating.</li>
                    <li><strong>Whole Foods:</strong> Choose whole, unprocessed foods over refined options.</li>
                    <li><strong>Regular Meals:</strong> Eat at regular intervals to maintain energy levels.</li>
                    <li><strong>Hydration:</strong> Drink plenty of water throughout the day.</li>
                    <li><strong>Moderation:</strong> Enjoy treats in moderation and focus on overall diet quality.</li>
                </ul>`;
        } else if (bmi < 29.9) {
            dietChartContent = `
                <h2>Diet Plan for Overweight Individuals</h2>
                <p>To lose weight, focus on reducing calorie intake and increasing physical activity. Here are some tips:</p>
                <ul>
                    <li><strong>Calorie Control:</strong> Monitor and reduce your daily calorie intake.</li>
                    <li><strong>Lean Proteins:</strong> Choose lean meats, fish, tofu, and legumes.</li>
                    <li><strong>Healthy Carbs:</strong> Opt for whole grains, fruits, and vegetables.</li>
                    <li><strong>Healthy Fats:</strong> Include sources like nuts, seeds, and avocados in moderation.</li>
                    <li><strong>Fiber-Rich Foods:</strong> Increase intake of high-fiber foods like vegetables and whole grains.</li>
                    <li><strong>Physical Activity:</strong> Aim for at least 150 minutes of moderate exercise per week.</li>
                </ul>`;
        } else {
            dietChartContent = `
                <h2>Diet Plan for Obese Individuals</h2>
                <p>To achieve significant weight loss, focus on a structured diet plan and regular exercise. Here are some tips:</p>
                <ul>
                    <li><strong>Professional Guidance:</strong> Consider consulting a dietitian for a personalized plan.</li>
                    <li><strong>Low-Calorie Diet:</strong> Adopt a low-calorie, nutrient-dense diet.</li>
                    <li><strong>Protein Intake:</strong> Ensure adequate protein to maintain muscle mass.</li>
                    <li><strong>Low-Glycemic Foods:</strong> Choose foods with a low glycemic index.</li>
                    <li><strong>Healthy Fats:</strong> Include moderate amounts of healthy fats.</li>
                    <li><strong>Regular Exercise:</strong> Engage in regular physical activity tailored to your fitness level.</li>
                    <li><strong>Behavioral Changes:</strong> Work on sustainable lifestyle changes and mindful eating.</li>
                </ul>`;
        }

        document.getElementById('dietChartContent').innerHTML = dietChartContent;
    }
</script>
<script>
    document.getElementById('closeBtn').addEventListener('click', function() {
    window.location.href = 'index.php'; // Redirects to the home page
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
