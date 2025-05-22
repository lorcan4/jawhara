<?php
session_start();

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
require '../PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$success_msg = "";
$err_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sender = $_POST["email"];
    $phone = $_POST["phone"]; // Added to retrieve phone number
    $body = $_POST["msg"];

    if (!empty($sender) && !empty($body)) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'hasnaadouwabi05@gmail.com'; // Your SMTP username
            $mail->Password   = 'zfls tjhq wrwm osyo'; // Your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587; // TCP port to connect to

            //Recipients
            $mail->setFrom($sender);
            $mail->addAddress('hasnaadouwabi05@gmail.com'); // Change this to your email address

            // Content
            $mail->isHTML(false); // Set email format to plain text
            $mail->Subject = "Message from $name";
            $mail->Body    = "Name: $name\nEmail: $sender\nPhone: $phone\nMessage: $body";

            $mail->send();
            $success_msg = "Email sent successfully";
        } catch (Exception $e) {
            $err_msg = "Sorry, failed while sending your Email! Error: " . $mail->ErrorInfo;
        }
    } else {
        $err_msg = "Please fill in all required fields";
    }
}
?>
<link rel="stylesheet" href="../view/css/contact.css">
<div class="container">
  <?php
  if ($success_msg) {
    $_SESSION['error_message'] = "<div class='alert alert-success py-4 text-center border-0' id='errorAlert' role='alert'>" . "<h4>" . $success_msg . "</h4>" . "</div>";
    echo $_SESSION['error_message'];
  } elseif ($err_msg) {
    // Clear the error message if there is no error
    $_SESSION['error_message'] = "<div class='alert alert-danger py-4 text-center border-0' id='errorAlert' role='alert'>" . "<h4>" . $err_msg . "</h4>" . "</div>";
    echo $_SESSION['error_message'];
  } else {
    unset($_SESSION['error_message']);
  }
  ?>
</div>
<div class="container my-3 p-3 p-md-5 rounded" style="background-color: aliceblue;">
  <div class="row">
    <div class="col-12 col-md-5">
      <div class="content-txt">
        <h1>Fitness vous intéresse ?</h1>
        <div class="para">
          <p>Maîtrise des données financières</p>
          <p>+ Réduction des coûts</p>
          <p>+ Accroissement de la rentabilité</p>
          <p>+ Gain de temps</p>
        </div>
        <h3>NOUS JOINDRE</h3>
        <div class="phone_num">03 83 27 88 08</div>
        <h3>NOUS TROUVER</h3>
        <div class="location">
          2 Rue Raymond Poincaré
          54000 Nancy
        </div>
      </div>
    </div>
    <div class="col-12 col-md-7">
      <form action="" method="post">
        <h2>Contact Us</h2>
        <label for="#">Your Full name*</label>
        <input type="text" name="name" placeholder="Your name" />
        <label for="#">Your Tel*</label>
        <input type="tel" name="phone" placeholder="06********" />
        <label for="#">Your Email*</label>
        <input type="email" name="email" placeholder="oussama@gmail.com" />
        <label for="#">Your Message*</label>
        <textarea name="msg" id="" cols="30" rows="10" placeholder="Your message"></textarea>
        <input type="submit" name="send" class="mt-4" value="send" />
      </form>
    </div>
  </div>
</div>
