<?php
// PHP Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Click on Transfert button
if (isset($_POST['send'])) {
  // Verifie if fields are not empty
  if(!empty($_POST['countryOne']) && !empty($_POST['numberPhoneOne']) && !empty($_POST['countryTwo']) && !empty($_POST['numberPhoneTwo']) && !empty($_POST['amount'])) {
    // Get input value
    $countryOne = $_POST['countryOne'];
    $countryTwo = $_POST['countryTwo'];
    $sendMode = $_POST['sendMode'];
    $phoneSender = $_POST['numberPhoneOne'];
    $phoneReceiver = $_POST['numberPhoneTwo'];
    $amount = $_POST['amount'];

    // Save in data base

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
            <span style='font-size: 1rem;'>Pays Expéditeur: <b>$countryOne</b> </span> <br>
            <span style='font-size: 1rem;'>Mode Envoi: <b>$sendMode</b> </span> <br>
            <span style='font-size: 1rem;'>N° Téléphone: <b>$phoneSender</b> </span> <br>
            <hr>
            <span style='font-size: 1rem;'>Pays Récepteur: <b>$countryTwo</b> </span> <br>
            <span style='font-size: 1rem;'>N° Téléphone: <b>$phoneReceiver</b> </span> <br>
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

    $mail->send();

    echo
      "
        <script>
          alert('Sent Successfully');
        </script>
      ";
  } else {
    $errorMsg = 'Veuillez renseigner tous les champs !';
  }
}


// Return to home page
if (isset($_POST['back'])) {
  header('Location: ./index.php');
}
