<?php require('./backend/actions/sendToEmail.php') ?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/sendHead.php' ?>

<body>
  <div class="container">
    <a href="./index.php" class="navbar-brand text-white mt-4">
      <i class="fa-solid fa-angle-left"></i>
      Retour
    </a>
    <!-- Nav Tabs -->
    <ul class="nav nav-pills my-5 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link btn-primary text-white active fs-6" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
          role="tab" aria-controls="pills-home" aria-selected="true">
          Expéditeur
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link btn-warning text-white fs-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
          role="tab" aria-controls="pills-profile" aria-selected="false">
          Recepteur
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link btn-success text-white fs-6" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
          role="tab" aria-controls="pills-contact" aria-selected="false">
          Montant
        </button>
      </li>
    </ul>
    <!-- Start Form -->
    <form method="POST">
      <div class="tab-content form w-50 mx-auto" id="pills-tabContent">
        <!-- Set error -->
        <?php 
          if(isset($errorMsg)) { 
            echo '<div class="alert alert-danger">'.$errorMsg.'</div>'; 
          }
        ?>
        <!-- Expéditeur -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="text-primary fw-bold text-start">Expéditeur</h5>
              <hr>
              <!-- Choose Country -->
              <div class="mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">public</span>
                  Pays
                </span>
                <select class="form-select" id="country__one" name="countryOne">
                  <option value="">--Selectionner votre Pays--</option>
                  <option data-mask="+7 (999) 999 99-99" value="russie">Russie</option>
                  <option data-mask="(+229) 99 99 99 99" value="benin">Bénin</option>
                  <option data-mask="(+237) 99 99 99 99" value="cameroun">Cameroun</option>
                  <option data-mask="(+225) 99 99 99 99 99" value="civ">Côte d'Ivoire</option>
                  <option data-mask="(+242) 99 999 99 99" value="congo">Congo Brazaville</option>
                  <option data-mask="(+241) 9 99 99 99 99" value="gabon">Gabon</option>
                  <option data-mask="(+224) 999 99 99 99" value="guinee">Guinée</option>
                  <option data-mask="(+223) 99 99 99 99" value="mali">Mali</option>
                  <option data-mask="(+221) 99 999 99 99" value="senegal">Sénégal</option>
                  <!-- <option data-mask="(+227) 99 99 99 99" value="niger">Niger</option> -->
                </select>
              </div>
              <!-- Mode d'envoi -->
              <div class="mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">send</span>
                  Mode d'envoi
                </span>
                <select class="form-select" name="sendMode" id="modeSend">
                  <option>Choisir obligatoirement un pays</option>
                </select>
              </div>
              <!-- Tel Number -->
              <div class="mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">smartphone</span>
                  Téléphone
                </span>
                <div class="row">
                  <div class="col">
                    <input type="text" name="numberPhoneOne" class="form-control numberTel" id="phoneNumber" >
                  </div>
                </div>
              </div>

              <span>Cliquer sur le bouton <b>Recepteur</b> pour continuer</span>
            </div>
          </div>
        </div>
        <!-- Recepteur -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="text-start text-warning fw-bold">Récepteur</h5>
              <hr>
              <!-- Choose Country -->
              <div class="mb-3">
                <span class="fw-bold">
                  <span class="fw-bold d-flex align-items-center">
                    <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">public</span>
                    Pays
                  </span>
                </span>
                <select class="form-select" id="country__two" name="countryTwo" >
                  <option>--Selectionner votre Pays--</option>
                  <option data-mask="+7 (999) 999 99-99" value="russie">Russie</option>
                  <option data-mask="(+229) 99 99 99 99" value="benin">Bénin</option>
                  <option data-mask="(+237) 99 99 99 99" value="cameroun">Cameroun</option>
                  <option data-mask="(+225) 99 99 99 99 99" value="civ">Côte d'Ivoire</option>
                  <option data-mask="(+242) 99 999 99 99" value="congo">Congo Brazaville</option>
                  <option data-mask="(+241) 9 99 99 99 99" value="gabon">Gabon</option>
                  <option data-mask="(+224) 999 99 99 99" value="guinee">Guinée</option>
                  <option data-mask="(+223) 99 99 99 99" value="mali">Mali</option>
                  <option data-mask="(+221) 99 999 99 99" value="senegal">Sénégal</option>
                  <!-- <option data-mask="(+227) 99 99 99 99" value="niger">Niger</option> -->
                </select>
              </div>
              <!-- Mode de reception -->
              <!-- <div class="mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">send</span>
                  Mode d'envoi
                </span>
                <select class="form-select" name="receiveMode" id="modeReceive">
                  <option>Choisir obligatoirement un pays</option>
                </select>
              </div> -->
              <!-- Tel Number -->
              <div class="mb-3">
                <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">smartphone</span>
                  Téléphone
                </span>
                <div class="row">
                  <div class="col">
                    <input type="text" name="numberPhoneTwo" class="form-control numberTel__two" id="phoneNumber__two">
                  </div>
                </div>
              </div>

              <span class="text-center">Cliquer sur le bouton <b>Montant</b> pour continuer</span>
            </div>
          </div>
        </div>
        <!-- Amount -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="card">
            <div class="card-body">
              <h5 class="text-success fw-bold">Indiquer le montant à transférer</h5>
              <hr>
              <div class="mb-3">
              <span class="fw-bold d-flex align-items-center">
                  <span class="material-icons" style="font-size: 1.2rem; margin-right: .3rem;">paid</span>
                  Montant
                </span>
                <input type="number" name="amount" class="form-control numberTel" placeholder="5000" id="amount" >
              </div>
              
              <div class="mt-4">
                <button name="send" class="btn btn-success float-right">Transférer</button>
                <button name="back" class="btn btn-secondary float-left">Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- ================== JavaScript ================== -->
  <script>
    
    const modeTransfert = {
      russie: ['SberBank', 'Tinkoff', 'VTB', 'Autre'],
      civ: ['Orange Money', 'Moov Money', 'Wave Money', 'MTN Mobile Money'],
      senegal: ['Orange Money', 'Wave Money'],
      guinee: ['Orange Money', 'MTN  areeba'],
      mali: ['Orange Money'],
      congo: ['AIRTEL Mobile Money', 'MTN Mobile Money'],
      benin: ['Moov Money', 'MTN Mobile Money'],
      cameroun: ['Orange Money'],
      gabon: ['MTN Mobile Money', 'AIRTEL Mobile Money'],
      // niger: ['Moov Flooz'],
    }

  // DOM
  const countryOne = document.getElementById('country__one')
  const countryTwo = document.getElementById('country__two')
  const mode = document.getElementById('modeSend')
  const modeReceive = document.getElementById('modeReceive')
  // Amount
  const amount = document.getElementById('amount')
  // Phone Number
  const phoneOne = document.getElementById('phoneNumber')
  const phoneTwo = document.getElementById('phoneNumber__two')

  // Event Listener
  countryOne.addEventListener('change', chooseMode)
  countryTwo.addEventListener('change', chooseModeReceive)

    function chooseMode() {
      // Select Value
      let selectOption = modeTransfert[this.value]

      // Remove old selection
      while (mode.options.length > 0) {
        mode.options.remove(0)
      }

      // From transfert mode table
      Array.from(selectOption).forEach(function (el) {
        let option = new Option(el, el)
        // Append child
        mode.appendChild(option)

        // Phone Number Mask
        $(".numberTel").inputmask($('#country__one').find(':selected').data('mask'));
      })
    }

    function chooseModeReceive() {
      // Select Value
      // let selectOption = modeTransfert[this.value]

      // // Remove old selection
      // while (modeReceive.options.length > 0) {
      //   modeReceive.options.remove(0)
      // }

      // // From transfert mode table
      // Array.from(selectOption).forEach(function (el) {
      //   let option = new Option(el, el)
      //   // Append child
      //   modeReceive.appendChild(option)
      // })
      
      // Phone Number Mask
      $(".numberTel__two").inputmask($('#country__two').find(':selected').data('mask'));
    }

    // countryOne.options[countryOne.selectedIndex].value == ''
  </script>

</body>
</html>