<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>

                       <!--Stylesheets-->
    <!--General stylesheets-->
    <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="./css/about.css" type="text/css">
    <link rel="stylesheet" href="./css/phone/about_phone.css"type="text/css" media="screen and (max-width: 768px)">
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
            <!--Biography-->
            <section id="bio">
                <article>
                    <h2>About me</h2>
                    <p>I am Ilenia, a Computer Science Undergraduate student at Queen Mary University of London, with passion for creativity and technology. I aim to work in Cyber Security, Artificial Intelligence and Machine Learning to develop simpler, more automatic and secure experiences for users, creating opportunities for more accessible experiences.
                    I enjoy designing and developing through a range of media - both physical and digital - software and languages. I also enjoy reading a wide variety of books, writing, painting and boxing. I am originally from Southern Italy, and have lived in the UK since 2018.</p>
                </article>

                <figure> 
                    <img src="./images/picture_of_me.jpg" alt="picture of me" id="picture_me">
                    <figcaption>Picture of me</figcaption>
                </figure>
                
            </section>
        </main>
    </div>
    
    <!--Footer-->
    <?php include("footer.php");?>
</body>
</html>