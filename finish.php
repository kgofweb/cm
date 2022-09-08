<?php 
  require('./backend/actions/finishAction.php'); 
  
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

  // Agent Infos
  $agnentNumber = $_SESSION['agnentNumber'];
  $name = $_SESSION['name'];
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
              <span class="material-icons" style="color: #2ed573; font-size: 3.5rem;">
                task_alt
              </span>
              <h2>Finalisation</h2>
            </div>
            <hr>
            <div class="message">
              <p>
                Veuillez effectuer un dépôt sur:
                <span class="fw-bold">
                  <?php if (isset($senderMode)) {
                    echo $senderMode;
                  } ?>
                </span>: <span class="fw-bold" id="numberOne">
                  <?= $agnentNumber ?>
                </span>
                <br>
                Nom du titulaire du compte: <b> <?= $name ?> </b>
                <br>
                Montant: <span class="fw-bold">
                  <?php 
                    if (isset($percentage) && isset($amount)) {
                      echo number_format($percentage + $amount, 2, ',', ' '). ' '. $change;
                    }
                  ?>
                </span>
                <br>
                <br>
                Votre code de retrait est: <span class="fs-5 fw-bold text-primary"><?= $verify_code; ?></span>
                <br>
                <!-- depuis votre compte
                <span class="fw-bold">
                  <?php if (isset($senderPhone)) {
                    echo $senderPhone;
                  } ?>
                </span>  -->

                <br>
                Ensuite cliquez sur <b>dépôt effectué</b>. <br> Vous bénéficiez de <b>15 minutes</b> pour éffectuer le dépôt. <br><br>
                Passé ce délaie, <b>veuillez reprendre la procédure pour obtenir un nouveau code de retrait.</b>
              </p>
              <div>
                <button name="send" class="btn btn-success btn-sm mb-3 mx-2">
                  Dépôt effectué
                </button>
                <!-- <button name="newNumber" class="btn btn-primary btn-sm mb-3 " style="border: none;">
                  Demander un nouveau numéro
                </button> -->
                <button name="back" class="btn btn-secondary btn-sm mb-3">
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
