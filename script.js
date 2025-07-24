window.addEventListener('scroll', () => {
  const nav = document.querySelector('nav');
  if(window.scrollY > 100) {
    nav.classList.add('fixed-nav');
  } else {
    nav.classList.remove('fixed-nav');
  }
});
