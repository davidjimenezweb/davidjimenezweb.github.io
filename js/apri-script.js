$(document).ready(function() {

   // Responsive navbar
   // Calculamos el ancho de la pagina
   var ancho = $(window).width(),
   links = $('#apriLinksMenu'),
   btnMenu = $('#apriBtnMenu'),
   icono = $('#apriBtnMenu .apriIcon');

   if(ancho < 991) {

      links.hide();
      icono.addClass('fa-bars');

   }

   btnMenu.on('click', function(e) {

      links.slideToggle();
      icono.toggleClass('fa-bars');
      icono.toggleClass('fa-times');

   });

   $(window).on('resize', function() {

      if($(this).width() > 991) {

         links.show();

      } else {

         links.hide();

      }

   });

   new WOW().init();

   var mediaquery = window.matchMedia("(max-width: 768px)");

   // BOTÓN ARRIBA
	$('.apriButtonUp').click(function() {

      $('body, html').animate({

          scrollTop: '0px'

      }, 600);

   });
   if (!mediaquery.matches) {

      $(window).scroll(function() {

          if($(this).scrollTop() > 0){

              $('.apriButtonUp').slideDown(300);

          } else {

              $('.apriButtonUp').slideUp(300);

          }

      });

   }

});

// Navbar scroll
const navbar = document.querySelector('#apriNavbar');

window.addEventListener('scroll', () => {

	const scrollPos = window.scrollY;
	if(scrollPos > window.innerHeight / 2){

      navbar.classList.add('scrolled');
      navbar.classList.add('fixed');
      navbar.classList.add('animate__animated')
      navbar.classList.add('animate__fadeInDown')
      navbar.classList.add('animate__faster')

	} else {

      navbar.classList.remove('scrolled');
      navbar.classList.remove('fixed');
      navbar.classList.remove('animate__animated')
      navbar.classList.remove('animate__fadeInDown')
      navbar.classList.remove('animate__faster')

   }
	
})

// Links scroll
var scroll = new SmoothScroll('a[href*="#"]', {

   selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
   selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
   speed: 600, // Integer. How fast to complete the scroll in milliseconds
   easing: 'easeInOutCubic', // Easing pattern to use
   offset: 30, // Integer. How far to offset the scrolling anchor location in pixels
   callback: function ( anchor, toggle ) {} // Function to run after scrolling

});

// Texto dinámico
var TxtType = function(el, toRotate, period) {
   this.toRotate = toRotate;
   this.el = el;
   this.loopNum = 0;
   this.period = parseInt(period, 10) || 2000;
   this.txt = '';
   this.tick();
   this.isDeleting = false;
};

TxtType.prototype.tick = function() {
   var i = this.loopNum % this.toRotate.length;
   var fullTxt = this.toRotate[i];

   if (this.isDeleting) {
       this.txt = fullTxt.substring(0, this.txt.length - 1);
   } else {
       this.txt = fullTxt.substring(0, this.txt.length + 1);
   }

   this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

   var that = this;
   var delta = 200 - Math.random() * 100;

   if (this.isDeleting) { delta /= 2; }

   if (!this.isDeleting && this.txt === fullTxt) {
       delta = this.period;
       this.isDeleting = true;
   } else if (this.isDeleting && this.txt === '') {
       this.isDeleting = false;
       this.loopNum++;
       delta = 500;
   }

   setTimeout(function() {
       that.tick();
   }, delta);
};

window.onload = function() {
   var elements = document.getElementsByClassName('typewrite');
   for (var i=0; i<elements.length; i++) {
       var toRotate = elements[i].getAttribute('data-type');
       var period = elements[i].getAttribute('data-period');
       if (toRotate) {
           new TxtType(elements[i], JSON.parse(toRotate), period);
       }
   }
   // INJECT CSS
   var css = document.createElement("style");
   css.type = "text/css";
   css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
   document.body.appendChild(css);
};