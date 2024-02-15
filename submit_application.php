<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "clothing_store";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Validate and sanitize form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$id_number = mysqli_real_escape_string($conn, $_POST['id_number']);

// Simple validation example (you can add more complex validation as needed)
$errors = array();

if (empty($name)) {
    $errors[] = "Name is required";
}

if (empty($age) || !is_numeric($age) || $age <= 0) {
    $errors[] = "Age must be a positive number";
}

if (empty($qualification)) {
    $errors[] = "Qualification is required";
}

// Phone number validation can be more complex depending on requirements
if (empty($phone) || !preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Invalid phone number";
}

if (empty($id_number)) {
    $errors[] = "ID number is required";
}

// If there are validation errors, display them
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    // Save data to database if there are no errors
    $sql = "INSERT INTO job_applications (name, age, qualification, phone, id_number) VALUES ('$name', '$age', '$qualification', '$phone', '$id_number')";
    if (mysqli_query($conn, $sql)) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
