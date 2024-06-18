<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Entry</title>

                       <!--Stylesheets-->
    <!--General stylesheets-->
    <?php include("stylesheets.php");?>
    <!--Specific stylesheet-->
    <link rel="stylesheet" href="./css/blog.css" type="text/css">
    <link rel="stylesheet" href="./css/phone/blog_phone.css" type="text/css" media="screen and (max-width: 768px)">
</head>
<body>
    <!--Header-->
    <?php include("header.php");?>

    <div id="mainForm">
        <!--Forms-->
        <div id="forms">
            <?php
                if (isset($_SESSION['email'])){
                    echo "<h4 id='welcome'>Welcome user!</h4>";
                }
            ?>
            <!--Post blog-->
            <div class="formDiv">
                <form action="addPost.php" method="post" id="article">
                    <h2>Add a post</h2>
                    <div id="title">
                        <?php
                            if (isset($_GET['body'])){
                                echo "<input type='text' id='text' placeholder='Title' name='title' value='$_GET[title]'>";
                            } else {
                                echo "<input type='text' id='text' placeholder='Title' name='title'>";
                            }
                            ?>
                    </div>
                
                    <div id="blog">
                            <?php
                            if (isset($_GET['body'])){
                                echo "<textarea type='textarea' id='postArticle' placeholder='Enter your text here' name='postArticle'>$_GET[body]</textarea>";
                            } else {
                                echo "<textarea type='textarea' id='postArticle' placeholder='Enter your text here' name='postArticle'></textarea>";
                            }
                            ?>
                    </div>

                    <div id="blogBtn">
                        <div id="addPost">
                            <input type="submit" id="postbtn" value="Post" class="button">
                        </div>

                        <div id="clearButton">
                            <button id="clear" class="button">Clear</button>
                        </div>

                        <div id="previewButton">
                            <button type="button" id="previewbtn" class="button">Preview</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./blog.js"></script>

    <!--Footer-->
    <?php include("footer.php");?>
    <!--Check if fields are empty-->
   
</body>
</html>

