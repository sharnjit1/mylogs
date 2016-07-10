<?php
$servername = "localhost";
$username = "local";
$password = "host";
$dbname = "mylogs";

$lead = $_POST["lead"];
$thought = $_POST["thought"];
$emotion = $_POST["emotion"];
$location = $_POST["location"];
$person = $_POST["person"];
$weather = $_POST["weather"];
$extra = $_POST["extra"];
$description = $_POST["description"];
$name = $_POST["name"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql =" INSERT INTO `mylogs`.`logs` ( `lead`, `thought`, `emotion`, `location`, `person`, `weather`, `extra`, `description`, `date_time`, `name`) VALUES ( '$lead', '$thought', '$emotion', '$location', '$person', '$weather', '$extra', '$description', CURRENT_TIMESTAMP, '$name') ";

if ($conn->query($sql) === TRUE) {
header('Location: logs.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>