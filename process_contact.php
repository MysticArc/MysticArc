<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Save data to a file or database
    $data = "Name: $name, Email: $email, Message: $message\n";
    file_put_contents('contacts.txt', $data, FILE_APPEND);

    // Redirect or show a thank you message
    header("Location: thank_you.html");
    exit();
}
?>
