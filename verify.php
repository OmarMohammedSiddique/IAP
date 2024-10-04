<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Adjust if you use a different username
$password = ""; // Add your password if needed
$dbname = "skillswap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form inputs
    $email = $conn->real_escape_string($_POST['email']);
    $verification_code = $conn->real_escape_string($_POST['verification_code']);

    // Check if the verification code matches
    $sql = "SELECT * FROM users WHERE email = '$email' AND verification_code = '$verification_code' AND verified = 0";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Update the verified status
        $sql = "UPDATE users SET verified = 1 WHERE email = '$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Your email has been verified successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid verification code or email already verified.";
    }

    // Close the connection
    $conn->close();
}
?>
