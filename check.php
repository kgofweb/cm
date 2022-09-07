<?php
  require('./backend/actions/sendToEmail.php');
  require('./backend/actions/checkAction.php');

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
  $percentage;
  $finalAmount;

  // ============= Afrique de l'ouest vers russie ============= //
  if (($senderCountry === 'civ' || $senderCountry === 'mali' || $senderCountry === 'senegal' ||   $senderCountry === 'benin') && $receiverCountry === 'russie') {
    $finalAmount = number_format($amountConvert * $civRussia, 2, ',', ' '). ' RUB';
    $change = 'FCFA';

    $percentage = $amountConvert * $percentageAfriqueOuest;
  } 
  // ============= Afrique centrale vers russie ============= //
  else if (($senderCountry === 'gabon' || $senderCountry === 'cameroun' || $senderCountry === 'congo') && $receiverCountry == 'russie') {
    $finalAmount = number_format($amountConvert * $rateAC, 2, ',', ' '). ' RUB';
    $change = 'FCFA';

    $percentage = $amountConvert * $percentageAfriqueCentrale;
  } 
  // Russie vers Afrique centrale
  else if ($senderCountry === 'russie' && ($receiverCountry === 'gabon' || $receiverCountry === 'cameroun' || $receiverCountry === 'congo')) {
    $finalAmount = number_format($amountConvert * $rateRubAc, 2, ',', ' '). ' FCFA';
    $change = 'RUB';

    $percentage = $amountConvert * $percentageAfriqueCentrale;
  }
  
  // ================= Entre Afrique de l'ouest 2% ================= //
  else if (($senderCountry == 'civ' || $senderCountry == 'benin' || $senderCountry == 'senegal' || $senderCountry == 'mali') && ($receiverCountry == 'civ' || $receiverCountry == 'mali' || $receiverCountry == 'senegal' || $receiverCountry == 'benin')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';

    $percentage = $amountConvert * $percentageAfriqueOuest;
  } 
  // ================= Entre Afrique de centrale 5% ================= //
  else if (($senderCountry == 'cameroun' || $senderCountry == 'gabon' || $senderCountry == 'congo') && ($receiverCountry == 'cameroun' || $receiverCountry == 'gabon' || $receiverCountry == 'congo')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';

    $percentage = $amountConvert * $percentageEntreAfriqueCentrale;
  }
  // ================ Afrique de l'ouest vers Afrique centrale 5% ============= //
  else if (($senderCountry == 'civ' || $senderCountry == 'mali' || $senderCountry == 'senegal' || $senderCountry == 'benin') && ($receiverCountry == 'cameroun' || $receiverCountry == 'gabon' || $receiverCountry == 'congo')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';

    $percentage = $amountConvert * $percentageEntreAfriqueCentrale;
  }
  // ================= Afrique centrale vers Afrique Ouest 8% ================= //
  else if (($senderCountry == 'cameroun' || $senderCountry == 'congo' || $senderCountry == 'gabon') && ($receiverCountry == 'civ' || $receiverCountry == 'mali' || $receiverCountry == 'benin' || $receiverCountry == 'senegal')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';

    $percentage = $amountConvert * $percentageAfriqueCentrale;
  }
  // Entre Russie
  else if ($senderCountry == 'russie' && $receiverCountry == 'russie') {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' RUB';
    $change = 'RUB';

    $percentage = $amountConvert * $percentageAfriqueOuest;
  }
  // Russie vers afrique de l'ouest
  else {
    $finalAmount = number_format($amountConvert * $russiaCIV, 2, ',', ' '). ' FCFA';
    $change = 'RUB';
    $percentage = ($amountConvert * $percentageAfriqueOuest);
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

  // Save amount 
  $_SESSION['percentage'] = $percentage;
  $_SESSION['finalAmount'] = $finalAmount;
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/checkHead.php' ?>
<body>
  <div class="container">
    <!-- Back -->
    <a href="./send.php" class="navbar-brand text-white mt-3">
      <i class="fa-solid fa-angle-left"></i>
      Retour
    </a>

    <div>
      <div class="card mb-4 bg-white">
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
                  <span class="material-icons" style="font-size: 1.5rem;">call</span>
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
            <div>
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
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <span class="fw-bold d-flex align-items-center">
                    <span class="material-icons" style="font-size: 1.5rem;">call</span>
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
            </div>
            <h6 class="fw-bold text-start mb-3">
              Montant à expédier <br>
              <span style="font-size: .8rem" class="text-primary fw-bold">(Ce montant est la somme que vous voulez faire parvenir à votre bénéficiaire.)</span>
            </h6>
            <div class="amount mb-4">
              <div class="d-flex align-items-center justify-content-between;">
                <span class="fw-bold d-flex align-items-center;">
                  <span class="material-icons" style="font-size: 1.5rem;">paid</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <b>
                    <?php 
                      if (isset($amount)) {
                        echo number_format($amount, 2, ',', ' '). ' '. $change;
                      }
                    ?>
                  </b>
                </span>
              </div>
            </div>

            <div class="float-right">
              <button class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Continuer</button>
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
            <span>Les frais de transaction s'élèvent à: <b><?= $percentage. ' '. $change ?></b> </span>
            <span class="fs-6 text-primary">(Assurez vous d'avoir bien vérifié les infos entrées car il n'y aura plus de retour en arrière).</span>
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