/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
    const nav = document.querySelector('.navbar')
    // When the scroll is greater than 120 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 120) {
        nav.classList.add('scroll-header');
    }
    else nav.classList.remove('scroll-header');
}
window.addEventListener('scroll', scrollHeader);


// ===============   Animation in Header   ============== //
const headerTitle = document.querySelector('.header__title');
const headerText = document.querySelector('.header__text');
window.onload = () => {
    headerTitle.style.opacity = '1';
    headerText.style.opacity = '1';
}


// ===============   Animation in Features   ============== //
function showFeatures(){
    const Features = document.querySelector('.features');
    if(this.scrollY >= 950) {
        Features.style.opacity = '1';
    }
    else Features.style.opacity = '0';
}
window.addEventListener('scroll', showFeatures);


// ===============   Animation in Email   ============== //
function showEmailImg(){
    const emailImg = document.querySelector('.email__content-img img');
    if(this.scrollY >= 2890) {
        emailImg.style.opacity = '1';
        emailImg.style.transform = "translateY(55px)";
    }
    // else {
    //     emailImg.style.opacity = '0';
    //     emailImg.style.transform = "translateY(0px)";
    // }
}
window.addEventListener('scroll', showEmailImg);


// ===============   Slider in Screen   ============== //
var $owl = $('.owl-carousel');

$owl.children().each( function( index ) {
  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
});

$owl.owlCarousel({
    center: true,
    loop: true,
    items: 3,
    pagination:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:3,
        }
    }
});

$(document).on('click', '.owl-item>div', function() {
  var $speed = 300;  // in ms
  $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
});


// ============  Navbar responsive  ============= //
const headerOverlay = document.querySelector('.before');
const bars = document.querySelector('.nav__bars');
const sideBar = document.querySelector('.side__bar');
const closeSideBar = document.querySelector('.close__sidebar');
showSidebar = () => sideBar.classList.add('nav__active');
showBefore = () => headerOverlay.style.display = "block";
hideSidebar = () => sideBar.classList.remove('nav__active');
hideBefore = () => headerOverlay.style.display = "none";

bars.addEventListener('click' , () => {
    showSidebar(); 
    showBefore()
})
closeSideBar.addEventListener('click' , () => {
    hideSidebar() , hideBefore()
});

/*==================== SHOW SCROLL UP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-up')
    if(this.scrollY >= 560) {
        scrollTop.classList.add('show-scroll');
    }
    else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)