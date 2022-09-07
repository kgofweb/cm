<?php
  require('./backend/actions/verifyAction.php');

  switch ($receiverCountry) {
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
?>

<!DOCTYPE html>
<html lang="en">
<?php include './includes/verifyHead.php' ?>

<body>
  <div class="container">
    <!-- Back -->
    <!-- <div class="mt-4">
      <a href="./finish.php" class="navbar-brand text-white">
        <i class="fa-solid fa-angle-left"></i>
        Retour
      </a>
    </div> -->

    <?php if (isset($_SESSION['success'])) {
      ?>
        <div class="toast align-items-center text-white bg-success border-0 mt-4" role="alert" aria-live="assertive"
          aria-atomic="true" style="z-index: 1000;">
          <div class="d-flex">
            <div class="toast-body">
              <?php echo $_SESSION['success']; ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
              aria-label="Close"></button>
          </div>
        </div>
      <?php
        unset($_SESSION['success']);
      }
    ?>

    <!-- HTML -->
    <div class="card mt-5">
      <form method="POST">

        <div class="card-body text-center">
          <div class="card-title">
            <span class="material-icons" style="color: #F9A826; font-size: 5rem;">
              pending_actions
            </span>
            <h4 class="fw-bold">Vérification par le système</h4>
          </div>
          <hr>
          <!-- <p>
            Nous effectuons une <span class="fw-bold">vérification de votre transaction.</span> <br>
            Toute fois, notez que cette dernière peut prendre <span class="fw-bold">5</span> à <span class="fw-bold">10 minutes. <br> <span style="color: #F9A826;">Veuiller patientez.</span></span><br>
            <span class="fw-bold">Une foi la vérification approuvée</span>, le bénéficiaire recevra la somme de <br> <span class="text-success fw-bold">
              <?php if (isset($finalAmount)) {
                echo $finalAmount;
              } ?>
            </span>
            <br>
            <br>
            <span class="text-primary fs-3 fw-bold">
              <?php if (isset($verify_code)) { 
                echo $verify_code; 
              } else {
                echo "Une erreur s'est produite";
              } ?>
            </span> <br>
            <span class="fw-bold">
              Remettez le code ci-dessus à votre destinataire pour qu'il puisse effectuer son retrait.
            </span>
            <br>
            <br>
            <span class="text-success"><span class="fw-bold">Chapmoney</span> vous remercie.</span>
          </p> -->

          <p>
            Le système vérifira la réception des fonds automatiquement et rendra <b>valide</b> le code de retrait au bout de <span class="fw-bold">5 minutes.
            </span>
            <br>
            <span class="text-primary fs-3 fw-bold">
              <?php if (isset($verify_code)) { 
                echo $verify_code; 
              } else {
                echo "Une erreur s'est produite";
              } ?>
            </span>
            <br>
            <span class="fw-bold">
              Remettez le code ci-dessus à votre destinataire pour qu'il puisse effectuer son retrait sur chapmoney.
            </span>
            <br>
            <br>
            <span class="text-success"><span class="fw-bold">Chapmoney</span> vous remercie.</span>
          </p>
          <!-- Back home -->
          <button name="backToHome" class="btn btn-success btn-sm mx-2">Terminer</button>
          <button name="download" class="btn btn-primary btn-sm">Obtenir le Check</button>
        </div>

      </form>
    </div>
  </div>

  <script>
    window.onload = (event) => {
      let myToast = document.querySelector('.toast')
      let alertToast = new bootstrap.Toast(myToast)
      alertToast.show()
    }
  </script>
</body>

</html>