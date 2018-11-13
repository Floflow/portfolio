
const navbar = document.querySelector('#navbar');
  window.addEventListener('scroll', () => {
    if(window.scrollY>=400){
      navbar.classList.add('navbar-white')
    } else {
      navbar.classList.remove('navbar-white')
    }
  });

const sliderImages = document.querySelectorAll('.slide-in');
  function checkSlide() {
    sliderImages.forEach(sliderImage => {
      const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.height / 1.5;
      const imageBottom = sliderImage.offsetTop + sliderImage.innerHeight;
      const isHalfShown = slideInAt > sliderImage.offsetTop;
      if(isHalfShown) {
        sliderImage.classList.add('active');
      }
    });
  }
  window.addEventListener('scroll', checkSlide);

window.sr = ScrollReveal({ reset: false });
sr.reveal('.text-reveal', { duration: 3000 });
sr.reveal('.title', { duration: 2000 });
sr.reveal('.content', { duration: 2000, delay: 100 });




