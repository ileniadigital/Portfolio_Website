<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add post</title>
</head>
<body>
    <!--Header-->
    <header>
        <figure id="logo">
            <a href="index.php">
                <img src="./images/Logo.png" alt="Logo Initials">
            </a>
            
        </figure>

        <h1>Ilenia Maietta</h1>
        <!--Navigation bar-->
        <nav>
            <ul id="menu">
                <li><a href="./viewBlog.php">Blog</a></li>
                <li><a href="./portfolio.php">Portfolio</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <?php
                    if (isset($_SESSION['email'])){
                        echo "<li><a href='logout.php'>Log out</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
</body>
</html>