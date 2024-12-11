<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelance_requests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$client_name = $_POST['client_name'];
$email = $_POST['email'];
$project_title = $_POST['project_title'];
$project_description = $_POST['project_description'];
$budget = $_POST['budget'];
$deadline = $_POST['deadline'];
$urgency = $_POST['urgency'];
$communication = $_POST['communication'];

// Insert data into database
$sql = "INSERT INTO requests (client_name, email, project_title, project_description, budget, deadline, urgency, communication)
VALUES ('$client_name', '$email', '$project_title', '$project_description', $budget, '$deadline', '$urgency', '$communication')";

if ($conn->query($sql) === TRUE) {
    echo "Project request submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
