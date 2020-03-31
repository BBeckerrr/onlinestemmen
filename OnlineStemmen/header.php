<?php
session_start();
require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Online Stemmen.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Online Stemmen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
</head>
<body>

<header>
    <nav class="nav-header-main">
        <ul>
            <li><a class="btn btn1" href="Home.php">Home</a></li>
            <li><a class="btn btn2" href="#">Partijen</a></li>
            <li><a class="btn btn3" href="Standpunten.php">Standpunten</a></li>
            <li><a class="btn btn4" href="Stemmen.php">Stemmen</a></li>
        </ul>
    </nav>
    <div class="header-login">
        <?php
        if (!isset($_SESSION['id'])) {
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
    </div>
</header>
</body>
</html>
