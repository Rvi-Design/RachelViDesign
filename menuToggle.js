
const nav = document.querySelector('.siteNav');
const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', () => {
  nav.classList.toggle('is-open');
});


// ------------Contact Form — async submit-------------
// e.preventDefault() stops the browser's default "navigate to action URL" behaviour.
// fetch() sends the form data in the background and waits for the PHP response.
// The spinner stays visible the whole time, and we show success/error in-page.

const contactForm = document.querySelector('#contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        const btn     = document.querySelector('#submitBtn');
        const spinner = document.querySelector('#loadingIndicator');

        btn.disabled    = true;
        btn.textContent = 'Sending...';
        spinner.classList.add('visible');

        try {
            const response = await fetch(window.location.href, {
                method:  'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                body:    new FormData(this)
            });

            const result = await response.json();
            spinner.classList.remove('visible');

            if (result.success) {
                const greeting = result.name ? `Thanks, ${result.name}!` : 'Thanks!';
                contactForm.innerHTML = `<p class="formSuccess">${greeting} I'll be in touch within 10 business days.</p>`;
            } else {
                btn.disabled    = false;
                btn.textContent = 'Send Message';
                showFormError(result.error ?? 'Something went wrong. Please try again.');
            }
        } catch (err) {
            spinner.classList.remove('visible');
            btn.disabled    = false;
            btn.textContent = 'Send Message';
            showFormError('Could not reach the server. Check your connection and try again.');
        }
    });
}

function showFormError(message) {
    let errorEl = document.querySelector('#formError');
    if (!errorEl) {
        errorEl = document.createElement('p');
        errorEl.id        = 'formError';
        errorEl.className = 'formErrors';
        contactForm.prepend(errorEl);
    }
    errorEl.textContent = message;
}
