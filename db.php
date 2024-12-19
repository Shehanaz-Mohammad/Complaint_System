<?php


$servername = "localhost";
$username = "root";
$password = "Shannu@1038MYSQL";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "success";
}
?>