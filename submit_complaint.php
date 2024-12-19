<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $problem = $_POST['problem'];
    $solution = $_POST['solution'] ?? '';
    $attachment = $_FILES['attachment']['name'] ?? '';

    // Move uploaded file to a designated location
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["attachment"]["name"]);
    move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file);

    // Insert data into the database
    $sql = "INSERT INTO complaints (name, class, section, problem, solution, attachment)
            VALUES ('$name', '$class', '$section', '$problem', '$solution', '$attachment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// $conn->close();
?>