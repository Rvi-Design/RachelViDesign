
const nav = document.querySelector('.siteNav');
const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', () => {
  nav.classList.toggle('is-open');
});


// ------------Load Spinner-------------
document.querySelector('#contactForm')?.addEventListener('submit', function() {
    const btn = document.querySelector('#submitBtn');
    const spinner = document.querySelector('#loadingIndicator');
    
    btn.disabled = true;
    btn.textContent = 'Sending...';
    spinner.classList.add('visible');
});