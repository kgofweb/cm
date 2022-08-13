<?php require('./backend/actions/sendToEmail.php') ?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include './includes/sendHead.php' ?>

<body>
  <div class="container">
    <!-- Back button -->
    <div class="back my-4">
      <a href="./index">
        <i class="fa-solid fa-angle-left"></i>
        Retour
      </a>
    </div>

    <!-- Nav Tabs -->
    <ul class="nav nav-pills my-4 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link btn-primary text-white active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
          role="tab" aria-controls="pills-home" aria-selected="true">
          Expéditeur
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link btn-warning text-white" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
          role="tab" aria-controls="pills-profile" aria-selected="false">
          Recepteur
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link btn-success text-white" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
          role="tab" aria-controls="pills-contact" aria-selected="false">
          Montant
        </button>
      </li>
    </ul>
    <!-- Start Form -->
    <form method="post">
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
            <div class="card-body">
              <h5 class="text-primary fw-bold">Expéditeur</h5>
              <hr>
              <!-- Choose Country -->
              <div class="mb-3">
                <span class="fw-bold">Pays</span>
                <select class="form-select" id="country__one" name="countryOne">
                  <option value="">--Selectionner votre Pays--</option>
                  <option data-mask="+7 (999) 999 99-99" value="russie">Russie</option>
                  <option data-mask="(+229) 99 99 99 99" value="benin">Bénin</option>
                  <option data-mask="(+242) 99 999 99 99" value="congo">Congo Brazaville</option>
                  <option data-mask="(+225) 99 99 99 99 99" value="civ">Côte d'Ivoire</option>
                  <option data-mask="(+241) 9 99 99 99 99" value="gabon">Gabon</option>
                  <option data-mask="(+224) 999 99 99 99" value="guinee">Guinée</option>
                  <option data-mask="(+223) 99 99 99 99" value="mali">Mali</option>
                  <option data-mask="(+227) 99 99 99 99" value="niger">Niger</option>
                  <option data-mask="(+221) 99 999 99 99" value="senegal">Sénégal</option>
                </select>
              </div>
              <!-- Mode d'envoi -->
              <div class="mb-3">
                <span class=" fw-bold">Mode d'envoi</span>
                <select class="form-select" name="sendMode" id="modeSend">
                  <option>Choisir obligatoirement un pays</option>
                </select>
              </div>
              <!-- Tel Number -->
              <div class="mb-3">
                <i class="uil uil-mobile-android-alt"></i>
                <span class=" fw-bold">N° téléphone</span>
                <div class="row">
                  <div class="col">
                    <input type="text" name="numberPhoneOne" class="form-control numberTel" id="phoneNumber" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Recepteur -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="card">
            <div class="card-body">
              <h5 class="text-warning fw-bold">Récepteur</h5>
              <hr>
              <!-- Choose Country -->
              <div class="mb-3">
                <span class=" fw-bold">Pays</span>
                <select class="form-select" id="country__two" name="countryTwo" >
                  <option>--Selectionner votre Pays--</option>
                  <option data-mask="+7 (999) 999 99-99" value="russie">Russie</option>
                  <option data-mask="(+229) 99 99 99 99" value="benin">Bénin</option>
                  <option data-mask="(+242) 99 999 99 99" value="congo">Congo Brazaville</option>
                  <option data-mask="(+225) 99 99 99 99 99" value="civ">Côte d'Ivoire</option>
                  <option data-mask="(+241) 9 99 99 99 99" value="gabon">Gabon</option>
                  <option data-mask="(+224) 999 99 99 99" value="guinee">Guinée</option>
                  <option data-mask="(+223) 99 99 99 99" value="mali">Mali</option>
                  <option data-mask="(+227) 99 99 99 99" value="niger">Niger</option>
                  <option data-mask="(+221) 99 999 99 99" value="senegal">Sénégal</option>
                </select>
              </div>
              <!-- Tel Number -->
              <div class="mb-3">
                <span class=" fw-bold">N° téléphone</span>
                <div class="row">
                  <div class="col">
                    <input type="text" name="numberPhoneTwo" class="form-control numberTel__two" id="phoneNumber__two">
                  </div>
                </div>
              </div>
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
                <span class=" fw-bold">Somme</span>
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

</body>
</html>