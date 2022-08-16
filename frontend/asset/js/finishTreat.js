// ============ Countdown ============ //
const minute = document.getElementById('minutes')
const seconde = document.getElementById('secondes')

// Init mins and seconds
const startMinutes = 5
let time = startMinutes * 60

const updateCountdown = setInterval(() => {
  time--
  
  const min = Math.floor(time / 60)
  const sec = time % 60
  // Insertion
  minute.innerHTML = `${min < 10 ? '0' : ''}${min}`
  seconde.innerHTML = `${sec < 10 ? "0" : ""}${sec}`

  // Auto cancel
  if (time == 0 || time < 1) {
    // alert('Le temps est écoulé, votre transaction a été annulée');
    showModalCancel('Le temps est écoulé, votre transaction a été annulée');
    // Remove All
    clearInterval(updateCountdown);
  }
}, 1000);

// Dismiss modal ans go back
const dismissModal = document.getElementById('dismissModal')
dismissModal.addEventListener('click', (e) => {
  if (e.target.classList.contains('delete')) {
    // Redirect to 
    window.location = './index.php';
  }
})

let modalWrap = null;
const showModalCancel = (message) => {
  if (modalWrap !== null) {
    modalWrap.remove();
  }

  modalWrap = document.createElement('div');
  modalWrap.innerHTML = `
    <div class="modal fade" data-bs-backdrop="static" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" bg-light'>
            <h4 class="modal-title">
              <span style='color: #222'>Désolé...</span>
            </h4>
          </div>
          <div class="modal-body">
            <span style='font-size: 1rem;'>${message}</span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger delete">OK</button>
          </div>
        </div>
      </div>
    </div>
  `;

  dismissModal.appendChild(modalWrap);
  const modal = new bootstrap.Modal(modalWrap.querySelector('.modal'));
  modal.show();
}

// =========== Copy to clipboard ================ //
const numbOne = document.getElementById('numberOne')
const copyOne = document.getElementById('copyOne')

copyOne.addEventListener('click', () => {
  const cb = navigator.clipboard
  cb.writeText(numbOne.textContent)
    .then(() => {
      showToast(`Numero (${numbOne.textContent}) copié !`)
    })
})

// Show Toast after copy number
let modalToast = null;
const showToast = (message) => {
  if (modalToast !== null) {
    modalToast.remove();
  }

  modalToast = document.createElement('div');
  modalToast.innerHTML = `
    <div class="toast position-fixed top-0 p-2 mx-2 mt-3 align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          ${message}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  `;

  document.body.append(modalToast);
  const modal = new bootstrap.Toast(modalToast.querySelector('.toast'));
  modal.show();
}

// Go back to home and remove all
// const back = document.getElementById('back')
// back.addEventListener('click', () => {
//   window.location = './index.php';
// })