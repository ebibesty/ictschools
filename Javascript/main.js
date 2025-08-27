


const mobileBtn = document.getElementById('mobile-cta')
nav = document.querySelector('nav')
mobileBtnExit = document.getElementById('mobile-exit');

mobileBtn.addEventListener('click', () => {
nav.classList.add('menu-btn');
})

mobileBtnExit.addEventListener('click', () => {
nav.classList.remove('menu-btn');
})






function scrollHeader() {
const scrollTop = document.getElementById('scroll-top')
// when the scroll is greater than 200 viewport height, add the show-scroll class 
if (this.scroll-top >= 200)nav.classList.add('scroll-header'); else nav.classList.remove('scroll-top')
}
window.addEventListener('scroll', scrollHeader)
/*******************SHOW SCROLL TOP****************/
function scrollTop() {
const scrollTop = document.getElementById('scroll-top')
// when the scroll is higher than 560 viewport height, add the show-scroll class 
if (this.scrollY >= 560)scrollTop.classList.add('scroll-top'); else scrollTop.classList.remove('scroll-top')
}
window.addEventListener('scroll', scrollTop)
/*----------------------SCROLL REVEAL ANIMATION------------------*/
const sr = ScrollReveal({
origin:'top',
distance: '30px',
duration:2000,
reset:true

});

sr.reveal('.features-list, .features-section, .containers, .container-item, .testimonial-section  ',{
interval:200,
});

const mobileBtn = document.getElementById('mobile-cta')
nav = document.querySelector('nav')
mobileBtnExit = document.getElementById('mobile-exit');

mobileBtn.addEventListener('click', () => {
nav.classList.add('menu-btn');
})

mobileBtnExit.addEventListener('click', () => {
nav.classList.remove('menu-btn');
})