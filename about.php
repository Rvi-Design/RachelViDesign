<?php
require('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rachel Vi Design || About Me</title>
    <?php include 'includes/requiredLinks.inc'; ?>
    <link rel="stylesheet" href="about.css">

<!-----------------------required---------------------->

</head>
<body>
<!----------------------Navigation bar------------------>
 <?php include 'includes/nav.inc'; ?>
<!----------------------Main Content----------------------->
    <main>

        <!------------------About Me--------------------------->
        <section id="aboutMe">

            <h2 >About Me</h2>
<!-- --------------First -->
            <div class="textPic">
                <div class="pic" id="one"></div>
                <div class="text">
                    <p>
                    I’ve been a lifelong artist, musician, and avid enjoyer of all things “nerdy”. I grew up in a musically inclined family, with my dad at the heart of it.
                    <br><br>
                    Music quickly became our shared language and showed me how you could connect with someone without saying a thing. Through a high-school music camp called Rock Camp, I met my partner and love of my life and built friendships that have endured for over a decade. Music and art have always guided me, becoming my connection to others and also my refuge.
                </p>
                </div>
            </div>
<!-- -------------Second -->
            <div class="textPic reverse">
                <div class="pic" id="two"></div>
                <div class="text">
                    <p>
                        If music was my way of connecting, then art, books, and games were my escape. 
                        <br>As a kid, I was never idle, always pages deep into a story, sketching my thoughts into being, or adventuring through whichever video game had captured my imagination.
                        <br> I’m happy to report that adulthood hasn’t changed that much!  
                    </p>
                </div>
            </div>
<!-- -------------Third -->
            <div class="textPic">
                <div class="pic" id="three"></div>
                <div class="text">
                    <p>
                    In 2019, my partner and I moved to Calgary, trading small communities, woods, and starry skies for cityscapes, fast paces, and the hum of a city that never rests. 
                    <br>Through Covid-19, I learned a lot about myself, my priorities, and the people and passions that make life worth experiencing. It reignited my love for creating and learning.
                    <br><br>
                    To better fit into this energized, blue-skied city, I dove headfirst into tech through web development where I can create, express myself, and satisfy my puzzle-loving brain by unlocking the quirks of code.
                </p>
                </div>
            </div>

        </section>




        
        <!----------------------CTA Banner--------------------->
  <?php include 'includes/cta.inc'; ?>

</main>
<!-----------------------Footer------------------------>   
<?php include 'includes/footer.inc'; ?>




</body>
</html>