<?php
// Database connection parameters
$host = 'localhost';
$username = 'LAPTOP-073VT2NG';
// $password = 'your_password';
$database = 'Naresh';

// Create a database connection
$conn = new mysqli($host, $username, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$email_subscription = $_POST['email-sub'];
$contact_preference = $_POST['contact-pref'];
$country = $_POST['country'];

// Insert data into the database
$sql = "INSERT INTO contact_form (name, email, message, email_subscription, contact_preference, country)
        VALUES ('$name', '$email', '$message', '$email_subscription', '$contact_preference', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
