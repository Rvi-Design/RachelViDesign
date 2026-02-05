<?php 

require('includes/connection.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rachel Vi Design || Home</title>
    <link rel="stylesheet" href="index.css">
    <?php include 'includes/requiredLinks.inc';?>

</head>
<body>
<!----------------------Navigation bar------------------>
<?php include 'includes/nav.inc';?>
<!----------------------Main Content----------------------->
    <main>
        <div id="taglineLogo">
            <img src="Assets/logoBubbles.png" 
            alt="The 'Rachel Vi Design' Logo in a light purple circle with two smaller and darker circles to the right of it."
            height="536"
            width="638" id="bubbleLogo">

            <h1>Creative Solutions<br>Built With Purpose</h1>
        </div>
        <!------------------About Me--------------------------->
        <section id="aboutMe">

            <h2 class="category">About Me</h2>

            <div id="aboutArcContainer">
            <img src="Assets/circleSolo.png" 
            alt="small purple circle"
            height="185"
            width="185" id="smallCircle">

            <img src="Assets/RachelArcMed.png" 
            alt="A photo of 'Rachel Payette', the owner of Rachel Vi Design, in a purple arch-shaped shape, with two circles above her head, mimicing the ink-splashed in the main logo"
            height="550"
            width="380">
            </div>
            <p>Hi, my name is Rachel and I am a <strong>Website Designer and Developer</strong> based out of Calgary, Alberta.
            <br>
            <br>With a passion for creative exploration, I enjoy pursuing hobbies and projects that inspire me, such as painting and other artistic endeavours. 
            
            <br>
            <br> Professionally, I offer a comprehensive suite of design services, including website development, logo creation, brand guideline development, and bespoke art commissions. I am committed to delivering well-crafted and visually engaging solutions tailored to help brands stand out.
            <br>
            <br> Check out my <strong>instgram</strong> to see more of my side projects.</p>

            <ul id="aboutLinks">
                <li><a href="https://www.linkedin.com/in/rachel-vi-payette/"target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#73406A" viewBox="0 0 256 256" class="icon"><path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24ZM96,176a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0ZM88,96a12,12,0,1,1,12-12A12,12,0,0,1,88,96Zm96,80a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140Z" ></path></svg></a></li>

                <li><a href="https://www.instagram.com/rachel_vi_arts/"target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#73406A" viewBox="0 0 256 256"class="icon"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg></a></li>

                <li><a href="mailto:rachelvipayette@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#73406A" viewBox="0 0 256 256"class="icon"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg></a></li>
            </ul>

        </section>

        <!--------------------Project Buttons------------------->
        <section id="jumpLinks">
            <!-- <a href="destination-page.html#section-title">Jump to the specific section</a> -->
            <h2 class="category">Projects</h2>

            <div id="jumpLinkContainer">
            <a href="projects.html#websites" id="web"><span>Websites</span></a>
            <a href="projects.html#logos" id="log"><span>Logos</span></a>
            <a href="projects.html#artwork" id="art"><span>Artwork</span></a>
            </div>
        </section>


        <!-----------------------Skills------------------------>
        <section>
            <h2 class="category">My Skills</h2>
            <div id="boxesContainer">
                <ul class="skillBoxList">
                    <li class="skillBox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#f7f2f6" viewBox="0 0 256 256"><path d="M200,152a31.84,31.84,0,0,0-19.53,6.68l-23.11-18A31.65,31.65,0,0,0,160,128c0-.74,0-1.48-.08-2.21l13.23-4.41A32,32,0,1,0,168,104c0,.74,0,1.48.08,2.21l-13.23,4.41A32,32,0,0,0,128,96a32.59,32.59,0,0,0-5.27.44L115.89,81A32,32,0,1,0,96,88a32.59,32.59,0,0,0,5.27-.44l6.84,15.4a31.92,31.92,0,0,0-8.57,39.64L73.83,165.44a32.06,32.06,0,1,0,10.63,12l25.71-22.84a31.91,31.91,0,0,0,37.36-1.24l23.11,18A31.65,31.65,0,0,0,168,184a32,32,0,1,0,32-32Zm0-64a16,16,0,1,1-16,16A16,16,0,0,1,200,88ZM80,56A16,16,0,1,1,96,72,16,16,0,0,1,80,56ZM56,208a16,16,0,1,1,16-16A16,16,0,0,1,56,208Zm144-8a16,16,0,1,1,16-16A16,16,0,0,1,200,200Z"></path></svg>
                        <article class="hoverBlurb">
                            <h3>Web Design & Developement</h3>
                            <p class="innerBlurb">I design and build websites from the ground up, balancing structure and visuals to create experiences that feel polished, functional, and on-brand. 

                            I focus on bringing ideas to life in a way that feels cohesive, intuitive, and thoughtfully crafted.</p>
                        </article>
                    </li>

                    <li class="skillBox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#f7f2f6" viewBox="0 0 256 256"><path d="M243.31,81.36,174.63,12.68a16,16,0,0,0-22.63,0L123.56,41.12l-58,21.76A16,16,0,0,0,55.36,75.23L34.59,199.83a4,4,0,0,0,6.77,3.49l57-57a23.85,23.85,0,0,1-2.29-12.08,24,24,0,1,1,13.6,23.4l-57,57a4,4,0,0,0,3.49,6.77l124.61-20.77a16,16,0,0,0,12.35-10.16l21.77-58.07L243.31,104a16,16,0,0,0,0-22.63ZM208,116.68,139.32,48l24-24L232,92.68Z"></path></svg>
                        <article class="hoverBlurb">
                            <h3>Brand Identity & Visual Systems</h3>
                            <p class="innerBlurb">Your visual identity is often your first conversation with an audience. I create brand systems that reflect personality, values, and intent through thoughtful use of colour, typography, and composition.</p>
                        </article>
                    </li>

                    <li class="skillBox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#f7f2f6" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM40,56H216V96H40ZM216,200H112V112H216v88Z"></path></svg>
                        <article class="hoverBlurb">
                            <h3>UX / UI Design</h3>
                            <p class="innerBlurb">Good design should feel effortless to use. I apply user-focused design principles to create clear layouts, intuitive navigation, and interactions that make sense without explanation.
                            <br> 
                            My goal is to guide users naturally while keeping the experience engaging and accessible.</p>
                        </article>
                    </li>

                    <li class="skillBox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#f7f2f6" viewBox="0 0 256 256"><path d="M200.77,53.89A103.27,103.27,0,0,0,128,24h-1.07A104,104,0,0,0,24,128c0,43,26.58,79.06,69.36,94.17A32,32,0,0,0,136,192a16,16,0,0,1,16-16h46.21a31.81,31.81,0,0,0,31.2-24.88,104.43,104.43,0,0,0,2.59-24A103.28,103.28,0,0,0,200.77,53.89ZM84,168a12,12,0,1,1,12-12A12,12,0,0,1,84,168Zm0-56a12,12,0,1,1,12-12A12,12,0,0,1,84,112Zm44-24a12,12,0,1,1,12-12A12,12,0,0,1,128,88Zm44,24a12,12,0,1,1,12-12A12,12,0,0,1,172,112Z"></path></svg>
                        <article class="hoverBlurb">
                            <h3>Artwork & Illustration</h3>
                            <p class="innerBlurb">Art has always been at the core of my creative practice. Through illustration and traditional media, I explore emotion, storytelling, and composition, using each piece as a way to capture moments, moods, and personal growth.</p>
                        </article>
                    </li>


                </ul>

                <aside id="sideBlurb">

                <p >I work across design and development, bringing ideas from concept to execution with a balance of creativity and structure. My technical background includes building websites using the MERN stack, along with HTML, CSS, JavaScript, and PHP, allowing me to work comfortably on both the visual and functional sides of a project.

                <br> 
                <br> Alongside development, I use industry-standard design and productivity tools such as Figma, Canva, and the Adobe Creative Suite, as well as Microsoft and Google workspace tools for collaboration, documentation, and planning.</p>

                <div id="ulBox">

                <h2>Languages</h2>

                <ul class="skillsList">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                </ul>

                <h2>Design Tools</h2>

                <ul class="skillsList">
                    <li>Adobe Suite</li>
                    <li>Microsoft Suite</li>
                    <li>Figma</li>
                    <li>Canva</li>
                    <li>Krita</li>
                </ul>
                </div>

            </aside>
            
            </div>

            
        </section>
        
        <!----------------------CTA Banner--------------------->
    <?php include ('includes/cta.inc');?>
    </main>
<!-----------------------Footer------------------------>   
  <?php include ('includes/footer.inc');?>

<script src="menuToggle.js" ></script>

</body>
</html>