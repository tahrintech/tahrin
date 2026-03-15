<?php
// save.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n---\n";

    // Save to a text file
    file_put_contents("contacts.txt", $data, FILE_APPEND);

    echo "Thank you! Your message has been saved.";
}
?>
