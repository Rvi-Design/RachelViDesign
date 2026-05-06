// Portfolio stuffs!

document.querySelectorAll('.carousel').forEach(carousel => {

    const track     = carousel.querySelector('.carouselTrack');
    const slides    = Array.from(carousel.querySelectorAll('.carouselSlide'));
    const prevBtn   = carousel.querySelector('.prevBtn');
    const nextBtn   = carousel.querySelector('.nextBtn');

    // ID to dot match
    const carouselId = carousel.id;                          // e.g. "carouselGraphic"
    const suffix     = carouselId.replace('carousel', '');   // e.g. "Graphic"
    const dotsWrap   = document.getElementById('dots'   + suffix);
    const counter    = document.getElementById('counter' + suffix);

    let current = 0;

    // ── Build dots ──────────────────────────────────────────
    slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.classList.add('dot');
        dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(dot);
    });

    const dots = Array.from(dotsWrap.querySelectorAll('.dot'));

    // ── Core navigation ─────────────────────────────────────
    function goTo(index) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');

        current = (index + slides.length) % slides.length;

        slides[current].classList.add('active');
        dots[current].classList.add('active');

        updateCounter();
        updateButtons();
    }

    function updateCounter() {
        if (counter) counter.textContent = `${current + 1} / ${slides.length}`;
    }

    function updateButtons() {
        prevBtn.disabled = current === 0;
        nextBtn.disabled = current === slides.length - 1;
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    // ── Fullscreen ───────────────────────────────────────────
const fullscreenBtn = carousel.querySelector('.fullscreenBtn');

if (fullscreenBtn) {
    fullscreenBtn.addEventListener('click', () => {
        if (!document.fullscreenElement) {

            if (carousel.requestFullscreen)             carousel.requestFullscreen();
            else if (carousel.webkitRequestFullscreen)  carousel.webkitRequestFullscreen();
            else if (carousel.msRequestFullscreen)      carousel.msRequestFullscreen();
        } else {
    
            if (document.exitFullscreen)            document.exitFullscreen();
            else if (document.webkitExitFullscreen) document.webkitExitFullscreen();
            else if (document.msExitFullscreen)     document.msExitFullscreen();
        }
    });


    document.addEventListener('fullscreenchange', () => {
        const isFullscreen = !!document.fullscreenElement;
        fullscreenBtn.setAttribute('aria-label', isFullscreen ? 'Exit fullscreen' : 'Toggle fullscreen');
        fullscreenBtn.innerHTML = isFullscreen
            ? `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--Lightest)" viewBox="0 0 256 256">
                <path d="M148,88V48a8,8,0,0,1,16,0V68.69l37.34-37.35a8,8,0,0,1,11.32,11.32L175.31,80H196a8,8,0,0,1,0,16H156A8,8,0,0,1,148,88ZM100,168H60a8,8,0,0,0,0,16H80.69L43.34,221.34a8,8,0,0,0,11.32,11.32L92,195.31V216a8,8,0,0,0,16,0V176A8,8,0,0,0,100,168Z"/>
               </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--Lightest)" viewBox="0 0 256 256">
                <path d="M216,48V88a8,8,0,0,1-16,0V67.31l-37.34,37.35a8,8,0,0,1-11.32-11.32L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48ZM93.66,141.34,56,178.69V158a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H88a8,8,0,0,0,0-16H67.31l37.35-37.34a8,8,0,0,0-11.32-11.32Z"/>
               </svg>`;
    });
}

    // Touch & Swipe
    let touchStartX = 0;
    let touchStartY = 0;
    const SWIPE_THRESHOLD = 40; 

    track.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
    }, { passive: true });

    track.addEventListener('touchend', e => {
        const dx = e.changedTouches[0].screenX - touchStartX;
        const dy = e.changedTouches[0].screenY - touchStartY;

        // if x movement dominant
        if (Math.abs(dx) > Math.abs(dy) && Math.abs(dx) > SWIPE_THRESHOLD) {
            if (dx < 0) {
                goTo(current + 1); // swipe left → next
            } else {
                goTo(current - 1); // swipe right → previous
            }
        }
    }, { passive: true });

    //Keyboard support accessibility stuff
    carousel.setAttribute('tabindex', '0');
    carousel.addEventListener('keydown', e => {
        if (e.key === 'ArrowLeft')  goTo(current - 1);
        if (e.key === 'ArrowRight') goTo(current + 1);
    });

    // launching janky code
    updateCounter();
    updateButtons();
});
