<?php
// Include the PHPMailerAutoload.php file from the PHPMailer library
// require 'path/to/PHPMailerAutoload.php'; // Adjust the path accordingly
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input text from the form
    $inputText = $_POST["inputText"];

    // Get the sender's contact from the form
    $senderContact = $_POST["senderContact"];

    // Set the target email address
    $to = "neolight4136@gmail.com";

    // Set the subject of the email
    $subject = "New Form Submission";

    // Compose the email message
    $message = "Message : \n$inputText\n\nSender Contact:\n$senderContact";

    // Handle file upload
    $fileTmpPath = $_FILES['fileInput']['tmp_name'];
    $fileName = $_FILES['fileInput']['name'];

    if (!empty($fileName)) {
        // Move the uploaded file to a destination folder
        $uploadDir = 'uploads/';
        $destPath = $uploadDir . $fileName;
        move_uploaded_file($fileTmpPath, $destPath);

        // Add a link to the uploaded file in the email message
        $message .= "\n\nAttached File: $destPath";
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Enable SMTP debugging (for testing)
    // $mail->SMTPDebug = 2;

    // Set mailer to use SMTP
    $mail->isSMTP();

    // Specify SMTP host
    $mail->Host = 'smtp.gmail.com'; // Update with your SMTP server

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // SMTP username and password
    $mail->Username = 'neolight7424@gmail.com'; // Update with your SMTP username
    $mail->Password = '0819837424'; // Update with your SMTP password

    // Set sender and recipient addresses
    $mail->setFrom('neolight4136@gmail.com', 'Rei'); // Update with your email and name
    $mail->addAddress($to);

    // Set email subject and body
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    if ($mail->send()) {
        echo "Email sent successfully";
    } else {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
} else {
    // Redirect to the form page if accessed directly without submission
    header("Location: index.html");
    exit();
}
?>
