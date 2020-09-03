// Scroll del header
const header = document.querySelector('.navbar');

window.addEventListener('scroll', () => {

	const scrollPos = window.scrollY;
	if(scrollPos > 40){

		header.classList.add('scrolled');

	} else {

		header.classList.remove('scrolled');

	}
	
})

// Smooth Scroll
var scroll = new SmoothScroll('a[href*="#"]', {

	selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
	selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
	speed: 1000, // Integer. How fast to complete the scroll in milliseconds
	easing: 'easeInOutCubic', // Easing pattern to use
	offset: 40, // Integer. How far to offset the scrolling anchor location in pixels
	callback: function ( anchor, toggle ) {} // Function to run after scrolling

});