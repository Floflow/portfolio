const navbar = document.querySelector('#navbar');
  window.addEventListener('scroll', () => {
    if(window.scrollY>=150){
      navbar.classList.add('navbar-white')
    } else {
      navbar.classList.remove('navbar-white')
    }
  });

const sliderImages = document.querySelectorAll('.slide-in');
  function checkSlide() {
    sliderImages.forEach(sliderImage => {
      const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.height ;
      const imageBottom = sliderImage.offsetTop + sliderImage.innerHeight;
      const isHalfShown = slideInAt > sliderImage.offsetTop;
      if(isHalfShown && window.scrollY>=640) {
        sliderImage.classList.add('active');
      }
    });
  }
window.addEventListener('scroll', checkSlide);

const skills = document.querySelectorAll('.screenScroll');
function checkSkill() {
  skills.forEach(skill => {
  const slideInAt = window.scrollY + window.innerHeight;
  const skillHeight = skill.offsetTop;
    if(slideInAt > skill.offsetTop) {
    skill.classList.add('line');
    }
  });
}
window.addEventListener('scroll', checkSkill);

window.sr = ScrollReveal({ reset: false });
sr.reveal('.text-reveal', { duration: 6000 });
sr.reveal('.header', { duration: 2000 });
sr.reveal('.content', { duration: 2000, delay: 100 });





