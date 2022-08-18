<?php
session_start();

// Click on Transfert button
if (isset($_POST['send'])) {
  // Verifie if fields are not empty
  if(!empty($_POST['countryOne']) && !empty($_POST['numberPhoneOne']) && !empty($_POST['countryTwo']) && !empty($_POST['numberPhoneTwo']) && !empty($_POST['amount'])) {
    // Get input value
    $countryOne = $_POST['countryOne'];
    $countryTwo = $_POST['countryTwo'];
    $sendMode = $_POST['sendMode'];
    $receiveMode = $_POST['receiveMode'];
    $phoneSender = $_POST['numberPhoneOne'];
    $phoneReceiver = $_POST['numberPhoneTwo'];
    $amount = $_POST['amount'];

    // Get data from selected
    $_SESSION['auth'] = true;
    $_SESSION['countryOne'] = $countryOne;
    $_SESSION['countryTwo'] = $countryTwo;
    $_SESSION['sendMode'] = $sendMode;
    $_SESSION['receiveMode'] = $receiveMode;
    $_SESSION['numberPhoneOne'] = $phoneSender;
    $_SESSION['numberPhoneTwo'] = $phoneReceiver;
    $_SESSION['amount'] = $amount;

    // Redirect to check page
    header('Location: ./check.php');

  } else {
    $errorMsg = 'Veuillez renseigner tous les champs !';
  }
}

// Return to home page
if (isset($_POST['back'])) {
  header('Location: ./index.php');
}