<?php 

require('includes/connection.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rachel Vi Design || Home</title>
    <?php include 'includes/requiredLinks.inc'; ?>    
    <link rel="stylesheet" href="index.css">

</head>
<body>
<!----------------------Navigation bar------------------>
<?php include 'includes/nav.inc';?>
    
<!----------------------Main Content----------------------->
    <main>
        <div id="taglineLogo">
        <img src="Assets/BlueBanner.jpg" alt="a blue and gold marbled background with a picture of Designer & Developer Rachel Payette on the right side."  loading = "lazy">
        </div>
        <!------------------About Me--------------------------->
        <section id="aboutMe">

            <h2>About Me</h2>

            <div id="aboutArcContainer">
                <img src="Assets/AboutMePic.png" 
                alt="A photo of 'Rachel Payette', the owner of Rachel Vi Design, in a purple arch-shaped shape, with two circles above her head, mimicing the ink-splashed in the main logo"
                height="849"
                width="542"
                 loading = "lazy">
            </div>

            <p>
                Hi, my name is Rachel and I am a <strong>Website Designer and Developer</strong> based out of Calgary, Alberta.
                <br>
                <br>With a passion for creative exploration, I enjoy pursuing hobbies and projects that inspire me, such as painting and other artistic endeavours. 
            
                <br>
                <br> Professionally, I offer a comprehensive suite of design services, including website development, logo creation, brand guideline development, and bespoke art commissions. I am committed to delivering well-crafted and visually engaging solutions tailored to help brands stand out.
                <br>
                <br> Check out my <strong>instgram</strong> to see more of my side projects.</p>

            <ul id="aboutLinks">
                <li>
                    <a href="https://www.linkedin.com/in/rachel-vi-payette/"target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="none" viewBox="0 0 256 256" class="icon"><path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24ZM96,176a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0ZM88,96a12,12,0,1,1,12-12A12,12,0,0,1,88,96Zm96,80a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140Z" ></path></svg></a>
                </li>

                <li>
                    <a href="https://www.instagram.com/rachel_vi_arts/"target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="none" viewBox="0 0 256 256"class="icon"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg></a>
                </li>

                <li>
                    <a href="mailto:rachelvipayette@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="none" viewBox="0 0 256 256"class="icon"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg></a>
                </li>
            </ul>

        </section>

        <!--------------------Project Buttons------------------->
        <section id="jumpLinks">
            <!-- <a href="destination-page.html#section-title">Jump to the specific section</a> -->
            <h2 >Projects</h2>

            <div id="jumpLinkContainer">       
                <a href="projects.php#webDevelopment" id="web" class="transitionButtons">
                    <span>Web Design</span>
                </a>

                <a href="projects.php#graphicDesign" id="graphic"
                class="transitionButtons">
                    <span>Graphic Design</span>
                </a>

                <a href="projects.php#artwork" id="art"
                class="transitionButtons">
                    <span>Artwork</span>
                </a>
            </div>
        </section>


        <!-----------------------Skills------------------------>
        <section class="skills">
            <h2 >My Skills</h2>

            <div id="boxesContainer"> 
                <!-- <img src="Assets/topLeft.png" 
                alt="a black box with purple blobs in the corners. Categories of skills are written on them in a stylized, swirling font. This one displays: 'Web Design & Development' ."
                width="342.51"
                height="342.51">

                <img src="Assets/topRight.png" 
                alt="a black box with purple blobs in the corners. Categories of skills are written on them in a stylized, swirling font. This one displays: 'Brand Identity & Visual Systems' ."
                width="342.51"
                height="342.51">

                <img src="Assets/bottomLeft.png" 
                alt="a black box with purple blobs in the corners. Categories of skills are written on them in a stylized, swirling font. This one displays: 'UX/UI Design' ."
                width="342.51"
                height="342.51">

                <img src="Assets/bottomRight.png" 
                alt="a black box with purple blobs in the corners. Categories of skills are written on them in a stylized, swirling font. This one displays: 'Artwork & Illustration' ."
                width="342.51"
                height="342.51">                -->

                <div class= "skillBox" id="lightBlue">
                    <h3>Web Design & Development</h3>
                </div>

                <div class= "skillBox" id="midBlue">
                    <h3>Brand Identity & Visual Systems</h3>
                </div>
              
                <div class= "skillBox" id="darkBlue">
                    <h3>UX/UI Design</h3>
                </div>

                <div class= "skillBox" id="midGold">
                    <h3>Artwork & Illustration</h3>
                </div>                
                
            </div>

                <aside id="sideBlurb">
                    <p >
                        I work across design and development, bringing ideas from concept to execution with a balance of creativity and structure. My technical background includes building websites using the MERN stack, along with HTML, CSS, JavaScript, and PHP, allowing me to work comfortably on both the visual and functional sides of a project.
                        <br> 
                        <br> Alongside development, I use industry-standard design and productivity tools such as Figma, Canva, and the Adobe Creative Suite, as well as Microsoft and Google workspace tools for collaboration, documentation, and planning.
                    </p>

                        <h3>Languages</h3>

                        <ul class="skillsList">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>Node JS</li>
                            <li>Express JS</li>

                        </ul>

                        <h3>Design Tools</h3>

                        <ul class="skillsList">
                            <li>Adobe Suite</li>
                            <li>Microsoft Suite</li>
                            <li>Figma</li>
                            <li>Canva</li>
                            <li>Krita</li>
                            <li>Inkscape</li>

                        </ul>

                </aside>
            
        </section>
        
        <!----------------------CTA Banner--------------------->
    <?php include ('includes/cta.inc');?>
            
    </main>
<!-----------------------Footer------------------------>   
  <?php include ('includes/footer.inc');?>
   

<script src="menuToggle.js"></script>

</body>
</html>