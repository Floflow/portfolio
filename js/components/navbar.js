function updateNavbarOnScroll() {
  const navbar = document.querySelector('#navbar');
  window.addEventListener('scroll', () => {
    if(window.scrollY>=400){
      navbar.classList.add('navbar-white')
    } else {
      navbar.classList.remove('navbar-white')
    }
  });
}

export {updateNavbarOnScroll};
