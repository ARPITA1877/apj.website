<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBI Pension Services</title>
    <style>
        /* Basic styling */
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

        
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
            margin: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #003366;
        }

        ul {
            line-height: 1.8;
        }

        footer {
            background-color: lightgray;
            color: black;
            text-align: center;
            padding: 20px;
            bottom: 0;
        }


        a {
            color: #003366;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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



<!-- Pension Service Details -->
<section>
    <h2>About SBI Pension Services</h2>
    <p>State Bank of India is proud to be associated with more than 44 lacs Pensioners. To cover pensioners across the country, SBI has set up 18 Central Pension Processing Centers (CPPCs), where pensions are processed electronically.</p>
</section>

<!-- Pension Account Opening -->
<section>
    <h2>Opening a Pension Account</h2>
    <p>To avail pension through State Bank of India, retiring employees can open an account at any branch of SBI, preferably with a spouse. The following documents are required:</p>
    <ul>
        <li>Aadhaar Number</li>
        <li>PAN Number</li>
        <li>Mobile Number</li>
        <li>Email ID (if available)</li>
    </ul>
    <p>For more information, visit <a href="https://bank.sbi/web/personal-banking/accounts/saving-account/savings-bank-account" target="_blank">this link</a>.</p>
</section>

<!-- Pension Payment Details -->
<section>
    <h2>Pension Payment and Life Certificate Submission</h2>
    <p>Once a pension account is set up, the pensioner is required to submit their life certificate for continuous pension payments. This can be done digitally through the following methods:</p>
    <ul>
        <li>Submit your life certificate via <a href="https://www.pensionseva.sbi" target="_blank">PensionSeva website</a></li>
        <li>Submit via Video Life Certificate (VLC) on <a href="https://www.pensionseva.sbi/VideoLC" target="_blank">this page</a></li>
        <li>Alternatively, visit the Jeevan Pramaan portal at <a href="https://jeevanpramaan.gov.in" target="_blank">jeevanpramaan.gov.in</a></li>
    </ul>
</section>

<!-- SBI Pension Facilities -->
<section>
    <h2>Facilities for Pensioners</h2>
    <p>SBI provides the following facilities to pensioners:</p>
    <ul>
        <li>Submission of Annual Life Certificate (including Digital Life Certificate from home)</li>
        <li>SMS and email notifications about pension payments</li>
        <li>Pension slips available through various channels (SMS, email, and website)</li>
        <li>Helpline facilities and contact options at CPPCs</li>
        <li>Pension loans available at branches (up to 18 times the monthly pension)</li>
        <li>Transfer of pension accounts across any of the 22000+ branches</li>
    </ul>
    <p>For further details, you can visit <a href="https://www.pensionseva.sbi" target="_blank">PensionSeva website</a>.</p>
</section>

<!-- Important Links -->
<section>
    <h2>Useful Links</h2>
    <ul>
        <li><a href="https://bank.sbi/web/personal-banking/loans/personal-loans/loans-to-pensioners" target="_blank">Pension Loans</a></li>
        <li><a href="https://bank.sbi/web/faq-s/faq-centralized-pension-processing" target="_blank">FAQ on Pension Payment</a></li>
        <li><a href="https://bank.sbi/web/personal-banking/information-services/government-business/digital-life-certificate" target="_blank">Digital Life Certificate</a></li>
        <li><a href="https://www.pensionseva.sbi/VideoLC" target="_blank">Video Life Certificate</a></li>
        <li><a href="https://bank.sbi/web/faq-s/faq-scss?inheritRedirect=true" target="_blank">FAQ on SCSS</a></li>
        <li><a href="https://bank.sbi/web/interest-rates/interest-rates/loan-schemes-interest-rates" target="_blank">Retail Domestic Interest Rates</a></li>
    </ul>
</section>
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
