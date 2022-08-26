<?php require('./backend/actions/finishAction.php'); 

  // if ($senderCountry == 'civ') {
  //   $change = 'FCFA';
  // } else if ($senderCountry == 'russie') {
  //   $change = 'RUB';
  // } else if ($senderCountry == 'civ') {
  //   # code...
  // }

  switch ($senderCountry) {
    case 'civ':
      $change = 'FCFA';
      break;
    case 'russie':
      $change = 'RUB';
      break;
    case 'senegal':
      $change = 'FCFA';
      break;
    case 'guinee':
      $change = 'FCFA';
      break;
  }

?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include('./includes/finishHead.php') ?>
<body>
  <div class="container">
    <div id="dismissModal"></div>
    <div>
      <div class="card mb-4">
        <div class="card-body text-center">
          <div class="container">
            <form method="post">
              <div class="d-flex align-items-center justify-content-center mt-4">
                <h2>Finalisation </h2>
                <div style="margin-left: .5rem; color: #2ed573;">
                  <span class="material-symbols-outlined fw-bold fs-2">
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
                    <?php if (isset($amount)) {
                        echo number_format($amount, 2, ',', ' '). ' '. $change;
                      }
                    ?>
                  </span>
                  vers le numéro suivant: <br> 
                  <span class="fw-bold" id="numberOne">
                    +7 (000) 999 85 52
                  </span>
                  <br>
                  <br>
                  Une foi le dépôt effectué, cliquer sur <b>dépôt effectuer</b> pour terminer. <br> Vous recevrez votre argent dans un delai de <b>10 minutes</b>. <br>
                  Dans le cas contraire, <span class="text-danger fw-bold">l'opération ne sera pas pris en compte.</span>
                  <br>
                  <br>
                </p>
                <div>
                  <button name="send" class="btn btn-success btn-sm mb-3 mx-2" style="background-color: #2ed573; border: none;">
                    Dépôt effectuer
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
  </div>
</body>
</html>