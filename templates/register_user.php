<?php
$servername = "localhost";
$username = "root"; // Default XAMPP user
$password = ""; // Default XAMPP password
$dbname = "hospital_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user = $_POST['username'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$blood_type = $_POST['blood_type'];
$medical_problem = $_POST['medical_problem'];

$sql = "INSERT INTO patients (username, password, email, first_name, last_name, date_of_birth, address, phone, blood_type, medical_problem)
        VALUES ('$user', '$pass', '$email', '$first_name', '$last_name', '$date_of_birth', '$address', '$phone', '$blood_type', '$medical_problem')";

if ($conn->query($sql) === TRUE) {
    // Redirect back to the user login page
    header("Location: user.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>