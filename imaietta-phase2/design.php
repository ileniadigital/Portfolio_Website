<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>

                       <!--Stylesheets-->
   <!--General stylesheets-->
   <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="./css/work.css">
    <!--Stylesheet for phone-->
    <link rel="stylesheet" href="./css/phone/work_phone.css" type="text/css" media="screen and (max-width: 768px)">
</head>
<body>
    <!--Header-->
    <?php include("header.php");?>
    
    <!--Landing section-->
    <div id="projects">
        <hgroup id="sectionIntro">
            <h2>Design</h2>
            <p>My design work centres around Adobe Illustrator mainly, as I enjoy creating vector illustrations. However, I have worked with Adobe Photoshop as well. Some of my favourite projects have included neon and geometric portraits and surrealism inspired portraits. I have worked on some practice "honest" logos, and to create assets for my social media profiles, and the wireframe designs for my website</p>
        </hgroup>

        <section>
            <ul id="projectsLinks">
                <!--STLY & ARRIVAL-->
                <div class="project">
                    <li>
                        <a href="./neon.php">Neon Portraits</a>
                    </li>
                </div>
                
                <!--Programming-->
                <div class="project">
                    <li>
                        <a href="./surrealism.php">Surrealism inspired portraits</a>
                    </li>
                </div>
                
                 <!--Design-->
                 <div class="project">
                    <li>
                        <a href="./geometric.php">Geometric portraits</a>
                    </li>
                 </div>
                
            </ul>
        </section>
    </div>


    <!--Footer-->
    <?php include("footer.php");?>
    
</body>
</html>