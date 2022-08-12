<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include '../includes/headIndex.php' ?>

<body>
  <div class="container d-flex align-items-center justify-content-center flex-column">
    <!-- =========== Header =========== -->
    <div class="logo mt-4">
      <a href="./index.php"><img src="./asset/img/logo.png" alt="ChapMoney"></a>
    </div>

    <!-- =========== Main =========== -->

    <div class="title text-center">
      <h3 class="mt-3"></h3>
      <p>Transférer de l’argent n’a jamais été aussi <span>facile</span>, <span>rapide</span> et <span>fiable</span></p>
    </div>

    <main>
      <div class="row my-5">
        <div class="col">
          <div class="card card__sending mb-4" style="width: 30rem;">
            <div class="card-body">
              <h4 class="text-start">
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
        <div class="col">
          <div class="card card__receive" style="width: 30rem;">
            <div class="card-body">
              <h4 class="text-start">
                <i class="uil uil-message"></i>
                <b>Envoi</b>
              </h4>
              <div>
                <img src="./asset/img/transaction.webp" alt="ChapMoney">
              </div>
              <a href="./receive" class="btn btn-primary px-4 py-3 float-end">
                <i class="fa-solid fa-angle-right"></i>
              </a>
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

    </main>
  </div>
</body>
</html>