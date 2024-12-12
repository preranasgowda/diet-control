php
<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "diet_control"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$diet_preference = $_POST['diet_preference'];
$goal = $_POST['goal'];

// Insert data into the table
$sql = "INSERT INTO users (first_name, last_name, email, phone, age, gender, diet_preference, goal, registration_date) 
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$age', '$gender', '$diet_preference', '$goal', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

