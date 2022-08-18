<?php
require('./backend/actions/sendToEmail.php');

// If we are not different variables
if (!isset($_SESSION['auth'])) {
  header('Location: index.php');
}

// PHP Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Variables
$senderCountry = $_SESSION['countryOne'];
$receiverCountry = $_SESSION['countryTwo'];
$senderMode = $_SESSION['sendMode'];
$receiverMode = $_SESSION['receiveMode'];
$senderPhone = $_SESSION['numberPhoneOne'];
$receiverPhone = $_SESSION['numberPhoneTwo'];
$amount = $_SESSION['amount'];

// Typeof in php
// echo gettype($amount);

if (isset($_POST['send'])) {
  // Send to email
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;

  // My Gmail
  $mail->Username = 'mervydevmedia@gmail.com'; 
  //  Gmail App password
  $mail->Password = 'iviaogmxshpqlqud';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->Subject = 'ChapMoney Transaction';
  $mail->Body = "
    <table style='background-color: #eef6f8; width: 85%; margin: auto; border-radius: .5rem;'>
      <tr>
        <td style='padding: .8rem 1rem; '>
          <h1 style='text-align: center; border-bottom: 1.5px solid #424242'>Nouvelle Transaction !</h1>
          <span style='font-size: 1rem;'>Pays Expéditeur: <b>$senderCountry</b> </span> <br>
          <span style='font-size: 1rem;'>Mode Envoi: <b>$senderMode</b> </span> <br>
          <span style='font-size: 1rem;'>N° Téléphone: <b>$senderPhone</b> </span> <br>
          <hr>
          <span style='font-size: 1rem;'>Pays Récepteur: <b>$receiverCountry</b> </span> <br>
          <span style='font-size: 1rem;'>Mode Envoi: <b>$receiverMode</b> </span> <br>
          <span style='font-size: 1rem;'>N° Téléphone: <b>$receiverPhone</b> </span> <br>
          <hr>
          <span style='font-size: 1rem; margin-bottom: 2rem;'>Amount: <b>$amount XOF</b> </span> <br>
          <p style='font-size: .7rem; text-align: center;'> Chapmoney &copy; 2022 </p>
        </td>
      </tr>
    </table>
  ";

  $mail->setFrom('mervydevmedia@gmail.com');
  $mail->addAddress('mervydevmedia@gmail.com');
  $mail->isHTML(true);

  // $mail->send();

  if ($mail->send()) {
    // Show success message 
    $_SESSION['success'] = 'Votre transaction a été recue. Merci de faire confiance a ChapMoney';
    header('Location: index.php');
  } else {
    echo "Une erreur s'est produite, Vueillez réessayer";
  }
}

// Back and remove all
if (isset($_POST['back'])) {
  $_SESSION['error'] = 'Votre transaction a été annuler';
  header('Location: ./index.php');
}