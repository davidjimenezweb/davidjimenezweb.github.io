/* ==================== MOSTRAR MENU ==================== */
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* ===== MENU MOSTRADO ===== */
// * Validar si el constante existe
if(navToggle) {
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/* ===== MENU ESCONDIDO ===== */
// * Validar si el constante existe
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/* ==================== QUITAR MENU MÓVIL ==================== */
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')
    // * Cuando clickamos en cada nav__link, quitamos la clase show-menu
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


/* ==================== CHANGE BACKGROUND HEADER ==================== */
function scrollHeader() {
    const header = document.getElementById('header')
    // * Cuando el scroll es superior a 100 de la altura de la ventana, añadimos la clase scroll-header a la etiqueta header
    if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/* ==================== SWIPER DISCOVER ==================== */
let swiper = new Swiper('.discover__container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 32,
    coverflowEffect: {
        rotate: 0,
    },
})

/* ==================== VIDEO ==================== */
const videoFile   = document.getElementById('video-file'),
      videoButton = document.getElementById('video-button'),
      videoIcon   = document.getElementById('video-icon')

function playPause() { 
    if (videoFile.paused) {
        // * Play vídeo
        videoFile.play()
        // * Cambiamos el icono
        videoIcon.classList.add('ri-pause-line')
        videoIcon.classList.remove('ri-play-line')
    }
    else {
        // * Pause vídeo
        videoFile.pause(); 
        // * Cambiamos el icono
        videoIcon.classList.remove('ri-pause-line')
        videoIcon.classList.add('ri-play-line')

    }
}
videoButton.addEventListener('click', playPause)

function finalVideo() {
    // * El vídeo termina, el icono cambia
    videoIcon.classList.remove('ri-pause-line')
    videoIcon.classList.add('ri-play-line')
}
// * ended, Cuando el vídeo termina
videoFile.addEventListener('ended', finalVideo)


/* ==================== SHOW SCROLL UP ==================== */ 
function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    // * Cuando el scroll es más alto a 200 en la ventana, añadimos la clase show-scroll a la etiqueta con la clase scroll-top
    if(this.scrollY >= 200) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/* ==================== SCROLL SECTIONS ACTIVE LINK ==================== */
const sections = document.querySelectorAll('section[id]')

function scrollActive() {
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/* ==================== SCROLL REVEAL ANIMATION ==================== */
const sr = ScrollReveal({
    distance: '60px',
    duration: 2800,
    // reset: true,
})

sr.reveal(`.home__data, .home__social-link, .home__info,
           .discover__container,
           .experience__data, .experience__overlay,
           .place__card,
           .sponsor__content,
           .footer__data, .footer__rights`,{
    origin: 'top',
    interval: 100,
})

sr.reveal(`.about__data, 
           .video__description,
           .subscribe__description`,{
    origin: 'left',
})

sr.reveal(`.about__img-overlay, 
           .video__content,
           .subscribe__form`,{
    origin: 'right',
    interval: 100,
})

/* ==================== DARK LIGHT THEME ==================== */ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-sun-line'

// * Selección previa del tema (Si el usuario selecciona)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// * Obtenemos el tema actual que tiene la interfaz validando la clase dark-theme
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

// * Validamos si el usuario eligió previamente un tema
if (selectedTheme) {
  // * Si se cumple la validación, preguntamos cuál fue el problema para saber si activamos o desactivamos el oscuro
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}

// * Activación/desactivación manual del tema con el botón
themeButton.addEventListener('click', () => {
    // * Añadir o quitar el icono oscuro
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)

    // * Guardamos el tema y el icono actual que eligió el usuario
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})