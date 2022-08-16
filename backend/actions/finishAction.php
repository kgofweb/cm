<?php
require('./backend/actions/sendToEmail.php');

// If we are not different variables
if (!isset($_SESSION['auth'])) {
  header('Location: index.php');
}

$senderMode = $_SESSION['sendMode'];
$senderPhone = $_SESSION['numberPhoneOne'];
$amount = $_SESSION['amount'];

// Typeof in php
// echo gettype($amount);

?>