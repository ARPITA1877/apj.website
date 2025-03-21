<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Successful</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
        }

        .container {
            text-align: center;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .message-box h1 {
            color: #4CAF50;
        }

        .message-box p {
            margin: 15px 0;
            font-size: 18px;
            color: #333;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

        .countdown {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
        }
     </style>
</head>
<body>
    <div class="container">
        <div class="message-box">
            <h1>Formfill Successful!</h1>
            <p>Thank you. Your Form submited successfully.</p>
            <div id="countdown" class="countdown"></div>
        </div>
    </div>

    <script>
        var countdownElement = document.getElementById('countdown');
        var timeLeft = 10;

        function updateCountdown() {
            countdownElement.innerHTML = 'Redirecting in ' + timeLeft + ' seconds...';
            timeLeft--;

            if (timeLeft < 0) {
                window.location.href = 'link.html';}
            }
        var countdownInterval = setInterval(updateCountdown, 1000);
    </script>
</body>
</html>