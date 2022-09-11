<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/receiveHead.php' ?>

<style>
  textarea:hover, 
  input:hover, 
  textarea:active, 
  input:active, 
  textarea:focus, 
  input:focus,
  button:focus,
  button:active,
  button:hover,
  label:focus,
  select:focus,
  .btn:active,
  .btn.active {
    outline:0px !important;
    -webkit-appearance:none !important;
    box-shadow: none !important;
  }
</style>

<body>
  <div class="container">
    <!-- Back button -->
    <div class="back mt-3">
      <a href="./index.php">
        <i class="fa-solid fa-angle-left"></i>
        Retour
      </a>
    </div>

    <form action="index.php" method="POST">
      <div class="card mt-4 mb-2" style="background-color: #f6e58d; border: none;">
        <div class="card-body mb-0">
          <div class="container">
            <div class="card-title">
              <span class="fw-bold">Votre code de retrait</span>
            </div>
            <div class="d-flex flex-row">
              <input type="text" maxlength="1" class="form-control text-center fw-bold fs-5 me-2"
                style=" padding: .6rem; border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;"" autofocus="">
              <input type="text" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2"
                style=" padding: .6rem; border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;"">
              <input type="text" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2"
                style=" padding: .6rem; border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;"">
              <input type="text" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2"
                style=" padding: .6rem; border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;"">
              <input type="text" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2"
                style=" padding: .6rem; border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;"">
            </div>
          </div>
        </div>
      </div>
      <!-- Sender Phone -->
      <div class="card" style="background-color: #74b9ff; border: none;">
        <div class="card-body">
          <div class="container">
            <div class="">
              <span class="fw-bold">Numéro envoyeur</span>
              <input type="text" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;">
            </div>
          </div>
        </div>
      </div>

      <div class="card" style="background-color: #00b894; border: none;">
        <div class="card-body">
          <div class="container">
            <div class="mb-4">
              <span class="fw-bold">Nom de la banque</span>
              <input type="text" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;">
            </div>
            <div>
              <span class="fw-bold">Numéro de carte ou téléphone</span>
              <input type="text" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 2px solid #fff;">
            </div>

            <button class="btn btn-success w-100 fw-bold mt-4">Valider</button>
          </div>
        </div>
      </div>
    </form>

  </div>
</body>

</html>