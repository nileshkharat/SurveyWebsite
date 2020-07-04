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

// sql to create table
$sql = "CREATE TABLE A_ten (
   ID int AUTO_INCREMENT,
   ten VARCHAR(30),
   PRIMARY KEY (ID)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>