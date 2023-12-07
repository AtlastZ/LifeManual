<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input text from the form
    $inputText = $_POST["inputText"];

    // Set the target email address
    $to = "neolight4136@gmail.com";

    // Set the subject of the email
    $subject = "New Form Submission!!";

    // Compose the email message
    $message = "Message : $inputText";

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

    // Set additional headers
    $headers = "From: neolight41366@gmail.com\r\n";
    $headers .= "Reply-To: neolight413666@gmail.com\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Error sending email";
    }
} else {
    // Redirect to the form page if accessed directly without submission
    header("Location: index.html");
    exit();
}
?>
