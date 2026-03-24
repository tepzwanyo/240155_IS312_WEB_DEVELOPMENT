<?php
// Author: Sandrick
// Date: 22nd March 2025
// Unit: IS312 Web Application Development

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$programCode = $_POST['programCode'];
$programName = $_POST['programName'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$programCode', '$programName')";

if ($conn->query($sql) === TRUE) {
    echo "New program added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>