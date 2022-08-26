<?php
  require('./backend/actions/sendToEmail.php');
  require('./backend/actions/checkAction.php');

  // Afrique de l'ouest
  $civRussia = 0.0917;
  $russiaCIV = 10.90;

  // Afrique centrale
  // $rateAC = 0.090;
  // $rateRubAc = 10.95;

  // Only guinee
  $guinRus = 0.00689;
  $rusGuin = 145.15;

  $rate = 1;

  // Convert amount
  $amountConvert = intval($amount);


  if (($senderCountry === 'civ' || $senderCountry === 'mali' || $senderCountry === 'senegal' || $senderCountry === 'cameroun' || $senderCountry === 'gabon' || $senderCountry === 'benin' || $senderCountry === 'congo') && $receiverCountry === 'russie') {
    $finalAmount = number_format($amountConvert * $civRussia, 2, ',', ' '). ' RUB';
    $change = 'FCFA';
  } 
  // CIV
  else if ($senderCountry == 'civ' && ($receiverCountry == 'civ' || $receiverCountry == 'cameroun' || $receiverCountry == 'mali' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  } 
  // Mali
  else if ($senderCountry == 'mali' && ($receiverCountry == 'mali' || $receiverCountry == 'cameroun' || $receiverCountry == 'civ' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  } 
  // Cameroun
  else if ($senderCountry == 'cameroun' && ($receiverCountry == 'cameroun' ||$receiverCountry == 'mali' || $receiverCountry == 'civ' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  } 
  // Benin
  else if ($senderCountry == 'benin' && ($receiverCountry == 'cameroun' ||$receiverCountry == 'mali' || $receiverCountry == 'civ' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  } 
  // Congo
  else if ($senderCountry == 'congo' && ($receiverCountry == 'cameroun' ||$receiverCountry == 'mali' || $receiverCountry == 'civ' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  } 
  // Gabon
  else if ($senderCountry == 'gabon' && ($receiverCountry == 'cameroun' ||$receiverCountry == 'mali' || $receiverCountry == 'civ' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  }
  // Senegal
  else if ($senderCountry == 'senegal' && ($receiverCountry == 'cameroun' ||$receiverCountry == 'mali' || $receiverCountry == 'civ' || $receiverCountry == 'senegal' || $receiverCountry == 'congo' || $receiverCountry == 'benin' || $receiverCountry == 'gabon')) {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' FCFA';
    $change = 'FCFA';
  }
  // Russia
  else if ($senderCountry == 'russie' && $receiverCountry == 'russie') {
    $finalAmount = number_format($amountConvert * $rate, 2, ',', ' '). ' RUB';
    $change = 'RUB';
  }
  else {
    $finalAmount = number_format($amountConvert * $russiaCIV, 2, ',', ' '). ' FCFA';
    $change = 'RUB';
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
            <h4 class="fw-bold modal-title my-3">Votre bénéficiaire recvra: <br> 
              <span id="total">
              <?php 
                echo $finalAmount;
              ?>
              </span>
            </h4>
            <!-- <div class="d-flex align-items-center justify-content-center mb-3">
              <div class="form-check form-check-inline d-flex align-items-center">
                <input  class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Payer les frais</label>
              </div>
              <div class="form-check form-check-inline d-flex align-items-center">
                <input  class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Ne pas payer les frais</label>
              </div>
            </div> -->
            <span>Les frais Chapmoney s'élèvent à: </span>
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

    // window.onload = (event) => {
    //   let myToast = document.querySelector('.toast')
    //   let alertToast = new bootstrap.Toast(myToast)
    //   alertToast.show()
    // }
  </script>
  
</body>
</html>