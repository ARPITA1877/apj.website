<?php
// Database connection details
$servername = "localhost:3306";
$username = "root"; // Use your MySQL username
$password = ""; // Use your MySQL password (default is empty for XAMPP)
$dbname = "regi"; // The database name you created in PHPMyAdmin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $PFIndexNo = $_POST['PFIndexNo'];
    $position = $_POST['position'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    // Check if the PF Index No already exists in the database
    $checkQuery = "SELECT * FROM regi WHERE pf_index_no = '$PFIndexNo'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // PF Index No exists, show a toast notification
        echo '<script type="text/javascript">
                window.onload = function() {
                    showToast("This PF Index Number is already exists.");
                };
              </script>';
    } else {
        // Handling the image upload
        $profilePicture = $_FILES['profilePicture']['name'];
        $profilePictureTmp = $_FILES['profilePicture']['tmp_name'];
        $uploadDirectory = "uploads/" . basename($profilePicture);

        // Move the uploaded image to the "uploads" directory
        if (move_uploaded_file($profilePictureTmp, $uploadDirectory)) {
            // Prepare SQL statement to insert data into the database
            $sql = "INSERT INTO `regi`(`first_name`, `last_name`, `pf_index_no`, `position`, `phone_number`, `email`, `address`, `profile_picture`) 
                    VALUES ('$firstName', '$lastName', '$PFIndexNo', '$position', '$phoneNumber', '$email', '$address', '$uploadDirectory')";

            // Execute the SQL statement
            if ($conn->query($sql) === TRUE) {
                // Redirect to idcard.html with query parameters
                header("Location: idcard.html?firstName=$firstName&lastName=$lastName&PFIndexNo=$PFIndexNo&position=$position&phoneNumber=$phoneNumber&email=$email&address=$address&profilePicture=$uploadDirectory");
                exit(); // Ensure no further code is executed after the redirect
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading the profile picture.";
        }
    }
}

// Close the connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an ID Card</title>
    <link rel="stylesheet" href="card.css">
    <style>
        /* Toast container style */
        .toast {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: red;
            color: white;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        .toast.show {
            visibility: visible;
            animation: fadeInOut 3s forwards;
        }

        @keyframes fadeInOut {
            0% { bottom: 30px; opacity: 0; }
            25% { opacity: 1; }
            75% { opacity: 1; }
            100% { bottom: 30px; opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpWvNVeGFA3OBzZ8nRuACZqki3iDkl4sY3gg&s" alt="SBI Logo" class="sbi-logo" />
        <h2>I-CARD REGISTRATION </h2>

        <!-- Form for user inputs -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <b><label for="firstName">First Name:</label></b>
                <input id="firstName" name="firstName" type="text" placeholder="Enter first name" required />
            </div>

            <div class="input-group">
                <b> <label for="lastName">Last Name:</label></b>
                <input id="lastName" name="lastName" type="text" placeholder="Enter last name" required />
            </div>

            <div class="input-group">
                <b><label for="PFIndexNo">PF Index No:</label></b>
                <input id="PFIndexNo" name="PFIndexNo" type="text" placeholder="Enter pensioner's Index Number" required />
            </div>

            <div class="input-group">
                <b> <label for="position">Position:</label></b>
                <input id="position" name="position" type="text" placeholder="Enter current position" required />
            </div>

            <div class="input-group">
                <b><label for="phoneNumber">Phone Number:</label></b>
                <input id="phoneNumber" name="phoneNumber" type="tel" placeholder="Enter phone number" required />
            </div>

            <div class="input-group">
                <b><label for="email">Email:</label></b>
                <input id="email" name="email" type="email" placeholder="Enter email" required />
            </div>

            <div class="input-group">
                <b><label for="address">Address:</label></b>
                <input id="address" name="address" type="text" placeholder="Enter pensioner's full address" required />
            </div>

            <div class="input-group"class="card-left">
                <b><label for="profilePicture">Profile Picture:</label></b>
                <input id="profileImg" name="profilePicture" type="file" accept="image/*"alt="Profile Picture" class="profile-img" required />
            </div>


            <button type="submit" id="btnClickMe">Generate ID Card</button>
        </form>
    </div>

    <!-- Toast Notification JavaScript -->
    <script>
        function showToast(message) {
            var toast = document.createElement("div");
            toast.className = "toast";
            toast.textContent = message;
            document.body.appendChild(toast);
            // Show the toast
            toast.classList.add("show");
            // Remove toast after animation ends
            setTimeout(function() {
                toast.classList.remove("show");
                document.body.removeChild(toast);
            }, 3000);
        }
    </script>
</body>
</html>
