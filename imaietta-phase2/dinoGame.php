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
    <link rel="stylesheet" href="./css/project.css" type="text/css">
    <!--Stylesheet for phone-->
    <link rel="stylesheet" href="./css/phone/project_phone.css" type="text/css" media="screen and (max-width: 768px)">
</head>
<body>

    <!--Header-->
    <?php include("header.php");?>

    <!--Landing section-->
    <div id="projects">
        <hgroup id="description">
            <h2>Dinosaur Game</h2>
            <p>I created this dinosaur game during my first semester of university for the Procedural Programming module</p>
            <h3>The process</h3>
            <h4>The initial code</h4>
            <p>The game was built from mini exercises I did through the semester, putting in practice new concepts I learned by iteratively upgrading and adjusting the previous version of the game. It was practice for procedural programming techniques in Java. </p>
            <h4>Adjusting</h4>
            <p>After having also studied Object-Oriented programming, I decided to widen the scope of the game and make it a well-developed game. IN PROGRESS</p>
        </hgroup>

        <section id="pics">
            <figure>
                <img src="./images/portfolio/coming_soon.avif" alt="" class="image">
                <figcaption>COMING SOON!</figcaption>
            </figure>

            <figure>
                <img src="./images/portfolio/coming_soon.avif" alt="" class="image">
                <figcaption>COMING SOON</figcaption>
            </figure>
        </section>
    </div>


    <!--Footer-->
    <?php include("footer.php");?>
    
</body>
</html>