<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";  // Host: localhost
$port = 3306;               // Port: 3306
$username = "root";         // User: root
$password = "Remix@12x"; // Replace with your MySQL password
$dbname = "portfoliowebsite";  // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // SQL to insert data into the table
    $sql = "INSERT INTO contactform (Name, Email, Project, Message) VALUES ('$name', '$email', '$project', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}

?>
