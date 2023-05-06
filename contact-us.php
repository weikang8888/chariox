<?php

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['send'])) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $phoneNumber = htmlentities($_POST['phoneNumber']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);

    // Server Settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cheeleong3400@gmail.com';
    $mail->Password = 'leekmdhpfjvjniqk';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';

    // Recipients
    $mail->setFrom('cheeleong3400@gmail.com');
    $mail->addAddress('cheeleong3400@gmail.com');
    // $mail->addReplyTo('weikangng0323@gmail.com');
    // $mail->addCC();
    // $mail->addBCC();

    // Content
    $mail->isHTML(true);
    // $mail->Subject = $subject;
    $mail->Body = '<p>Name: ' . $name . '</p> <p>Phone Number: ' . $phoneNumber . '</p> <p>Email: ' . $email . '</p>  <p>Message:' . $message . '</p>';
    $mail->AltBody = 'Test test test';
    $mail->send();

    $mail->clearAddresses();
    $mail->setFrom('cheeleong3400@gmail.com');
    $mail->addReplyTo('cheeleong3400@gmail.com');
    $mail->addAddress($email);
    $mail->Subject = 'Thank you for contacting Chariox!';
    $mail->Body = "<h2>If you don't mind checking your work email on your leave</h2>
    <p>Hi!</p>
    <p>Thank you for reaching out. I will be out of the office from March 6 through 10 and will be returning on March 13. </p>
    <p>I’ll check my email periodically, but if you need an immediate response, don’t hesitate to get in touch with our Marketing Head, Aisyah Lim (aisyah.lim@abcde.com; chat: @aisyah.lim) or our Traffic Coordinator, Farah Tan (farah.tan@abcde.com; chat: @farah.tan).</p>
    <p>For urgent concerns, you can send me a chat at @your.name. I’ll attend to it as soon as I am free.</p>
    <p>You can also refer to these helpful resources for FAQs:Link 1 Link 2 Link 3 Cheers,</p>
    <p>'.$name.'</p>";

    if ($mail->send()) {
        $result = '<div class="success-message">Thank You! I will be in touch</div>';
    } else {
        $result = '<div class="error-message">Sorry there was an error sending your message. Please try again later.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chariox</title>
    <link rel="stylesheet" href="static/css/style.css" />
    <link rel="stylesheet" href="static/css/bootstrap.css" />
    <link rel="stylesheet" href="static/css/font.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>

  <body>
    <!-- Topbar Start -->
    <?php $page='contact'; include 'header.php'?>
    <!-- Topbar End -->

    <article class="chariox-content background-black">
      <div class="contact-us-banner">
        <div class="container">
          <div class="row text-center justify-content-center">
            <h1 class="other-title absolute-bottom">Contact Us</h1>
          </div>
        </div>
      </div>

      <div class="google-map-container my-5">
        <div class="container contact-map">
          <div id="map"></div>
        </div>
      </div>

      <div class="contact-container mb-6">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-6 fst-italic">
              <p>Please give us a call or complete the form to enquire.</p>
              <h2 class="content-title">HEAD OFFICE</h2>
              <p>Address:</p>
              <p>
                PLO 181,Jalan Genuang,Kawasan Perindustrian,85000 Segamat,Johor.
              </p>
              <p>Phone:</p>
              <p>012-254 9609</p>
            </div>
            <div class="col-6">
              <form method="post">
                <div class="contact-form">
                  <div class="contact-form-first-row mb-3">
                    <div class="styled-input wide">
                      <input type="text" name="name" required />
                      <label>Full Name*</label>
                    </div>
                    <div class="styled-input wide">
                      <input type="text" name="phoneNumber" required />
                      <label>Phone Number*</label>
                    </div>
                  </div>
                  <div class="styled-input wide mb-3">
                    <input type="text" name="email" required />
                    <label>Email*</label>
                  </div>
                  <div class="styled-input wide">
                    <textarea class="mb-3" name="message" required></textarea>
                    <label>Message</label>
                  </div>
                  <button type="submit" name="send" value="" class="btn-submit">Submit</button>
                  <?php if (!empty($result)) { echo $result; }?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
    </article>
  </body>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="static/js/contact-map.js"></script>
  <script
    async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB94E1buyq9HpajiO6d8EA8REcskcoAmxw&callback=initMap"></script>
</html>
