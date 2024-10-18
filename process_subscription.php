<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['subscription_email'];

    // Save data to a file or database
    $data = "Email: $email\n";
    file_put_contents('subscriptions.txt', $data, FILE_APPEND);

    // Redirect or show a thank you message
    header("Location: thank_you.html");
    exit();
}
?>
