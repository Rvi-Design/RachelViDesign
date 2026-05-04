
const nav = document.querySelector('.siteNav');
const menuToggle = document.querySelector('#menuToggle');

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

// ---------Theme buttons--------------

const themeToggle   = document.querySelector('#themeToggle');
const themeDropdown = document.querySelector('#themeDropdown');

themeToggle.addEventListener('click', (e) => {
    e.stopPropagation(); 
    const isOpen = themeDropdown.classList.toggle('open');
    themeToggle.setAttribute('aria-expanded', isOpen);
});


document.addEventListener('click', () => {
    themeDropdown.classList.remove('open');
    themeToggle.setAttribute('aria-expanded', false);
});


document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        themeDropdown.classList.remove('open');
        themeToggle.setAttribute('aria-expanded', false);
    }
});

// --Theme switching -
function setTheme(themeName) {
    document.querySelector('#themeStylesheet').href = `themes/${themeName}.css`;
    localStorage.setItem('selectedTheme', themeName);

    document.querySelectorAll('.themeBtn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.theme === themeName);
    });

   
    themeDropdown.classList.remove('open');
    themeToggle.setAttribute('aria-expanded', false);
}


const savedTheme = localStorage.getItem('selectedTheme');
if (savedTheme) setTheme(savedTheme);