<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geometric portraits</title>

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
            <h2>Geometric portraits</h2>
            <p>These portraits are the result of an exercise assigned by my teacher to practice the Pen Tool in Adobe Illustrator, and also with understanding colours and shades better. The first I created was of singer Shawn Mendes, and the shapes I made were too big and made the portrait look more abstract. I tried with smaller shapes with actor Daveed Diggs, and for the greater amount of details it took me a total of 10 hours to create the full portrait. For the garden portrait, it took almost 20 hours to replicate the flowers, the shadows and highlights.</p>
            <h3>The process</h3>
            <p>I import an image in Adobe Illustrator and reduce its opacity, then with the Pen Tool I isolate the main, bigger areas of the same shade, then zoom in to get to the finer details. Once all the shapes are in places, I used the Live Paint Bucket Tool and EyeDropper to add colour. Once all the shapes are filled in, I manually edit any spaces between shapes, and adjust some shades.</p>
        </hgroup>

        <section id="pics">
            <figure>
                <img src="./images/portfolio/design/portraits/Daveed_Digs_geomteric_portrait.png" alt="Portrait of Daveed Diggs" class="image">
                <figcaption>Geometric portrait of Daveed Diggs</figcaption>
            </figure>

            <figure>
                <img src="./images/portfolio/design/portraits/St John's Lodge Garden [Recovered].jpg" alt="Portrait of a garden with a fountain" class="image">
                <figcaption>Geometric portrait of St John's Lodge Garden, Regent's Park</figcaption>
            </figure>
        </section>
    </div>

    <!--Footer-->
    <?php include("footer.php");?>
    
</body>
</html>