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

$sql = "SELECT * FROM contacts WHERE name1 = '$name1' AND email1 = '$email1' AND name2 = '$name2' AND email2 = '$email2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "true";
} else {
    echo "false";
}

$conn->close();
?>