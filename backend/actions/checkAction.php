<?php
// If we are not different variables
if (!isset($_SESSION['auth'])) {
  header('Location: ./index.php');
}

// Get value of input
$senderCountry = $_SESSION['countryOne'];
$receiverCountry = $_SESSION['countryTwo'];
$senderMode = $_SESSION['sendMode'];
// $receiverMode = $_SESSION['receiveMode'];
$senderPhone = $_SESSION['numberPhoneOne'];
$receiverPhone = $_SESSION['numberPhoneTwo'];
$amount = $_SESSION['amount'];

// Send Email
if (isset($_POST['send'])) {
  // Generate random code
  $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
  // Save it in session
  $_SESSION['verify_code'] = $verification_code;

  header('Location: ./finish.php');
}

if (isset($_POST['back'])) {
  header('Location: ./send.php');
  // Destroy all variables who are in table
  session_destroy();
}