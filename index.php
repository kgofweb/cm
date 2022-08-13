<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/headIndex.php' ?>

<body>
  <div class="container">
    <!-- =========== Header =========== -->
    <div class="logo mt-4 text-center">
      <a href="./index.php">
        <img src="./frontend/asset/img/logo.png" alt="ChapMoney">
      </a>
    </div>

    <!-- =========== Main =========== -->
    <div class="title text-center">
      <h3 class="mt-4"></h3>
      <p>Transférer de l’argent n’a jamais été aussi <span>facile</span>, <span>rapide</span> et <span>fiable</span></p>
    </div>

    <div class="text-warning justify-content-center mt-5">
      <div class="row justify-content-center">
        <div class="col-12 mb-4" style="max-width: 35rem;">
          <div class="card card__sending bg-primary">
            <div class="card-body">
              <h3 class="text-start text-white">
                <i class="uil uil-message"></i>
                <b>Envoi</b>
              </h3>
              <div>
                <img src="./frontend/asset/img/transaction.webp" alt="ChapMoney">
              </div>
              <a href="./send.php" class="btn btn-primary px-4 py-3 float-end">
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4" style="max-width: 35rem;">
          <div class="card card__receive mb-4">
            <div class="card-body">
              <h3 class="text-start text-white">
                <i class="uil uil-money-withdrawal"></i>
                <b>Retrait</b>
              </h3>
              <div>
                <img src="./frontend/asset/img/receive.webp" alt="ChapMoney">
              </div>
              <a href="./receive.php" class="btn btn-success px-4 py-3 float-end">
                <i class="fa-solid fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

      
      <!-- =========== Actions =========== -->
      <!-- <div class="btn__actions mt-4">
        <div class="justify-content-center mt-0">
          <div class="row row-cols-2 justify-content-center">
            <div class="col" style="max-width: 18rem;">

              <div class="card transaction text-white bg-danger mb-3">
                <div class="card-body">
                  <h6 class="text-start">
                    <i class="icon fas fa-exchange-alt"></i>
                    <b>Transaction</b>
                  </h6>
                  <div>
                    <img src="./asset/img/transaction.webp" alt="ChapMoney">
                  </div>
                  <a href="./transaction" class="btn btn-danger float-end">
                    <i class="fa-solid fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 18rem;">

              <div class="signin card text-white bg-primary mb-3">
                <div class="card-body text-start">
                  <h6 class="text-start">
                    <i class="icon fas fa-user"></i>
                    <b>S'inscrire</b>
                  </h6>
                  <div>
                    <img src="./asset/img/signin.webp" alt="ChapMoney">
                  </div>
                  <a href="./signup.html" class="btn btn-primary text-white float-end">
                    <i class="fa-solid fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 18rem;">

              <div class="tracker card text-white bg-danger mb-5">
                <div class="card-body text-start">
                  <h6 class="text-start">
                    <i class="icon fa-solid fa-location-crosshairs"></i>
                    <b>Tracker</b>
                  </h6>
                  <div>
                    <img src="./asset/img/tracker.webp" alt="ChapMoney">
                  </div>
                  <a href="./tracker.html" class="btn btn-warning text-white float-end">
                    <i class="fa-solid fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col" style="max-width: 18rem;">

              <div class="login card text-white bg-success mb-3 mh-100">
                <div class="card-body text-start">
                  <h6 class="text-start">
                    <i class="icon fas fa-sign-in-alt "></i>
                    <b>Connexion</b>
                  </h6>
                  <div>
                    <img src="./asset/img/login-home.webp" alt="ChapMoney">
                  </div>
                  <a href="./login.html" class="btn btn-success text-white float-end">
                    <i class="fa-solid fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

  </div>
</body>
</html>