<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Modelling</title>

                       <!--Stylesheets-->
    <!--General stylesheets-->
    <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="./css/work.css" type="text/css">
    <!--Stylesheet for phone-->
    <link rel="stylesheet" href="./css/phone/work_phone.css" type="text/css" media="screen and (max-width: 768px)">
</head>
<body>
    <!--Header-->
    <?php include("header.php");?>
    
    <!--Landing section-->
    <div id="projects">
        <hgroup id="sectionIntro">
            <h2>3D Modelling</h2>
            <p>I mainly 3D model and animate using Autodesk Maya, and I have worked with Unity and STYLY to create AR and VR scenes</p>
        </hgroup>

        <section>
            <ul id="projectsLinks">
                <!--STLY & ARRIVAL-->
                <div class="project">
                    <li>
                        <a href="./well.php">Well model</a>
                    </li>
                </div>
                
                <!--Programming-->
                <div class="project">
                    <li>
                        <a href="./rollsroyce.php">Rolls Royce & IoI</a>
                    </li>
                </div>
                
                 <!--Design-->
                 <div class="project">
                    <li>
                        <a href="./melted_reality.php">STYLY Melted Reality</a>
                    </li>
                 </div>
                
            </ul>
        </section>
    </div>

    <!--Footer-->
    <?php include("footer.php"); ?>
    
</body>
</html>