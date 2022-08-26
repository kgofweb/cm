<?php
  require('./backend/actions/sendToEmail.php');
  require('./backend/actions/checkAction.php');

  // Afrique de l'ouest
  $civRussia = 0.090;
  $russiaCIV = 9.8;

  // Afrique centrale
  $rateAC = 0.089;
  $rateRubAc = 10;

  // Only guinee
  $guinRus = 0.00689;
  $rusGuin = 145.15;

  $rate = 1;

  // Convert amount
  $amountConvert = intval($amount);

  // percentage
  $percentageAfriqueOuest = 0.02;
  $percentageAfriqueCentrale = 0.08;
  $percentageEntreAfriqueCentrale = 0.05;


  // ============= Afrique de l'ouest vers russie ============= //
  if (($senderCountry === 'civ' || $senderCountry === 'mali' || $senderCountry === 'senegal' ||   $senderCountry === 'benin') && $receiverCountry === 'russie') {
    $finalAmount = number_format($amountConvert * $civRussia, 2, ',', ' '). ' RUB';
    $change = 'FCFA';

    $percentage = number_format($amountConvert * $percentageAfriqueOuest, 2, ',', ' '). ' FCFA';
  } 
  // ============= Afrique centrale vers russie ============= //
  else if (($senderCountry === 'gabon' || $senderCountry === 'cameroun' || $senderCountry === 'congo') && $receiverCountry == 'russie') {
    $finalAmount = number_format($amountConvert * $rateAC, 2, ',', ' '). ' RUB';
    $change = 'FCFA';

    $percentage = number_format($amountConvert * $percentageAfriqueCentrale, 2, ',', ' '). ' FCFA';
  } 
  // Russie vers Afrique centrale
  else if ($senderCountry === 'russie' && ($receiverCountry === 'gabon' || $receiverCountry === 'cameroun' || $receiverCountry === 'congo')) {
    $finalAmount = number_format($amountConvert * $rateRubAc, 2, ',', ' '). ' FCFA';
    $change = 'RUB';
    $percentage = number_format($amountConvert * $percentageAfriqueCentrale, 2, ',', ' '). ' RUB';
  }
  
  // ================= Entre Afrique de l'ouest 2% ================= //
  else if (($senderCountry == 'civ' || $senderCountry == 'benin' || $senderCountry == 'senegal' || $senderCountry == 'mali') && ($receiverCountry == 'civ' || $receiverCountry == 'mali' || $receiverCountry == 'senegal' || $receiverCountry == 'benin')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
    $percentage = number_format($amountConvert * $percentageAfriqueOuest, 2, ',', ' '). ' FCFA';
  } 
  // ================= Entre Afrique de centrale 5% ================= //
  else if (($senderCountry == 'cameroun' || $senderCountry == 'gabon' || $senderCountry == 'congo') && ($receiverCountry == 'cameroun' || $receiverCountry == 'gabon' || $receiverCountry == 'congo')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
    $percentage = number_format($amountConvert * $percentageEntreAfriqueCentrale, 2, ',', ' '). ' FCFA';
  }
  // ================ Afrique de l'ouest vers Afrique centrale 5% ================ //
  else if (($senderCountry == 'civ' || $senderCountry == 'mali' || $senderCountry == 'senegal' || $senderCountry == 'benin') && ($receiverCountry == 'cameroun' || $receiverCountry == 'gabon' || $receiverCountry == 'congo')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
    $percentage = number_format($amountConvert * $percentageEntreAfriqueCentrale, 2, ',', ' '). ' FCFA';
  }
  // ================= Afrique centrale vers Afrique Ouest 8% ================= //
  else if (($senderCountry == 'cameroun' || $senderCountry == 'congo' || $senderCountry == 'gabon') && ($receiverCountry == 'civ' || $receiverCountry == 'mali' || $receiverCountry == 'benin' || $receiverCountry == 'senegal')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
    $percentage = number_format($amountConvert * $percentageAfriqueCentrale, 2, ',', ' '). ' FCFA';
  }
  // Entre Russie
  else if ($senderCountry == 'russie' && $receiverCountry == 'russie') {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' RUB';
    $change = 'RUB';
    $percentage = number_format($amountConvert * $percentageAfriqueOuest, 2, ',', ' '). ' RUB';
  }
  // Russie vers afrique de l'ouest
  else {
    $finalAmount = number_format($amountConvert * $russiaCIV, 2, ',', ' '). ' FCFA';
    $change = 'RUB';
    $percentage = number_format($amountConvert * $percentageAfriqueOuest, 2, ',', ' '). ' RUB';
  }


  // ========== Only Guinee ========== //
  if ($senderCountry === 'guinee' && $receiverCountry === 'russie') {
  $finalAmount = number_format($amountConvert * $guinRus, 2, ',', ' '). ' RUB';
  $change = 'FCFA';
  } 
  else if ($senderCountry === 'russie' && $receiverCountry === 'guinee') {
    $finalAmount = number_format($amountConvert * $rusGuin, 2, ',', ' '). ' FCFA';
    $change = 'RUB';
  }
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/checkHead.php' ?>
<body>
  <div class="container">
    <!-- Back -->
    <a href="./send.php" class="navbar-brand text-white mt-4">
      <i class="fa-solid fa-angle-left"></i>
      Retour
    </a>

    <?php if (isset($_SESSION['error'])) {
      ?>
        <div class="toast align-items-center text-white bg-danger border-0 mt-4" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1000;">
          <div class="d-flex">
            <div class="toast-body">
              <?php echo $_SESSION['error']; ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
      <?php
        unset($_SESSION['error']);
      } 
    ?>

    <div>
      <div class="card mb-4">
        <div class="card-body text-center">
          <div class="container">
            <div class="card-title">
              <span class="material-icons" style="color: #2ed573; font-size: 4rem;">
                playlist_add_check_circle
              </span>
              <h5 class="fw-bold">Verification !</h5>
              <hr>
            </div>
            <h6 class="fw-bold text-start mb-4">
              Expéditeur
            </h6>
            <div class="sender mb-4">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">public</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($senderCountry)) {
                      echo $senderCountry;
                    }
                  ?>
                </span>
              </div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">send</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($senderMode)) {
                      echo $senderMode;
                    }
                  ?>
                </span>
              </div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">smartphone</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php
                    if (isset($senderPhone)) {
                      echo $senderPhone;
                    }
                  ?>
                </span>
              </div>
            </div>
            <h6 class="fw-bold text-start mb-4">
              Récepteur
            </h6>
            <div class="receiver mb-4">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">public</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($receiverCountry)) {
                      echo $receiverCountry;
                    }
                  ?>
                </span>
              </div>
              <!-- <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">send</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($receiverMode)) {
                      echo $receiverMode;
                    }
                  ?>
                </span>
              </div> -->
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">smartphone</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($receiverPhone)) {
                      echo $receiverPhone;
                    }
                  ?>
                </span>
              </div>
            </div>
            <h6 class="fw-bold text-start mb-3">
              Montant à expédier
            </h6>
            <div class="amount mb-4">
              <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">paid</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($amount)) {
                      echo number_format($amount, 2, ',', ' '). ' '. $change;
                    }
                  ?>
                </span>
              </div>
            </div>

            <div class="float-right">
              <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Valider</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <form method="POST">
      <!-- data-bs-backdrop="static" -->
      <div class="modal fade" id="staticBackdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content text-center">
            <div class="mt-4">
              <span class="material-symbols-outlined fw-bold" style="color: #2ed573; font-size: 4rem;">task_alt</span>
            </div>
            <h4 class="fw-bold modal-title my-3">Votre bénéficiaire recvra: 
              <br> 
              <span id="total">
              <?php 
                echo $finalAmount;
              ?>
              </span>
            </h4>
            <span>Les frais Chapmoney s'élèvent à: <b><?= $percentage ?></b> </span>
            <div class="modal-footer justify-content-center">
              <button name="back" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
              <button name="send" class="btn btn-success">Valider</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script>
    // Stop default event
    $(".send").click(function(event) {
      event.preventDefault();
    });
  </script>
  
</body>
</html>