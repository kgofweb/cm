<?php
  require('./backend/actions/sendToEmail.php');
  require('./backend/actions/checkAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/checkHead.php' ?>
<body>
  <!-- Nav bar -->
  <?php include './includes/nav.php' ?>

  <div class="container">
    <form method="POST">
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
              Montant
            </h6>
            <div class="amount mb-4">
              <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.5rem;">paid</span>
                </span>
                <span class="country w-100 text-start fs-6" style="margin-left: 2rem;">
                  <?php 
                    if (isset($amount)) {
                      echo $amount;
                    }
                  ?>
                </span>
              </div>
            </div>

            <div class="float-right">
              <button name="back" class="btn btn-secondary">Annuler</button>
              <button name="send" class="btn btn-success ms-2">Valider</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  
</body>
</html>