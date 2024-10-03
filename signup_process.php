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

    // Insert data into the users table
    $sql = "INSERT INTO users (first_name, last_name, email, date_of_birth, phone, password, gender, selected_courses, teaching_courses) 
            VALUES ('$first_name', '$last_name', '$email', '$date_of_birth', '$phone', '$password', '$gender', '$selected_courses', '$teaching_courses')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
