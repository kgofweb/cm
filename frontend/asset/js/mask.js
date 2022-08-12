const modeTransfert = {
  russie: ['SberBank', 'Tinkoff', 'VTB', 'Autre'],
  civ: ['Orange Money', 'Moov Money', 'Wave Money', 'MTN Mobile Money'],
  benin: ['Moov Money', 'MTN Mobile Money'],
  senegal: ['Orange Money', 'Wave Money'],
  gabon: ['MTN Mobile Money', 'AIRTEL Mobile Money'],
  guinee: ['Orange Money', 'MTN  areeba'],
  mali: ['Orange Money'],
  niger: ['Moov Flooz'],
  congo: ['AIRTEL Mobile Money', 'MTN Mobile Money']
}

// DOM
const countryOne = document.getElementById('country__one')
const countryTwo = document.getElementById('country__two')
const mode = document.getElementById('modeSend')
const modeReceive = document.getElementById('modeReceive')
// Phone number
const element = document.getElementById('phoneNumber')
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