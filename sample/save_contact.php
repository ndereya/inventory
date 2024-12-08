<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bongo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name1 = $_POST["name1"];
$email1 = $_POST["email1"];
$name2 = $_POST["name2"];
$email2 = $_POST["email2"];

$sql = "INSERT INTO contacts (name1, email1, name2, email2)
VALUES ('$name1', '$email1', '$name2', '$email2')";

if ($conn->query($sql) === TRUE) {
    echo "New contact saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>