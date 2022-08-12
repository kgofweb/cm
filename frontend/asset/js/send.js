$(document).ready(function () {
  $(".numberTel").inputmask("(+999) 99 99 99 99 99");
});


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
// const countryTwo = document.getElementById('country__two')
const mode = document.getElementById('modeSend')
const modeReceive = document.getElementById('modeReceive')
const send = document.getElementById('send')
// Phone number
const element = document.getElementById('phoneNumber')

// Event Listener
countryOne.addEventListener('change', chooseMode)
// countryTwo.addEventListener('change', chooseModeReceive)

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
  })

  // Work with phone number
  if (countryOne.value == 'russie') {
    const maskOptions = {
      mask: '+9 (999) 999 99-99',
      lazy: false
    }
    const mask = IMask(element, maskOptions);

  } else if (countryOne.value == 'civ') {
    const maskOptions = {
      mask: '+999 99 99 99 99 99',
      lazy: false,
      
    }
    const mask = IMask(element, maskOptions);
    mask.updateValue()
  }
}

// function chooseModeReceive() {
//   // Select Value
//   let selectOption = modeTransfert[this.value]

//   // Remove old selection
//   while (modeReceive.options.length > 0) {
//     modeReceive.options.remove(0)
//   }

//   // From transfert mode table
//   Array.from(selectOption).forEach(function (el) {
//     let option = new Option(el, el)
//     // Append child
//     modeReceive.appendChild(option)
//   })
// }

send.addEventListener('click', sendFunction)

function sendFunction() {
  // console.log(countryOne.options[countryOne.selectedIndex]);

  if (countryOne.options[countryOne.selectedIndex].value == '') {
    alert('Erreur')
  } else {
    console.log('Continuer !');
  }
}