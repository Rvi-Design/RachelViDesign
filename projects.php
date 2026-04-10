<?php
require('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rachel Vi Design || Projects</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="projects.css">
    <?php include 'includes/requiredLinks.inc'; ?>
</head>
<body>

<?php include 'includes/nav.inc'; ?>

<main>

    <div id="projectsHeader">
        <?php include 'includes/backButton.inc'; ?>
        <h1 class="category">Projects</h1>
    </div>

    <!--------------------------GRAPHIC DESIGN--------------------------->
    <section class="portfolioSection" id="graphicDesign">
        <h2 class="catLeft">Graphic Design</h2>

        <div class="carousel" id="carouselGraphic" data-pdf="assets/pdfs/graphic-design-portfolio.pdf">

            <button class="carouselBtn prevBtn" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"/>
                </svg>
            </button>

            <div class="carouselTrack">
                <!-- 
                    REPLACE these <img> tags with one per page of your graphic design portfolio PDF.
                    Export each page as a JPG or PNG from Illustrator/Figma/Acrobat.
                    Recommended: 1200px wide, JPG at 85% quality for fast loading.
                    Name them sequentially: gd-01.jpg, gd-02.jpg, etc.
                    Store them in: Assets/portfolios/graphic/
                -->
                <img src="Assets/portfolios/graphic/gd-01.jpg" alt="Graphic Design Portfolio — Page 1" class="carouselSlide active">
                <img src="Assets/portfolios/graphic/gd-02.jpg" alt="Graphic Design Portfolio — Page 2" class="carouselSlide">
                <img src="Assets/portfolios/graphic/gd-03.jpg" alt="Graphic Design Portfolio — Page 3" class="carouselSlide">
                <!-- Add more pages here -->
            </div>

            <button class="carouselBtn nextBtn" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M32,128a8,8,0,0,1,8-8H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72a8,8,0,0,1,0,11.32l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40A8,8,0,0,1,32,128Z"/>
                </svg>
            </button>

        </div>

        <div class="dotsContainer" id="dotsGraphic"></div>

        <div class="carouselFooter">
            <span class="slideCounter" id="counterGraphic"></span>
            <a href="assets/pdfs/graphic-design-portfolio.pdf" 
               download 
               class="downloadBtn"
               aria-label="Download Graphic Design Portfolio PDF">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M224,152v56a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V152a8,8,0,0,1,16,0v56H208V152a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,132.69V40a8,8,0,0,0-16,0v92.69L93.66,106.34a8,8,0,0,0-11.32,11.32Z"/>
                </svg>
                Download PDF
            </a>
        </div>

    </section>

    <!------------------------------WEB DEV------------------------------->
    <section class="portfolioSection" id="webDevelopment">
        <h2 class="catLeft">Web Development</h2>

        <div class="carousel" id="carouselWeb" data-pdf="assets/pdfs/web-development-portfolio.pdf">

            <button class="carouselBtn prevBtn" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"/>
                </svg>
            </button>

            <div class="carouselTrack">
                <!-- 
                    REPLACE these with exports from your web dev portfolio PDF.
                    Store them in: Assets/portfolios/web/
                    Name them: web-01.jpg, web-02.jpg, etc.
                -->
                <img src="Assets/portfolios/web/web-01.jpg" alt="Web Development Portfolio — Page 1" class="carouselSlide active">
                <img src="Assets/portfolios/web/web-02.jpg" alt="Web Development Portfolio — Page 2" class="carouselSlide">
                <img src="Assets/portfolios/web/web-03.jpg" alt="Web Development Portfolio — Page 3" class="carouselSlide">
                <!-- Add more pages here -->
            </div>

            <button class="carouselBtn nextBtn" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M32,128a8,8,0,0,1,8-8H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72a8,8,0,0,1,0,11.32l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40A8,8,0,0,1,32,128Z"/>
                </svg>
            </button>

        </div>

        <div class="dotsContainer" id="dotsWeb"></div>

        <div class="carouselFooter">
            <span class="slideCounter" id="counterWeb"></span>
            <a href="assets/pdfs/web-development-portfolio.pdf"
               download
               class="downloadBtn"
               aria-label="Download Web Development Portfolio PDF">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M224,152v56a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V152a8,8,0,0,1,16,0v56H208V152a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,132.69V40a8,8,0,0,0-16,0v92.69L93.66,106.34a8,8,0,0,0-11.32,11.32Z"/>
                </svg>
                Download PDF
            </a>
        </div>

    </section>

    <!-------------------------------ARTWORK----------------------------->
    <section class="portfolioSection" id="artwork">
        <h2 class="catLeft">Artwork</h2>

        <div class="carousel" id="carouselArt" data-pdf="assets/pdfs/artwork-portfolio.pdf">

            <button class="carouselBtn prevBtn" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"/>
                </svg>
            </button>

            <div class="carouselTrack">
                <!-- 
                    REPLACE these with exports from your artwork portfolio PDF.
                    Store them in: Assets/portfolios/art/
                    Name them: art-01.jpg, art-02.jpg, etc.
                -->
                <img src="Assets/portfolios/art/art-01.jpg" alt="Artwork Portfolio — Page 1" class="carouselSlide active">
                <img src="Assets/portfolios/art/art-02.jpg" alt="Artwork Portfolio — Page 2" class="carouselSlide">
                <img src="Assets/portfolios/art/art-03.jpg" alt="Artwork Portfolio — Page 3" class="carouselSlide">
                <!-- Add more pages here -->
            </div>

            <button class="carouselBtn nextBtn" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M32,128a8,8,0,0,1,8-8H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72a8,8,0,0,1,0,11.32l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40A8,8,0,0,1,32,128Z"/>
                </svg>
            </button>

        </div>

        <div class="dotsContainer" id="dotsArt"></div>

        <div class="carouselFooter">
            <span class="slideCounter" id="counterArt"></span>
            <a href="assets/pdfs/artwork-portfolio.pdf"
               download
               class="downloadBtn"
               aria-label="Download Artwork Portfolio PDF">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M224,152v56a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V152a8,8,0,0,1,16,0v56H208V152a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,132.69V40a8,8,0,0,0-16,0v92.69L93.66,106.34a8,8,0,0,0-11.32,11.32Z"/>
                </svg>
                Download PDF
            </a>
        </div>

    </section>

    <?php include 'includes/cta.inc'; ?>

</main>

<?php include 'includes/footer.inc'; ?>

<script src="menuToggle.js"></script>
<script src="carousel.js"></script>

</body>
</html>
