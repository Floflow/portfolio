
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

const wrappers = document.querySelectorAll('.panel');
  function checkWrapper() {
    wrappers.forEach(wrapper => {
      const fixedAt = window.scrollY + window.innerHeight;
      console.log(fixedAt);
      if(fixedAt) {
        wrapper.style.position = "fixed";
      }
    });
  }
window.addEventListener('scroll', checkWrapper);
console.log('hey');




