<?php require('./backend/actions/finishAction.php'); 
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

  $verify_code = $_SESSION['verify_code'];

  // if (isset($verify_code)) {
  //   echo $verify_code;
  // }

?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include('./includes/finishHead.php') ?>
<body>
  <div class="container">
    <!-- Back -->
    <!-- <div class="mt-4">
      <a href="./check.php" class="navbar-brand text-white">
        <i class="fa-solid fa-angle-left"></i>
        Retour
      </a>
    </div> -->

    <div class="card mb-4">
      <div class="card-body text-center">
        <div class="container">
          <form method="post">
            <div class="d-flex align-items-center justify-content-center mt-0">
              <div>
                <span style="color: #2ed573; font-size: 3rem;" class="material-symbols-outlined fw-bold">
                  task_alt
                </span>
              </div>
            </div>
            <hr>
            <div class="message">
              <p>
                Vueiller effectuer un transfert 
                <span class="fw-bold">
                  <?php if (isset($senderMode)) {
                    echo $senderMode;
                  } ?>
                </span> 
                d'une valeur de 
                <span class="fw-bold">
                  <?php 
                    if (isset($percentage) && isset($amount)) {
                      echo number_format($percentage + $amount, 2, ',', ' '). ' '. $change;
                    }
                  ?>
                </span>
                depuis votre compte
                <span class="fw-bold">
                  <?php if (isset($senderPhone)) {
                    echo $senderPhone;
                  } ?>
                </span> 
                vers le numéro suivant:
                <span class="fw-bold" id="numberOne">
                  +7 (000) 999 85 52
                </span> <br>
                Nom de l'agent: <b>Madiba</b> <br>
                Votre code de retrait est: <span style="text-decoration: underline;" class="fs-5 fw-bold text-primary"><?= $verify_code; ?></span>
                <br>
                <br>
                Une foi le dépôt effectué, cliquer sur <b>dépôt effectuer</b> pour terminer. <br> Vous recevrez votre argent dans un delai de <b>10 minutes</b>. <br>
                Dans le cas contraire, <span class="text-danger fw-bold">l'opération ne sera pas pris en compte.</span>
                <br>
                <br>
              </p>
              <div>
                <button name="send" class="btn btn-success btn-sm mb-3 mx-0" style="background-color: #2ed573; border: none;">
                  Dépôt effectuer
                </button>
                <button name="new" class="btn btn-primary btn-sm mb-3 " style="border: none;">
                  Demander un nouveau numéro
                </button>
                <button name="back" class="btn btn-danger btn-sm mb-3" style="border: none;">
                  Annuler
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>