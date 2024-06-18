<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>

                       <!--Stylesheets-->
    <!--General stylesheets-->
    <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="./css/about.css" type="text/css">
    <link rel="stylesheet" href="./css/phone/about_phone_edu_work.css" type="text/css" media="screen and (max-width: 768px)">
</head>
<body>
     <!--Header-->
    <?php include("header.php");?>
    
    <div id="main">
        <!--Aside menu-->
        <aside id="side_menu">
            <ul>
                <li><a href="./about.php">About me</a></li>
                <li><a href="./experience.php">Experience</a> </li>
                <li><a href="./education.php">Education</a> </li>
                <li><a href="./skills.php">Skills & Achievements</a> </li>
            </ul>
        </aside>

        <!--Main-->
        <main>
            <!--Education & Qualifications-->
            <div id="education">
                <article>
                    <h2>Education</h2>
                    <ul>
                        <!--QMUL-->
                        <li class="school">
                            <a href="https://www.qmul.ac.uk"><img src="./images/qmul_logo.jpg" alt="QMUL logo" class="logo"></a>
                            <div class="mainInfo">
                                <h3>Queen Mary University of London</h3>
                                <h4>Bachelor of Science (BSci) Computer Science</h4>
                                <h5>September 2022 - June 2026</h5>
                                <p><b>Relevant modules</b></p>
                                <ul class="subjects">
                                    <li>Procedural & Object-Oriented Programming in Java</li>
                                    <li>Web Technologies in HTML, CSS, JavaScript & PHP</li>
                                </ul>
                            </div>
                        </li>
                        <!--LDE UTC-->
                        <li class="school">
                            <a href="https://www.ldeutc.co.uk"><img src="./images/ldeutc_logo.png" alt="LDE UTC logo" class="logo"></a>
                            <div class="mainInfo">
                                <h3>London Design & Engineering UTC</h3>
                                <h4>A-levels & GCSEs</h4>
                                <h5>September 2018 - June 2022</h5> 
                                <!--A levels-->
                                <ul id="lde">
                                    <h6>A-levels</h6>
                                    <li>
                                        <ul class="subjects">
                                            <li>Computer Science, Italian, Cyber EPQ: Grade A*</li>
                                            <li>Chemistry: Grade A</li>
                                            <li>Digital Media Extended Certificate: Grade Distinction*</li>
                                        </ul> 
                                    </li>
                                    <!--GCSEs-->
                                    <h6>GCSEs</h6>
                                    <li>
                                        <p>Six Grade 9, one Grade 8, one Grade Distinction* Level 2</p>
                                    </li>
                                </ul>
                            </div>
                            
                        </li>
                    </ul>
                </article>
            </div>
        </main>
    </div>
    
    
    <!--Footer-->
    <?php include("footer.php");?>
</body>
</html>