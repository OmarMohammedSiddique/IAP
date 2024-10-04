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
    $first_name = $conn->real_escape_string($_POST['name-1']);
    $last_name = $conn->real_escape_string($_POST['name-2']);
    $email = $conn->real_escape_string($_POST['email']);
    $date_of_birth = $conn->real_escape_string($_POST['date']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $gender = $conn->real_escape_string($_POST['select']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_BCRYPT); // Hashing the password for security

    // Handle checkbox values (selected courses and courses to teach)
    $selected_courses = implode(", ", $_POST['checkbox']); // Convert array to comma-separated string
    $teaching_courses = implode(", ", $_POST['checkbox-1']); // Convert array to comma-separated string

    // Generate a random verification code
    $verification_code = rand(100000, 999999); // Generate a 6-digit code

    // Insert data into the users table
    $sql = "INSERT INTO users (first_name, last_name, email, date_of_birth, phone, password, gender, selected_courses, teaching_courses, verification_code) 
            VALUES ('$first_name', '$last_name', '$email', '$date_of_birth', '$phone', '$password', '$gender', '$selected_courses', '$teaching_courses', '$verification_code')";

    if ($conn->query($sql) === TRUE) {
        // Send verification code to the user's email
        $to = $email;
        $subject = "SkillSwap Email Verification";
        $message = "Your verification code is: $verification_code";
        $headers = "From: no-reply@skillswap.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "New record created successfully! Please check your email for the verification code.";
        } else {
            echo "Failed to send verification email.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
