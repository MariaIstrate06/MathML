<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Categories.css">
    <title>Categories</title>
</head>
<body>
<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="News.php">News</a>
    <a href="Categories.php">Categories</a>
    <a href="Contact.php">Contact</a>
    <div class="login-container">
        <?php
        include 'TopNav.php';
        ?>
    </div>
</div>
<div class="quarter">
    <a href ="../HTML/Calculus.php">
        <div class="quarter-content">
            <div class="imageBox">
                <div class="imageInn">
                    <img src="../images/resources/icons/math_icons/green/calculus.png" width="70%">
                </div>
                <div class="hoverImg">
                    <img src="../images/resources/icons/math_icons/hover/calculus.png" width="70%">
                </div>
            </div>
        </div>
    </a>
</div>
<div class="quarter">
    <a href ="../HTML/Algebra.php">
        <div class="quarter-content">
            <div class="imageBox">
                <div class="imageInn">
                    <img src="../images/resources/icons/math_icons/green/algebra.png" width="70%">
                </div>
                <div class="hoverImg">
                    <img src="../images/resources/icons/math_icons/hover/algebra.png" width="70%">
                </div>
            </div>
        </div>
    </a>
</div>
<div class="quarter">
    <a href ="../HTML/Geometry.php">
        <div class="quarter-content">
            <div class="imageBox">
                <div class="imageInn">
                    <img src="../images/resources/icons/math_icons/green/geometry.png" width="70%">
                </div>
                <div class="hoverImg">
                    <img src="../images/resources/icons/math_icons/hover/geometry.png" width="70%">
                </div>
            </div>
        </div>
    </a>
</div>
<div class="quarter">
    <a href ="../HTML/Trigonometry.php">
        <div class="quarter-content">
            <div class="imageBox">
                <div class="imageInn">
                    <img src="../images/resources/icons/math_icons/green/trigonometry.png" width="70%">
                </div>
                <div class="hoverImg">
                    <img src="../images/resources/icons/math_icons/hover/trigonometry.png" width="70%">
                </div>
            </div>
        </div>
    </a>
</div>
</body>
</html>
