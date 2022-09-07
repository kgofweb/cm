<?php
require('./backend/actions/sendToEmail.php');

// If we are not differents variables, redirect user to home page
if (!isset($_SESSION['auth'])) {
  header('Location: index.php');
}

// Sender Country
$receiverCountry = $_SESSION['countryTwo'];
// Code verification
$verify_code = $_SESSION['verify_code'];
// Total Amount
$finalAmount = $_SESSION['finalAmount'];

if (isset($_POST['backToHome'])) {
  $_SESSION['validate'] = 'Terminé avec succes !';
  header('Location: ./index.php');
  // Si on détruit la session on pourra pas afficher le messages avec le Toast
}