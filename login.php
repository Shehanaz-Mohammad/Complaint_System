<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set in the POST request
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare and execute SQL statement to retrieve user data
        $stmt = $conn->prepare("SELECT * FROM login_info WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a row is returned
        if ($result->num_rows === 1) {
            // Fetch the row and verify the password
            $row = $result->fetch_assoc();
            if ($password == $row['password']) {
                // Password is correct, redirect to dashboard
                header("Location: dashboard.html");
                exit();
            } else {
                // Password is incorrect
                echo "Incorrect password. Please try again.";
            }
        } else {
            // Username does not exist
            echo "Username not found. Please register.";
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        // Handle case where username or password is not set
        echo "Please provide both username and password.";
    }
} else {
    // Handle case where form is not submitted via POST request
    echo "Login form should be submitted via POST request.";
}
?>
