<?php 
session_start(); 


error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
?>

<!doctype html>
<html lang="en">
<?php if ( "Login Page" !== $page_name) { ?>

<?php } ?>
<head>
    <title>Padmakhya</title>
    <link rel="PADMAKHYA icon logo" href="PADMAKHYA_LOGO.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?ver=1.9">
</head>
<header>


<nav id="navbar" role="navigation">
                <div class="logo">
                    <img src="PADMAKHYA_LOGO.png" alt="Padmakhya logo">
                </div>
                <ul class="ul_container">
                    <a href="main.php"><li class="item">Agerbatti</li></a>
                    <a href="#"><li class="item" onclick="addToCart2()">cart</li></a>
                    <a href="index.php"><li class="item"><?php 
                    if (!$_SESSION){
                        echo "Signup";
                    }
                    else{
                        echo $_SESSION["name"];
                    }
                    
                    ?></li></a>
                    
                    <?php
                    if (!$_SESSION){
                        echo "
                    ?>

                    <a href='logout.php'><li class='item'></li></a>

                    <?php
                    ";}
                    ?>

                    <?php
                    if ($_SESSION){
                        echo "
                    ?>

                    <a href='logout.php'><li class='item'>Logout</li></a>
                    
                    <?php
                    ";}
                    ?>
                </ul>
            </nav>
</header>
