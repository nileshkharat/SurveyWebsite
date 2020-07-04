<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (uname,email,age)
VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['age']."')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location:one.php');
?>