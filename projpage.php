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
    <link rel="stylesheet" href="proj.css">

</head>

<body>
  <?php include 'includes/nav.inc'; ?>
  <main> 

<div id="projectsHeader">
        <?php include 'includes/backButton.inc'; ?>
        <p class="bannerText">Projects</p>
        </div>

<div class="projects-wrapper">
  <p class="projects-header">Case studies</p>
  <div id="caseStudiesContainer"></div>
</div>

</main>

<?php include 'includes/footer.inc'; ?>

<script src="menuToggle.js"></script>
<script src="caseStudies.js"></script>

</body>

</html>
