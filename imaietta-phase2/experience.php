<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>

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

            <!--Experience-->
            <div id="experience">
                <article>
                    <h2>Experience</h2>
                    <ul>
                        <!--Student Ambassador-->
                        <li class="job">
                            <a href="https://www.qmul.ac.uk/"><img src="./images/qmul_logo.jpg" alt="QMUL logo" class="logo"></a>
                            <div class="mainInfo">
                                <h3>Student Ambassador (Contractor)</h3>
                                <h4>Queen Mary University of London</h4>
                                <h5>2023 - present</h5>
                                <p>Social Media · Public Relations · Sales · Research · Communication</p>
                            </div>
                        </li>
                        <!--Young Creative-->
                        <li class="job">
                            <a href="https://fightforpeace.net/"><img src="./images/fight_for_peace_logo.png" alt="Fight For Peace Logo" class="logo"></a>
                            <div class="mainInfo">
                                <h3>Young Creative (Freelancer)</h3>
                                <h4>Fight for Peace</h4>
                                <h5>2023 - present</h5>
                                <p>I work with the Young Creatives group at Fight For Peace Academy to create content for their social media platforms, promoting the sports and other services they offer. Projects I have worked on inlcude filming and editing videos, hosting</p>
                            </div>
                            
                        </li>
                        <!--Coding Teacher-->
                        <li class="job">
                            <a href="https://www.cyphercoders.com/"><img src="./images/cypher_coders_logo.jfif" alt="Cypher Coders logo" class="logo"></a>
                            <div class="mainInfo">
                                <h3>Coding Teacher (Freelancer)</h3>
                                <h4>Cypher Coders</h4>
                                <h5>2022 - present</h5>
                                <p>I teach primary school children coding in various languages and the fundamentals of programmings. Currently, I am teaching Scratch as an after school club for Year 3 up to Year 5 pupils.</p>
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