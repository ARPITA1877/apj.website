<?php
// Define an array of pension plans with relevant information
$pension_plans = [
    [
        "name" => "SBI Life – Retire Smart Plus Plan",
        "entry_age" => "20 – 60 years",
        "maximum_vesting_age" => "30 – 70 years",
        "policy_term" => "Single/ Regular: 10 – 35 years; Limited: 10 – 35 years",
        "premium_payment_term" => "Single pay /Regular pay: Same as PT/ Limited: 5 – 8 years and 10/ 15 years",
        "premium_payment_annually" => "Regular: Rs. 30,000; Limited: Rs. 40,000; Single: Rs. 1,00,000"
    ],
    [
        "name" => "SBI Life - Retire Smart Plan",
        "entry_age" => "30 – 60 years",
        "maximum_vesting_age" => "70 years",
        "policy_term" => "Single/ Regular: 10 – 35 years; Limited: 10 – 35 years",
        "premium_payment_term" => "Single: One-time pay; Regular: Same as PT; Limited: 5/ 8/ 10/ 15 years",
        "premium_payment_annually" => "Regular: Rs. 24,000; Limited: Rs. 40,000; Single: Rs. 1,00,000"
    ],
    [
        "name" => "SBI Life - Smart Annuity Plus Plan",
        "entry_age" => "Deferred Annuity: 45 – 75 years; Other Plans: 30 – 95 years",
        "maximum_vesting_age" => "Deferment Period: 1 – 10 years",
        "policy_term" => "--",
        "premium_payment_term" => "Single Pay",
        "premium_payment_annually" => "Rs. 12,000"
    ],
    [
        "name" => "SBI Life - Saral Retirement Saver Plan",
        "entry_age" => "Regular: 18 – 60 years; Single: 18 – 65 years",
        "maximum_vesting_age" => "40 – 70 years",
        "policy_term" => "Regular; Single Pay",
        "premium_payment_term" => "--",
        "premium_payment_annually" => "Rs. 6,500"
    ],
    [
        "name" => "SBI Life – Saral Pension Plan",
        "entry_age" => "40 – 80 years",
        "maximum_vesting_age" => "--",
        "policy_term" => "--",
        "premium_payment_term" => "Single Pay",
        "premium_payment_annually" => "As per chosen mode and amount of annuity payouts"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBI Pension Plans</title>
    <style>
        /* Inline CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 7px;
            text-align: center;
        }

        nav {
            background-color: lightgray;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px;
            font-size: 18px;
        }

        nav a:hover {
            background-color: lightblue;
        }

        /* Styling for the logo (no resize) */
        header img {
            width: 80px;
            height: auto;
        }

        table {
            width: 100%;
            margin: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #003366;
            color: white;
        }

        footer {
            background-color: lightgray;
            color: black;
            text-align: center;
            padding: 20px;
            bottom: 0;
        }

        .container img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .btn {
            background-color: #004c8c;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #003366;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <img src="https://logos-world.net/wp-content/uploads/2023/02/State-Bank-of-India-Logo.jpg" alt="SBI Logo">
        <h1>Pension Service Portal</h1>
        <p>Welcome to your pension management platform</p>
    </header>

    <!-- Navigation -->
    <nav>
        <b>
            <a href="login.html" onclick="alert('without login you can not fill pension form!')">Pension Form</a>
            <a href="index.html" onclick="alert('without login you can not fill I-card Registration!')">I-card Registration</a>
            <a href="#footer">Contact Us</a>
            <a href="help.php">Help</a>
            <a href="login.html">Login</a>
        </b>
    </nav>

    <!-- Introduction to SBI Pension Plans -->
    <div id="about">
        <h2>What is the SBI Pension Plan?</h2>
        <p>SBI Life Pension Plans is a pension plan product that helps you save for retirement. Through these investment plans, you contribute regularly as a Systematic Investment Plan (SIP*) or as a lump sum. Once you reach retirement age, you receive periodic payments to support your living expenses.</p>

        <p>The SBI Pension Plans offer flexibility in choosing how much you contribute and can be tailored to meet your future financial needs. These plans also come with insurance benefits, offering protection to your loved ones.</p>

        <p>Overall, SBI Life Pension Plans are designed to give you a steady and reliable income during your retirement years, helping you enjoy financial security when you need it most.</p>

        <p><b>* You can calculate the returns from your systematic investments in an SBI pension scheme using an SIP calculator.</b></p>
    </div>

    <!-- Pension Plans Table -->
    <div id="plans">
        <h2>SBI Pension Plans</h2>
        <table>
            <tr>
                <th>Plan Name</th>
                <th>Entry Age</th>
                <th>Maximum Vesting Age</th>
                <th>Policy Term</th>
                <th>Premium Payment Term</th>
                <th>Premium Payment (annually)</th>
            </tr>

            <?php foreach ($pension_plans as $plan): ?>
                <tr>
                    <td><?php echo $plan['name']; ?></td>
                    <td><?php echo $plan['entry_age']; ?></td>
                    <td><?php echo $plan['maximum_vesting_age']; ?></td>
                    <td><?php echo $plan['policy_term']; ?></td>
                    <td><?php echo $plan['premium_payment_term']; ?></td>
                    <td><?php echo $plan['premium_payment_annually']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Main Content (Image) -->
    <div class="container">
        <img src="https://pbs.twimg.com/media/CwpkpB3WEAAaLhD.jpg" alt="SBI">
    </div>

    <!-- Footer Section -->
    <footer id="footer">
        <b><p>Please Contact support.pensionseva@sbi.com.in for login and registration related issues in pension platform<br>
        SBI Pension Helpdesk-1800 103 2222 (toll free)<br>
        SBI Care Number-1800 425 3800 (toll free)</p></b>
    </footer>

    <script>
        // Smooth scroll behavior
        document.querySelector('a[href="#footer"]').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default behavior
            document.getElementById('footer').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly
            });
        });
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pension Services</title>
    <style>
        /* Inline CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 7px;
            text-align: center;
        }

        nav {
            background-color: lightgray;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px;
            font-size: 18px;
        }

        nav a:hover {
            background-color: lightblue;
        }

        /* Styling for the logo (no resize) */
        header img {
            width: 80px; /* Keeps the logo fixed at 80px width */
            height: auto; /* Keeps aspect ratio for the logo */
        }

        /* Styling for the other image */
        .container img {
            width: 100%; /* Makes the image take up the full width of the container */
            height: 600px; /* Sets a fixed height for the image (you can adjust this value) */
            object-fit: cover; /* Ensures the image maintains aspect ratio and covers the set height */
        }

        footer {
            background-color: lightgray;
            color: black;
            text-align: center;
            padding: 20px;
            bottom: 0;
        }

        .btn {
            background-color: #004c8c;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #003366;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <img src="https://logos-world.net/wp-content/uploads/2023/02/State-Bank-of-India-Logo.jpg" alt="SBI Logo">
        <h1>Pension Service Portal</h1>
        <p>Welcome to your pension management platform</p>
    </header>

    <!-- Navbar Section -->
    <nav><b>
        <a href="login.html" onclick="alert('without login you can not fill pension form!')">Pension Form</a>
        <a href="index.html" onclick="alert('without login you can not fill I-card Registration!')">I-card Registration</a>
        <a href="#footer">Contact Us</a> <!-- Changed href to #footer -->
        <a href="help.php">Help</a>
        <a href="login.html">Login</a></b>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Add Image Here -->
        <img src="https://pbs.twimg.com/media/CwpkpB3WEAAaLhD.jpg" alt="SBI">
    </div>

    <!-- Footer Section -->
    <footer id="footer"> <!-- Added id here -->
        <b><p>Please Contact support.pensionseva@sbi.com.in for login and registration related issues in pension platform<br>
        SBI Pension Helpdesk-1800 103 2222 (toll free)<br>
        SBI Care Number-1800 425 3800 (toll free)</p></b>
    </footer>

    <script>
        // Smooth scroll behavior
        document.querySelector('a[href="#footer"]').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default behavior
            document.getElementById('footer').scrollIntoView({
                behavior: 'smooth' // Scroll smoothly
            });
        });
    </script>
</body>

</html>
