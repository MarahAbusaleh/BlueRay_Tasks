<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


// Start
include('./database.php');

session_start();
if (isset($_POST['submit_btn'])) {

    $errors = array();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    if (empty($name)) {
        $errors['name_error'] = 'Please enter the Name';
    }
    if (empty($email)) {
        $errors['email_error'] = 'Please enter the Email';
    }
    if (empty($subject)) {
        $errors['subject_error'] = 'Please enter the Subject';
    }
    if (empty($message)) {
        $errors['msg_error'] = 'Please enter the Message';
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'marah.abusaleh12@gmail.com';
    $mail->Password = 'duaobzorxqgasdgc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    try {
        $mail->setFrom($email);
        $mail->addAddress($email);

        $mail->isHtml(true);

        $mail->Subject = 'Thank You For Contact Us!';
        $mail->Body = '<html>
                <body>
                <h1 style="color:blue">Confirmation Email: Thank You For Contact Us!</h1>
                    <h5>Your Message Sent Successfully, Our Team will contact you as soon as possible.</h5>
                    <p>Email: <a href="mailto:hr@bluerayws.com">hr@bluerayws.com</a></p>
                    <p>Phone: <a href="tel:+962798091253">+962 7 9809 1253</a></p>
                </body>
                </html>';

        $mail->AltBody = 'Your Message Sent Successfully, Our Team will contact you as soon as possible.';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

    if (empty($errors)) {

        $mail->send();

        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $sql)) {
            unset($_SESSION['form_errors']);
            unset($_SESSION['form_data']);
            header("Location: ./popup.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        $_SESSION['form_data'] = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        );
        $_SESSION['form_errors'] = $errors;
        header("Location: ./index.php");
        exit();
    }
}
