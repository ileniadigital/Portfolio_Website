<?php 

session_start();

//Database connection
include("dbconnection.php");

//Store new post in database
//Through addPost
if(isset($_POST['postArticle'])){
    $title=$_POST['title'];
    $post= $_POST['postArticle'];

    $sql= "INSERT INTO blogposts(title, post, created) VALUES('$title', '$post', NOW())";
    mysqli_query($conn, $sql);
    header("Location: viewBlog.php");
    exit();
} 
//Through preview
else if (isset($_GET['title'])){
    $title=$_GET['title'];
    $post= $_GET['body'];

    $sql= "INSERT INTO blogposts(title, post, created) VALUES('$title', '$post', NOW())";
    mysqli_query($conn, $sql);
    header("Location: viewBlog.php");
    exit();
}

//Include addEntry form to write blog posts
include("addEntry.php");
?>



