<?php
session_start();
include 'navbar.php'; 
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

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
      $mail->Username   = 'webmsa8@gmail.com'; // Your SMTP username
      $mail->Password   = 'zsoj ihog iaqv fnad'; // Your SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587; // TCP port to connect to

      //Recipients
      $mail->setFrom($sender);
      $mail->addAddress('webmsa8@gmail.com'); // Change this to your email address

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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./img.s/icon3.png">
    <title>Jawhara-contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css.s/contact.css">
  <link rel="stylesheet" href="./css.s/home.css">
  <link rel="stylesheet" href="./css.s/page.css">
  <link rel="stylesheet" href="./css.s/btn.css">
  <link rel="stylesheet" href="./css.s/fixcard.css">
  <link rel="stylesheet" href="./css.s/stylek.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
   
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
          <h1> Un air d'espoir sur votre vie sportive </h1>
          <div class="para">
            <p> Coaching entièrement personnalisé</p>
            <p>+ Renouveller votre pratique de coaching</p>
            <p>+ Transformer vos informations en résultat</p>
            <p>+ Dessiner votre histoire de succés</p>
          </div>
          <h3 data-aos="fade-up">NOUS JOINDRE</h3>
          <div class="phone_num" data-aos="fade-up">+212 654 393 672</div>
          <h3 data-aos="fade-up">NOUS TROUVER</h3>
          <div class="location" data-aos="fade-up">
            AV 18 NOVEMBRE RUE 02 N 31 
            81000 GUELMIM
          </div>
        </div>
      </div>
      <div class="col-12 col-md-7">
        <form action="" method="post">
          <h2>Contactez-nous</h2>
          <label for="#">Quel est votre nom ?
</label>
          <input type="text" name="name" placeholder="Hubble" />
          <label for="#">Votre numéro de téléphone*</label>
          <input type="tel" name="phone" placeholder="06********" />
          <label for="#">Votre e-mail professionnel*</label>
          <input type="email" name="email" placeholder="oussama@gmail.com" />
          <label for="#">Écrivez votre message*</label>
          <textarea name="msg" id="" cols="30" rows="10" placeholder="En quoi pouvons-nous vous aider ?"></textarea>
          <input type="submit" name="send" class="mt-4" value="send" />
        </form>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>



  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>