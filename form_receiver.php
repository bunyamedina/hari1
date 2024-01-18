<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Do something with the data (e.g., store it in a database, send an email, etc.)
    
    // For demonstration purposes, let's just echo the received data
    echo "Name: $name<br>";
    echo "Email: $email<br>";
} else {
    // Redirect or handle the situation when the form is not submitted properly
    echo "Form submission error!";
}
?>
