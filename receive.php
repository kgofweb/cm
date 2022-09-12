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

    <form method="POST">
      <div class="card mt-4 mb-0">
        <div class="card-body mb-0">
          <div class="container">
            <div class="card-title">
              <div class="d-flex align-items-center">
              <span class="material-icons" style="color: #f9ca24;">qr_code_scanner</span>
                <span class="fw-bold mx-2" style="font-size: .894rem;">Votre code de retrait</span>
              </div>
            </div>
            <div class="d-flex flex-row">
              <input type="text" id="txt1" maxlength="1" class="form-control text-center fw-bold fs-5 me-2 otpInput"
                style="padding: .6rem; background-color: #dfe6e9;" onkeyup="move(event, '', 'txt1', 'txt2')">
              <input type="text" id="txt2" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2 otpInput"
                style=" padding: .6rem; background-color: #dfe6e9;" onkeyup="move(event, 'txt1', 'txt2', 'txt3')">
              <input type="text" id="txt3" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2 otpInput"
                style=" padding: .6rem; background-color: #dfe6e9;"
                onkeyup="move(event, 'txt2', 'txt3', 'txt4')">
              <input type="text" id="txt4" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2 otpInput"
                style=" padding: .6rem; background-color: #dfe6e9;"
                onkeyup="move(event, 'txt3', 'txt4', 'txt5')">
              <input type="text" id="txt5" maxlength="1" class="form-control text-center fw-bold fs-5 mx-2 otpInput"
                style=" padding: .6rem; background-color: #dfe6e9;" onkeyup="move(event, 'txt4', 'txt5', '')">
            </div>
          </div>
        </div>
      </div>
      <!-- Sender Phone -->
      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="d-flex align-items-center">
              <span class="material-icons" style="color: #6ab04c;">call</span>
              <span class="fw-bold mx-2" style="font-size: .894rem;">Numéro envoyeur</span>
            </div>
              
            <input type="text" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 1px solid #636e72;">
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="mb-4">
              <div class="d-flex align-items-center">
                <span class="material-icons" style="color: #4834d4;">account_circle</span>
                <span class="fw-bold mx-2" style="font-size: .894rem;">
                  votre nom
                </span>
              </div>
              <input type="text" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 1px solid #636e72;">
            </div>
            <div class="mb-4">
              <div class="d-flex align-items-center">
                <span class="material-icons" style="color: #22a6b3;">account_balance</span>
                <span class="fw-bold mx-2" style="font-size: .894rem;">
                  Nom de la banque
                </span>
              </div>
              <input type="text" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 1px solid #636e72;">
            </div>
            <div>
              <div class="d-flex align-items-center">
                <span class="material-icons" style="color: #f0932b;">credit_card</span>
                <span class="fw-bold mx-2" style="font-size: .894rem;">Votre numéro de carte ou téléphone</span>
              </div>
              <input type="number" class="form-control fw-bold fs-6" style="border: none; border-radius: 0; background: none; border-bottom: 1px solid #636e72;">
            </div>

            <button class="btn btn-success w-100 fw-bold mt-4 d-flex align-items-center justify-content-center">
              Valider
              <span class="material-icons mx-2">done</span>
            </button>
          </div>
        </div>
      </div>
    </form>

  </div>

  <!-- My Javascript -->
  <script>
    function move(e, p, c, n) {
      const length = document.getElementById(c).value.length;
      const maxlength = document.getElementById(c).getAttribute('maxlength');

      // Next input
      if (length == maxlength) {
        if (n !== '') {
          document.getElementById(n).focus();
        }
      }
      // Remove
      if (e.key === 'Backspace') {
        if (p !== '') {
          document.getElementById(p).focus();
        }
      }
    }
  </script>
</body>

</html>