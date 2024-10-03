<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "local123"; // Use your password here if you set one
$dbname = "Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (name, email, address) VALUES (?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("sss", $name, $email, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Error executing the statement: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing the statement: " . $conn->error;
}

// Close the connection
$conn->close();
?>
