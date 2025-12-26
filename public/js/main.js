
// AOS Init
$(document).ready(function() {
   AOS.init({
     duration: 1000,
     });
 });


'use strict';

///////////////// Components
//////// Modal
// Run script only on pages where open button is given
if(document.querySelector('.btn-show-modal') != null) {
	const modal = document.querySelector('.digi-modal');
	const overlay = document.querySelector('.digi-modal-overlay');
	const btnOpenModal = document.querySelector('.btn-show-modal');
	const btnCloseModal = document.querySelector('.btn-close-modal');

	const openModal = function(e) {
		e.preventDefault();
		modal.classList.remove('hidden');
		overlay.classList.remove('hidden');
	}

	const closeModal = function() {
		modal.classList.add('hidden');
		overlay.classList.add('hidden');
	}

	// Open modal
	// If using multiple buttons to open modal use forEach
	// btnOpenModal.forEach(btn => btn.addEventListener('click', openModal));
	btnOpenModal.addEventListener('click', openModal);

	// Close modal by clicking on button
	btnCloseModal.addEventListener('click', closeModal);

	// Close modal by clicking on overlay
	overlay.addEventListener('click', closeModal);

	// Close modal by pressing escape key on keyboard
	document.addEventListener('keydown', function(e) {
		if(e.key === 'Escape' && !modal.classList.contains('hidden')) {
			closeModal();
		}
	});

}




$('.testimonials').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
 })



const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach((item) => {
  const question = item.querySelector('.faq-question');
  const icon = question.querySelector('.icon');

  question.addEventListener('click', () => {
    // Close all
    faqItems.forEach((el) => {
      if (el !== item) {
        el.classList.remove('active');
        el.querySelector('.icon').textContent = '+';
      }
    });

    // Toggle current
    item.classList.toggle('active');
    icon.textContent = item.classList.contains('active') ? '−' : '+';
  });
});




//////// Sticky Navbar
const digiPageBanner = document.querySelector('.page-banner');
if(digiPageBanner) {
	const navBar = document.querySelector('.navbar');
	const navHeight = navBar.getBoundingClientRect().height;
	
	const headerObsObject = {
		root: null,
		threshold: 0,
		rootMargin: `-${navHeight}px`,
	}
	
	const stickyNav = function(entries) {
		const [entry] = entries;
	
		if(!entry.isIntersecting) {
			navBar.classList.add('customNav');
		} else {
			navBar.classList.remove('customNav');
		}
	}
	const headerObserver = new IntersectionObserver(stickyNav, headerObsObject);
	headerObserver.observe(digiPageBanner);
}

//////// Change theme light-dark mode
//Toggle class dark on body
// Run script only on pages where theme button is given
const themeBtn = document.getElementById('theme-btn');
if(themeBtn) {
	const activeMode = document.querySelectorAll('.active-mode');
	const currentTheme = localStorage.getItem("theme");
	if (currentTheme == "dark") {
		document.body.classList.add("dark");
	}
	themeBtn.addEventListener('change', () => {
		document.body.classList.toggle('dark');
	
		activeMode.forEach(function(el) {
			el.classList.toggle('hidden');
		});
	
		let theme = "light";
		if(document.body.classList.contains("dark")) {
			theme = "dark";
		}
		localStorage.setItem("theme", theme);
	});
}


//////// Reveal sections on scroll
// const allSections = document.querySelectorAll('.section');

// const revealSection = function(entries, observer) {
// 	const [entry] = entries;

// 	if(!entry.isIntersecting) {
// 		return;
// 	} else {
// 		entry.target.classList.remove('section-hidden');
// 		observer.unobserve(entry.target);
// 	}
// }
// const sectionObserver = new IntersectionObserver(revealSection, {
// 	root: null,
// 	threshold: 0.15,
// });
// allSections.forEach(function(section) {
// 	sectionObserver.observe(section);
// 	section.classList.add('section-hidden');
// });


//////// Add animation classes when in viewport
// const animatedEl = document.querySelectorAll('.view-animate');

// const revealElement = function(entries, observer) {
// 	const [entry] = entries;

// 	if(!entry.isIntersecting) {
// 		return;
// 	} else {
// 		entry.target.classList.remove('animate__animated');
// 		observer.unobserve(entry.target);
// 	}
// }
// const elementObserver = new IntersectionObserver(revealElement, {
// 	root: null,
// 	threshold: 0.15,
// });
// animatedEl.forEach(function(el) {
// 	elementObserver.observe(el);
// 	el.classList.add('animate__animated', 'animate__slideInUp');
// });


//////// Scroll to top
const btnScrollTo = document.querySelector('.scroll-top');
const scrollToPoint = document.querySelector('.scroll-point');

btnScrollTo.addEventListener('click', function(e) {
	scrollToPoint.scrollIntoView({behavior: 'smooth'});
});


//////// Smooth scroll navigation on a page
// Check the page name as string in url
if(window.location.href.indexOf('about') > -1) {
	document.querySelector('.page-nav-row').addEventListener('click', function(e) {
		e.preventDefault();
		// 2. Determine which element originated the event
		if(e.target.classList.contains('page-nav-link')) {
			const id = e.target.getAttribute('href');
			//// If using navbar not fixed to top then use scrollIntoView
			// document.querySelector(id).scrollIntoView({behavior: 'smooth'});

			//// If using fixed navbar then accomodate navbar height
			const elPosition = document.querySelector(id).getBoundingClientRect().top;
			const offsetPosition = elPosition - (navHeight + 10);
			
			window.scrollTo({
				top: offsetPosition + window.pageYOffset,
				behavior: 'smooth',
			});
		}
	});
}

//////// Tab component
if(window.location.href.indexOf('component') > -1) {
	const tabs = document.querySelectorAll('.tabs-sc-btn');
	const tabsContainer = document.querySelector('.tabs-btn-wrap');
	const tabsContent = document.querySelectorAll('.tabs-content');

	if(tabsContainer) {
		tabsContainer.addEventListener('click', function(e) {
			const tabClicked = e.target.closest('.tabs-sc-btn');
			console.log(tabClicked);
			if(!tabClicked) return;
	
			// Remove active class
			tabs.forEach(t => t.classList.remove('tabs-sc-btn-active'));
			tabsContent.forEach(c => c.classList.remove('tabs-content-active'));
	
			// Activate tab button
			tabClicked.classList.add('tabs-sc-btn-active');
	
			// Activate content area
			document.querySelector(`.tabs-content-${tabClicked.dataset.tab}`).classList.add('tabs-content-active');
		});
	} 
}

// Initialize Swiper
// Cube effect
var swiper = new Swiper(".mySwiper", {
	effect: "cube",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	cubeEffect: {
		shadow: false,
		slideShadows: true,
		shadowOffset: 20,
		shadowScale: 0.94,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});
// Initialize Swiper
// Flip effect
var swiper = new Swiper(".flipSwiper", {
	effect: "flip",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	pagination: {
		el: ".swiper-pagination",
	},
	navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//////// Sticky Navbar
$(window).scroll(function() {
	if ($(document).scrollTop() > 200	) {
		$(".navbar").addClass("customNav");
	} else {
		$(".navbar").removeClass("customNav");
	}
});

// Add class active
$(document).ready(function() {
	var url = window.location.href;
	$('.myNav-nav a[href="url"]').parent().addClass('active');
	$('.myNav-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});

// Dropdown menu
$(document).ready(function() {
    $(".hidden-menu").click(function() {
		$(this).parent('.dropdown-nav').children('.sub-drop').toggleClass("sub-menu sub-menu-small");
    });
	
	$(".menu-list-sm li").click(function() {
		$(this).children(".menu-sublist-sm").toggleClass("menu-sublist-sm-vis");
	});
});

// Toggle menu function
$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('.nav-container').toggleClass('mob-container');
    });
});