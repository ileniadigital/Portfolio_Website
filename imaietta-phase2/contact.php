<!--Start session-->
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>

                      <!--Stylesheets-->
    <!--General stylesheets-->
    <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/phone/contact_phone.css" type="text/css" media="screen and (max-width: 768px)">

</head>
<body>
     <!--Header-->
    <?php include("header.php");?>

    <main>
         <!--Landing section-->
        <div id="project">
            <h2>Have a project in mind?</h2>
            <button>
                <a href="mailto:ileniamaietta@business@gmail.com">Email me</a>
            </button>
        </div>
        
        <!--Reach me links-->
        <div id="contact">
            <h3>Reach me</h3>
            <ul id="reach">
                <!--Instagram-->
                <li class="link">
                    <figure>
                        <a href="https://www.instagram.com/ilenia.digital/">
                            <img src="./images/icons/insta.png" alt="instagram white logo" class="icon">
                        </a>
                        <figcaption>Instagram</figcaption>
                    </figure>
                </li>
        
                <!--LinkedIn-->
                <li class="link">
                    <figure>
                        <a href="https://www.linkedin.com/in/ilenia-maietta/">
                            <img src="./images/icons/linkedin.png" alt="linkedin white logo" class="icon">
                        </a>
                        <figcaption>LinkedIn</figcaption>
                    </figure>
                </li>
        
                <!--GitHub-->
                <li class="link">
                    <figure>
                        <a href="https://github.com/ileniadigital">
                            <img src="./images/icons/github.png" alt="github white logo" class="icon">
                        </a>
                        <figcaption>GitHub</figcaption>
                    </figure>
                </li>
        
                <!--Tik Tok-->
                <li class="link">
                    <figure>
                        <a href="https://www.tiktok.com/@ilenia.digital?lang=en">
                            <img src="./images/icons/tiktok.png" alt="tik tok white logo" class="icon">
                        </a>
                        <figcaption>Tik Tok</figcaption>
                    </figure>
                </li>
        
                <!--SketchFab-->
                <li class="link">
                    <figure>
                        <a href="https://sketchfab.com/ilenia.digital">
                            <img src="./images/icons/sketchfab.png" alt="sketchfab white logo" class="icon">
                        </a>
                        <figcaption>SketchFab</figcaption>
                    </figure>
                </li>
        
                <!--STYLY-->
                <li class="link">
                    <figure>
                        <a href="https://gallery.styly.cc/artist/ileniadigital/scenes">
                            <img src="./images/icons/styly.png" alt="styly white logo" class="icon">
                        </a>
                        <figcaption>STYLY</figcaption>
                    </figure>
                
                </li>
            </ul>
        </div>
    
    </main>
   
    <!--Footer-->
    <?php include("footer.php");?>
</body>
</html>