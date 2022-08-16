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
                      echo $amount. ' XOF';
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
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content text-center">
            <div class="mt-4">
              <span class="material-symbols-outlined fw-bold" style="color: #2ed573; font-size: 4rem;">running_with_errors</span>
            </div>
            <h4 class="fw-bold modal-title my-3">Votre bénéficiaire recvra: <br> 
              <span id="total">
                <?php 
                  if (isset($amount)) {
                    echo number_format($amount, 2, ',', ' '). ' XOF';
                  }
                ?>
              </span>
            </h4>
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
    $(".send").click(function(event) {
      event.preventDefault();
    });
  </script>
  
</body>
</html>