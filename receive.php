<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/receiveHead.php' ?>

<body>
  <div class="container">
    <!-- Back button -->
    <div class="back mt-3">
      <a href="./index">
        <i class="fa-solid fa-angle-left"></i>
        Retour
      </a>
    </div>

    <div class="card card__receive mt-5 mb-3 w-75 mx-auto">
      <div class="row g-0">
        <div class="col-md-4 my-auto img">
          <img src="./frontend/asset/img/receive.webp" class="img-fluid rounded-start" alt="ChapMoney">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fa-solid fa-sack-dollar"></i>
              Effectuer un retrait
            </h4>
            <hr class="mb-3">
            <form action="" method="POST">
              <div class="mt-4">
                <label>Entrer le code de retrait</label>
                <input type="text" class="form-control rounded-3">
              </div>
  
              <button class="btn text-white d-block w-100 mt-4 mb-2 fw-bold" name="validate">Effectuer</button>
            </form>
            <div class="text-start mt-4">
              <p>Cliquez ici pour <span><a href="./send">effectuer un transfert</a></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>