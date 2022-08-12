<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include '../includes/transactionHead.php' ?>

<body>
  <div class="container">
    <!-- Back button -->
    <div class="back mt-4 mb-5">
      <a href="./index.php">
        <i class="fa-solid fa-angle-left"></i>
        Retour
      </a>
    </div>

    <div class="text-warning justify-content-center">
      <div class="row justify-content-center">
        <div class="col-12" style="max-width: 50rem;">
          <div class="card card__sending bg-danger">
            <div class="card-body">
              <h4 class="text-start text-white">
                <i class="uil uil-message"></i>
                <b>Envoi</b>
              </h4>
              <div>
                <img src="./asset/img/transaction.webp" alt="ChapMoney">
              </div>
              <a href="./send" class="btn btn-primary px-4 py-3 float-end">
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 mt-4" style="max-width: 50rem;">
          <div class="card card__receive">
            <div class="card-body">
              <h4 class="text-start text-white">
                <i class="uil uil-money-withdrawal"></i>
                <b>Retrait</b>
              </h4>
              <div>
                <img src="./asset/img/receive.webp" alt="ChapMoney">
              </div>
              <a href="./receive" class="btn btn-success px-4 py-3 float-end">
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>