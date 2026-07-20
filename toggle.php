<?php
$servername = "sql208.infinityfree.com";
$username = "if0_42450081";
$password = "B22hnFoUtgZLU5";
$dbname = "if0_42450081_userstatus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "UPDATE users
        SET status = IF(status = 0, 1, 0)
        WHERE id = $id";

$conn->query($sql);

$conn->close();

header("Location: index.php");
exit();
?>