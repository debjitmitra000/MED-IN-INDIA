<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.elasticemail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'debjitmitra.portfolio@gmail.com'; // Replace with your Elastic Email username
        $mail->Password   = 'DB01ADFDE6B73B16413FB202C7C3728F933B'; // Replace with your Elastic Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('debjitmitra.portfolio@gmail.com', 'Debjit');
        $mail->addAddress($email);

        if ($_FILES['attachment']['name'] != null) {
            if (move_uploaded_file($_FILES['attachment']['tmp_name'], "uploads/{$_FILES['attachment']['name']}")) {
                $mail->addAttachment("uploads/{$_FILES['attachment']['name']}");
            }
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo '<script>alert("Message Sent")</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
