<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


// Start
include('./database.php');

session_start();
if (isset($_POST['submit_btn'])) {

    $errors = array(); // Initialize an array to store error messages

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
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = 'duaobzorxqgasdgc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 587;

    $mail->setFrom($email);
    $mail->addAddress($email);

    $mail->isHtml(true);

    $mail->Subject = 'Confirmation';
    $mail->Body    = "Your Message Sent Successfully, Our Team will contact to you as soon as possible";


    // Check if there are any errors
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
