<?php
// Database connection
$servername = "localhost:3306";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password (default is empty for XAMPP)
$dbname = "aa"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variable to control if toast should be shown
$showToast = false;
$toastMessage = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $EName = $_POST['EName'];
    $PFIndexNo = $_POST['PF_Index_No'];
    $DoB = $_POST['DoB'];
    $BoR = $_POST['BoR'];
    $Position = $_POST['POSITION'];
    $PhoneNo = $_POST['Telephone_no'];
    $PFName = $_POST['PF_Name'];
    $PFDoB = $_POST['PF_DoB'];
    $BloodGroup = $_POST['Blood_Group'];
    $PayingBranch = $_POST['Paying_Branch'];
    $Address = $_POST['Address'];

    // Check if PF Index Number already exists in the database
    $checkSql = "SELECT * FROM `pension` WHERE `PF_Index _No` = '$PFIndexNo'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // PF Index Number already exists, set toast message
        $showToast = true;
        $toastMessage = "This PF Index Number is already exists.";
    } else {
        // Handle file uploads
        $imageUpload = $_FILES['image']['name'];
        $signatureUpload = $_FILES['signature']['name'];

        // Define upload directory
        $targetDir = __DIR__ . '/uploads/';
        
        // Ensure uploads directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Create directory if it doesn't exist
        }

        // Define file paths
        $imagePath = $targetDir . basename($imageUpload);
        $signaturePath = $targetDir . basename($signatureUpload);

        // Upload images to server
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath) && move_uploaded_file($_FILES['signature']['tmp_name'], $signaturePath)) {
            // Insert data into database
            $sql = "INSERT INTO `pension`(`EName`, `PF_Index _No`, `DoB`, `DoR`, `Position`, `Telephone_no`, `PF_Name`, `PF_DoB`, `Blood_Group`, `Paying_Branch`, `Address`, `image_path`, ` signature_path`)
                    VALUES ('$EName', '$PFIndexNo', '$DoB', '$BoR', '$Position', '$PhoneNo', '$PFName', '$PFDoB', '$BloodGroup', '$PayingBranch', '$Address', '$imagePath', '$signaturePath')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to formsucc.php after successful submission
                header("Location: formsucc.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Failed to upload image or signature.<br>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Pensioner's Identity Card</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/020/975/548/non_2x/sbi-logo-sbi-icon-transparent-free-png.png');
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-position: center;
        }
        main {
            background-color: rgba(255, 255, 255, 0.8);
            width: 100%;
            max-width: 600px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h3 {
            font-size: 28px;
            color: #2575fc;
            margin-bottom: 10px;
        }
        h4 {
            font-size: 20px;
            color: #2575fc;
            margin-bottom: 20px;
        }
        .form-field {
            margin-bottom: 20px;
            text-align: left;
            width: 100%;
        }
        .form-field label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        .form-field input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 2px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .form-field input:focus {
            border-color: #2575fc;
        }
        /* Button Styling */
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            color: white;
            background-color: blue;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #1c60e1;
        }
        input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 10px rgba(106, 17, 203, 0.6);
        }

        /* Toast Notification Styles */
        #toast {
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

        #toast.show {
            visibility: visible;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
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
    <main>
        <form action="" method="POST" enctype="multipart/form-data">
            <h3>FAMILY PENSIONER'S IDENTIFY CARD</h3>
            <h4>INFORMATION SHEET</h4>

            <div class="form-field">
                <label for="EName">Employee Name:</label>
                <input type="text" name="EName" id="EName" placeholder="Enter Employee name" required>
            </div>

            <div class="form-field">
                <label for="PF_Index_No">PF Index No.:</label>
                <input type="number" name="PF_Index_No" id="PF_Index_No" placeholder="Enter PF Index Number" required>
            </div>

            <div class="form-field">
                <label for="DoB">Date of Birth:</label>
                <input type="date" name="DoB" id="DoB" required>
            </div>

            <div class="form-field">
                <label for="BoR">Date of Retirement:</label>
                <input type="date" name="BoR" id="BoR" required>
            </div>

            <div class="form-field">
                <label for="POSITION">Position:</label>
                <input type="text" name="POSITION" id="POSITION" placeholder="Enter Position" required>
            </div>

            <div class="form-field">
                <label for="Telephone_no">Phone No:</label>
                <input type="text" name="Telephone_no" id="Telephone_no" placeholder="Enter Phone Number" required>
            </div>

            <div class="form-field">
                <label for="PF_Name">PF Name:</label>
                <input type="text" name="PF_Name" id="PF_Name" placeholder="Enter Family Pensioner's Name" required>
            </div>

            <div class="form-field">
                <label for="PF_DoB">PF Date of Birth:</label>
                <input type="date" name="PF_DoB" id="PF_DoB" required>
            </div>

            <div class="form-field">
                <label for="Blood_Group">Blood Group:</label>
                <input type="text" name="Blood_Group" id="Blood_Group" placeholder="Enter Blood Group" required>
            </div>

            <div class="form-field">
                <label for="Paying_Branch">Paying Branch:</label>
                <input type="text" name="Paying_Branch" id="Paying_Branch" placeholder="Enter Paying Branch" required>
            </div>

            <div class="form-field">
                <label for="Address">Address:</label>
                <input type="text" name="Address" id="Address" placeholder="Enter Address" required>
            </div>

            <!-- Image Upload Field -->
            <div class="form-field">
                <label for="imageUpload">Upload Photo:</label>
                <input type="file" name="image" id="imageUpload" accept="image/*" required>
            </div>

            <!-- Signature Upload -->
            <div class="form-field">
                <label for="signatureUpload">Upload Signature:</label>
                <input type="file" name="signature" id="signatureUpload" accept="image/*" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>

    <!-- Toast Notification -->
    <div id="toast"><?php echo $toastMessage; ?></div>

    <script>
        // Show toast notification if needed
        <?php if ($showToast): ?>
            document.getElementById("toast").className = "show";
            setTimeout(function() { document.getElementById("toast").className = document.getElementById("toast").className.replace("show", ""); }, 3000);
        <?php endif; ?>
    </script>
</body>
</html>
