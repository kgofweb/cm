// DOM Elements
const modalBox = document.querySelector('.modal')
const codeCountry = document.getElementById('code__country')
const labelChecked = document.querySelectorAll('.modal-body input')
const textAnim = document.querySelector('h3')

// Event Listener
labelChecked.forEach(el => {
  if (el.checked) {
    codeCountry.innerHTML = `(${el.value})`
  }

  el.addEventListener('click', () => {
    if (el.checked) { 
      codeCountry.innerHTML = `(${el.value})`
    }
  })
})

// ============== Scroll Reveal ============== //
const sr = ScrollReveal({
  distance: '60px',
  duration: 1500
})

sr.reveal(`.logo`, { origin: 'top', delay: 300 })
sr.reveal(`.title`, { origin: 'bottom', delay: 500 })
sr.reveal(`.transaction`, { origin: 'top', delay: 600 })
sr.reveal(`.receive`, { origin: 'top', delay: 650 })
sr.reveal(`.tracker`, { origin: 'bottom', delay: 700 })
sr.reveal(`.signin`, { origin: 'top', delay: 800 })
sr.reveal(`.login`, { origin: 'bottom', delay: 900 })


// ============== Text Writer ============== //
new Typewriter(textAnim, {
  // Speed delete
  deleteSpeed: 20
})
.typeString('Bienvenue sur Chap<span style="color: #ff4444;">Money</span>')
.pauseFor(1000)
.deleteChars(23)
.pauseFor(800)
.typeString('Entrez dans l\'univers des transactions sécurisées')
.pauseFor(1000)
.deleteChars(49)
.pauseFor(800)
.typeString('Conçu par les <span style="color: #ff4444;">Africains</span>, pour les <span style="color: #ff4444;">Africains</span>')
.pauseFor(800)
.deleteChars(49)
.typeString('Bienvenue sur Chap<span style="color: #ff4444;">Money</span>')
.start()