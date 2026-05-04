
const nav = document.querySelector('.siteNav');
const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', () => {
  nav.classList.toggle('is-open');
});
