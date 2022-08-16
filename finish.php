<?php require('./backend/actions/finishAction.php'); ?>

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
            <!-- Start Countdown -->
            <div class="countdown" id="countdown">
              <div class="min border border-primary p-2">
                <span>Minutes</span>
                <h2 id="minutes"></h2>
              </div>
              <div class="sec border border-primary p-2">
                <span>Secondes</span>
                <h2 id="secondes"></h2>
              </div>
            </div>
            <!-- Finish Countdown -->
            <div class="d-flex align-items-center justify-content-center mt-4">
              <h4>Finalisation </h4>
              <div style="margin-left: .5rem; color: #2ed573;">
                <span class="material-symbols-outlined fw-bold fs-2">
                  task_alt
                </span>
              </div>
            </div>
            <hr>
            <div class="message">
              <p>
                Pour terminer votre transaction, effectuer un transfert 
                <span class="fw-bold">
                  <?php if (isset($senderMode)) {
                    echo $senderMode;
                  } ?>
                </span> 
                d'une valeur de 
                <span class="fw-bold">
                  <?php if (isset($amount)) {
                    echo number_format($amount, 2, ',', ' '). ' XOF';
                    }
                  ?>
                </span> 
                depuis votre numéro de téléphone <br> 
                <span class="fw-bold">
                  <?php if (isset($senderPhone)) {
                    echo $senderPhone;
                    }
                  ?>
                </span> 
                vers le numéro suivant: <br> 
                <span class="fw-bold" id="numberOne">
                  +7 000 999 85 52
                </span>
                <!-- <span class="fw-bold">(***)</span>,  -->
                <!-- <span class="fw-bold">(***)</span>. -->
                <br>
                <br>
                <span class="text-primary fw-bold" >Vous devez effectuer le dépôt dans un delai de 15min.</span>
                <br>
                <br>
                <span class="text-danger fw-bold">Passer ce delai, la transaction sera automatiquement annulée.</span>
              </p>
              <div>
                <button class="btn btn-primary btn-sm mb-3" id="copyOne" style="border: none;">
                  Copier le numéro
                </button>
                <button class="btn btn-success btn-sm mb-3 mx-2" style="background-color: #2ed573; border: none;">
                  Dépôt effectuer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>