<?php
require('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rachel Vi Design || Projects</title>
    <?php include 'includes/requiredLinks.inc'; ?>
    <link rel="stylesheet" href="projects.css">

</head>
<body>

<?php include 'includes/nav.inc'; ?>

<main>

    <div id="projectsHeader">
        <?php include 'includes/backButton.inc'; ?>
        <p class="bannerText">Projects</p>
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

                <img src="Assets/GDport/GD-01.png" alt="Graphic Design Portfolio — Page 1" class="carouselSlide active" loading = "lazy">

                <img src="Assets/GDport/GD-02.png" alt="Graphic Design Portfolio — Page 2" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-03.png" alt="Graphic Design Portfolio — Page 3" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-04.png" alt="Graphic Design Portfolio — Page 4" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-05.png" alt="Graphic Design Portfolio — Page 5" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-06.png" alt="Graphic Design Portfolio — Page 6" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-07.png" alt="Graphic Design Portfolio — Page 7" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-08.png" alt="Graphic Design Portfolio — Page 8" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-09.png" alt="Graphic Design Portfolio — Page 9" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-10.png" alt="Graphic Design Portfolio — Page 10" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-11.png" alt="Graphic Design Portfolio — Page 11" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-12.png" alt="Graphic Design Portfolio — Page 12" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-13.png" alt="Graphic Design Portfolio — Page 13" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-14.png" alt="Graphic Design Portfolio — Page 14" class="carouselSlide" loading = "lazy">

                <img src="Assets/GDport/GD-15.png" alt="Graphic Design Portfolio — Page 15" class="carouselSlide" loading = "lazy">

            </div>

            <button class="carouselBtn nextBtn" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M32,128a8,8,0,0,1,8-8H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72a8,8,0,0,1,0,11.32l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40A8,8,0,0,1,32,128Z"/>
                </svg>
            </button>

            <button class="fullscreenBtn" aria-label="Toggle fullscreen"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--Text)fff" viewBox="0 0 256 256">
                <path d="M216,48V88a8,8,0,0,1-16,0V67.31l-37.34,37.35a8,8,0,0,1-11.32-11.32L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48ZM93.66,141.34,56,178.69V158a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H88a8,8,0,0,0,0-16H67.31l37.35-37.34a8,8,0,0,0-11.32-11.32Z"/>
                </svg>
            </button>
        </div>

        <div class="dotsContainer" id="dotsGraphic"></div>

        <div class="carouselFooter">
            <span class="slideCounter" id="counterGraphic"></span>
               
            <a href="Assets/GDport/RPayette_GDPortfolio.pdf" 
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

                <img src="Assets/WDport/WD-01.png" alt="Web Development Portfolio — Page 1" class="carouselSlide active" loading = "lazy">

                <img src="Assets/WDport/WD-02.png" alt="Web Development Portfolio — Page 2" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-03.png" alt="Web Development Portfolio — Page 3" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-04.png" alt="Web Development Portfolio — Page 4" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-05.png" alt="Web Development Portfolio — Page 5" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-06.png" alt="Web Development Portfolio — Page 6" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-07.png" alt="Web Development Portfolio — Page 7" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-08.png" alt="Web Development Portfolio — Page 8" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-09.png" alt="Web Development Portfolio — Page 9" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-10.png" alt="Web Development Portfolio — Page 10" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-11.png" alt="Web Development Portfolio — Page 11" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-12.png" alt="Web Development Portfolio — Page 12" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-13.png" alt="Web Development Portfolio — Page 13" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-14.png" alt="Web Development Portfolio — Page 14" class="carouselSlide" loading = "lazy">

                <img src="Assets/WDport/WD-15.png" alt="Web Development Portfolio — Page 15" class="carouselSlide" loading = "lazy">                
      
            </div>

            <button class="carouselBtn nextBtn" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M32,128a8,8,0,0,1,8-8H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72a8,8,0,0,1,0,11.32l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40A8,8,0,0,1,32,128Z"/>
                </svg>
            </button>
            <button class="fullscreenBtn" aria-label="Toggle fullscreen"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--Text)fff" viewBox="0 0 256 256">
                <path d="M216,48V88a8,8,0,0,1-16,0V67.31l-37.34,37.35a8,8,0,0,1-11.32-11.32L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48ZM93.66,141.34,56,178.69V158a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H88a8,8,0,0,0,0-16H67.31l37.35-37.34a8,8,0,0,0-11.32-11.32Z"/>
                </svg>
            </button>

        </div>

        <div class="dotsContainer" id="dotsWeb"></div>

        <div class="carouselFooter">
            <span class="slideCounter" id="counterWeb"></span>
            <a href="assets/WDport/RPayette_WDPortfolio.pdf"
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
  
                <img src="Assets/AWport/AW-01.png" alt="Artwork Portfolio — Page 1" class="carouselSlide active" loading = "lazy">

                <img src="Assets/AWport/AW-02.png" alt="Artwork Portfolio — Page 2" class="carouselSlide" loading = "lazy">

                <img src="Assets/AWport/AW-03.png" alt="Artwork Portfolio — Page 3" class="carouselSlide" loading = "lazy">

                <img src="Assets/AWport/AW-04.png" alt="Artwork Portfolio — Page 4" class="carouselSlide" loading = "lazy">

                <img src="Assets/AWport/AW-05.png" alt="Artwork Portfolio — Page 5" class="carouselSlide" loading = "lazy">

                <img src="Assets/AWport/AW-06.png" alt="Artwork Portfolio — Page 6" class="carouselSlide" loading = "lazy">

                <img src="Assets/AWport/AW-07.png" alt="Artwork Portfolio — Page 7" class="carouselSlide" loading = "lazy">

                <img src="Assets/AWport/AW-08.png" alt="Artwork Portfolio — Page 8" class="carouselSlide" loading = "lazy">

                

            </div>

            <button class="carouselBtn nextBtn" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f7f2f6" viewBox="0 0 256 256">
                    <path d="M32,128a8,8,0,0,1,8-8H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72a8,8,0,0,1,0,11.32l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40A8,8,0,0,1,32,128Z"/>
                </svg>
            </button>
            <button class="fullscreenBtn" aria-label="Toggle fullscreen"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--Text)fff" viewBox="0 0 256 256">
                <path d="M216,48V88a8,8,0,0,1-16,0V67.31l-37.34,37.35a8,8,0,0,1-11.32-11.32L188.69,56H168a8,8,0,0,1,0-16h40A8,8,0,0,1,216,48ZM93.66,141.34,56,178.69V158a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H88a8,8,0,0,0,0-16H67.31l37.35-37.34a8,8,0,0,0-11.32-11.32Z"/>
                </svg>
            </button>

        </div>

        <div class="dotsContainer" id="dotsArt"></div>

        <div class="carouselFooter">
            <span class="slideCounter" id="counterArt"></span>
            <a href="Assets/AWport/RPayette_AWPortfolio.pdf"
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
