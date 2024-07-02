<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['quoteName']);
    $email = htmlspecialchars($_POST['quoteMail']);
    $category = htmlspecialchars($_POST['quoteCategory']);
    $message = htmlspecialchars($_POST['quoteMessage']);

    $to = "contact@sukusalatechnologies.com";  // Replace with your email address
    $subject = "New Quote Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Quote Form Submission\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Category: " . $category . "\n";
    $body .= "Message: " . $message . "\n";

    if (true) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
