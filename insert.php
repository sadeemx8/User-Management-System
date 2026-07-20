<?php
$servername = "sql208.infinityfree.com";
$username = "if0_42450081";
$password = "B22hnFoUtgZLU5";
$dbname = "if0_42450081_userstatus";

$name = $_POST['name'];
$age = $_POST['age'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, age, status)
VALUES ('$name', '$age', 0)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>