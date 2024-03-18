//Navigation responsive
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileNav = document.getElementById('nav');
    const toggleImage = document.getElementById('toggle-image');
    let isToggleOn = false;

    // Function to handle the click event on the mobile menu toggle button
    mobileMenuToggle.addEventListener('click', function () {
        mobileNav.classList.toggle('hidden');
        mobileNav.classList.toggle('flex');

        // Remove the 'navResponsive' class when the menu is toggled on small screens
        const isSmallScreen = window.innerWidth < 640;
        var navlist = document.getElementById('navlist');
        navlist.classList.toggle('navResponsive', isSmallScreen);
        isToggleOn = !isToggleOn; // Toggle the state
        toggleImage.src = isToggleOn ? './images/close.png' : './images/hamburger.png';
    });

    // Call the checkScreenSize function initially
    checkScreenSize();

    // Attach the checkScreenSize function to the resize event
    window.addEventListener('resize', checkScreenSize);
});

// Function to check the screen size and toggle the 'navResponsive' class
function checkScreenSize() {
    const screenSizeThreshold = 640; // Adjust this value based on your desired screen size threshold
    const isSmallScreen = window.innerWidth < screenSizeThreshold;

    // Access your element by ID
    var navlist = document.getElementById('navlist');

    // Check the conditions and toggle the class accordingly
    if (!isSmallScreen) {
        navlist.classList.remove('navResponsive');
        navlist.classList.add('navBigScreen')
    } else {
        navlist.classList.remove('navBigScreen');
        navlist.classList.add('navResponsive');


    }
}


// Initial check when the script is loaded
checkScreenSize();

// Attach the checkScreenSize function to the resize event
window.addEventListener('resize', checkScreenSize);

AOS.init({
    offset: 400,
    delay: 100,
});
const swiperEl = document.querySelector('swiper-container');

const params = {
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        1281: {
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
        769: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
    },
    scrollbar: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        clickable: true,
    },
};

Object.assign(swiperEl, params)

swiperEl.initialize();

