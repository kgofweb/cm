<?php
require('./backend/actions/sendToEmail.php');

// If we are not differents variables, redirect user to home page
if (!isset($_SESSION['auth'])) {
  header('Location: index.php');
}

// PHP Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Import PHPMailer components
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Variables
$senderCountry = $_SESSION['countryOne'];
$receiverCountry = $_SESSION['countryTwo'];
$senderMode = $_SESSION['sendMode'];
// $receiverMode = $_SESSION['receiveMode'];
$senderPhone = $_SESSION['numberPhoneOne'];
$receiverPhone = $_SESSION['numberPhoneTwo'];
$amount = $_SESSION['amount'];
// Pourcentage
$percentage = $_SESSION['percentage'];
$finalAmount = $_SESSION['finalAmount'];
// echo $finalAmount;
// Code de verification
$verify_code = $_SESSION['verify_code'];

// Amount
$total = number_format($percentage + $amount, 2, ',', ' ');

// Total
$_SESSION['total'] = $total;

$name = 'Mister Madiba';
$agnentNumber = '+7 (000) 999 99 99';

$_SESSION['name'] = $name;
$_SESSION['agnentNumber'] = $agnentNumber;

switch ($senderCountry) {
  case 'civ':
    $change = 'FCFA';
    break;
  case 'mali':
    $change = 'FCFA';
    break;
  case 'senegal':
    $change = 'FCFA';
    break;
  case 'benin':
    $change = 'FCFA';
    break;
  case 'cameroun':
    $change = 'FCFA';
    break;
  case 'cameroun':
    $change = 'FCFA';
    break;
  case 'congo':
    $change = 'FCFA';
    break;
  case 'gabon':
    $change = 'FCFA';
    break;
  case 'russie':
    $change = 'RUB';
    break;
}

if (isset($_POST['send'])) {
  // Send to email
  $mail = new PHPMailer(true);

  try {
    //SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = 0;
    //Send using SMTP
    $mail->isSMTP();
    //Set the SMTP server to send through
    $mail->Host = 'smtp.gmail.com';
    //Enable SMTP authentication
    $mail->SMTPAuth = true;
    //SMTP username
    $mail->Username = 'testmyapphere01@gmail.com';
    //SMTP password
    $mail->Password = 'vfmgqlvbwwopousl';
    //Enable TLS encryption;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    //Recipients
    $mail->setFrom('from@example.com', 'Chapmoney');
    //Add a recipient
    $mail->addAddress('chapmoneyapp@gmail.com');
    //Set email format to HTML
    $mail->isHTML(true);

    $mail->Subject = 'New Transaction';
    $mail->Body = "
      <table style='background-color: #111; color: #fff; width: 85%; margin: auto; color: #fff; border-top: 15px solid #eb3b5a;'>
        <tr>
          <td style='padding: 1rem 1.8rem;'>
            <h2 style='text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; border-bottom: 1.5px solid #636e72;'>
              <span style='margin: .5rem auto;'>Nouvelle Transaction</span>
            </h2>
            <span style='font-size: 1rem;'>Pays Expéditeur: <b style='color: #eb3b5a;'>$senderCountry</b> </span> <br>
            <span style='font-size: 1rem;'>Mode Envoi: <b style='color: #eb3b5a;'>$senderMode</b> </span> <br>
            <span style='font-size: 1rem;'>N° Téléphone Expéditeur: <b style='color: #eb3b5a;'>$senderPhone</b> </span> <br>
            <br>
            <span style='font-size: 1rem;'>Pays Récepteur: <b style='color: #3867d6;'>$receiverCountry</b> </span> <br>
            <span style='font-size: 1rem;'>N° Téléphone Récepteur: <b style='color: #3867d6;'>$receiverPhone</b> </span> <br>
            <br>
            <span style='font-size: 1rem;'>Montant recut: <b style='color: #20bf6b;'>$total $change</b> </span> 
            <br/>
            <span style='font-size: 1rem;'>Montant à transférer: <b style='color: #20bf6b;'>$finalAmount</b> </span>
            <br>
            <br>
            <span style='font-size: 1rem; color: #fff;'>Nom du titulaire du compte: <b style='color: #0fb9b1;'>$name</b> </span> <br>
            <span style='font-size: 1rem; color: #fff;'>Son N° de téléphone: <b style='color: #0fb9b1;'>$agnentNumber</b> </span>
            <br>
            <br>
            <span style='font-size: 1rem;'>Code de vérification recut par le client: <b style='color: #f7b731;'>$verify_code</b></span>
            <br>
            <br>
            <p style='font-size: .9rem; text-align: center; text-decoration: underline; color: #fff;'>Chapmoney &copy; 2022 </p>
            <p style='text-align: center; font-size: .5rem; color: #ecf0f1'>Email sent by @chapmoney, Please don't replay.</p>
          </td>
        </tr>
      </table>
    ";

    // Send email
    if ($mail->send()) {
      // Show success message 
      $_SESSION['success'] = 'Votre transaction a été recue et est en cours de vérifiaction.';
      // Redirect User
      header('Location: verify.php');
    }

  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

// Back and remove all
if (isset($_POST['back'])) {
  $_SESSION['error'] = 'Votre transaction a été annuler';
  header('Location: ./index.php');
}

