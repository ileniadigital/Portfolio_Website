<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Art</title>

                       <!--Stylesheets-->
    <!--General stylesheets-->
    <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="css\project.css" type="text/css">
    <!--Stylesheet for phone-->
    <link rel="stylesheet" href="./css/phone/project_phone.css" type="text/css" media="screen and (max-width: 768px)">
</head>
<body>
    <!--Header-->
    <?php include("header.php");?>
    
    <!--Landing section-->
    <div id="projects">
        <hgroup id="description">
            <h2>CSS Art</h2>
            <p>In preparation for developing my own website, I decided to try creating art using CSS, since i had seen a few examples and I found it to be an interesting way to learn CSS.</p>
            <h3>The process</h3>
            <p>I firstly created the necessary files and created the containers for each part of the drawing. I used border-radius, div and position tags to create each shape and position it accordingly. I used GitHUb to save my files. <a href="https://github.com/ileniadigital/saturn_css_art"><b>Here is my code for Saturn</b></a> and <a href="https://github.com/ileniadigital/lollipop_css_art"><b>here is my code for the lollipop</b></a></p>
        </hgroup>

        <section id="pics">
            <figure>
                <img src="./images/portfolio/programming/saturn.png" alt="css saturn" class="image">
                <figcaption>Saturn CSS Art</figcaption>
            </figure>

            <figure>
                <img src="./images/portfolio/programming/lollipop.png" alt="CSS Lollipop" class="image">
                <figcaption>Lollipop CSS Art</figcaption>
            </figure>
        </section>
    </div>


    <!--Footer-->
    <?php include("footer.php");?>
    
</body>
</html>