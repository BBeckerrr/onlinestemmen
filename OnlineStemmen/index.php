<?php
require "Banner.php";
require "header.php";
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

<main>
    <section id="showcase">
        <div class="container">
            <h1>IMNTB</h1>
            <br>
            <h1>Makkelijker stemmen!</h1>
        </div>
    </section>
    <section id="StatusBar">
        <div class="container">
            <?php
            if (!isset($_SESSION['id'])) {
                echo '<p class="logout-status">U moet inloggen om te stemmen!</p>';
            }
            else if (isset($_SESSION['id'])) {
                echo '<p class="login-status">U bent ingelogd en kunt stemmen!</p>';
            }
            ?>
        </div>
    </section>
</main>
</html>

<?php
require "footer.php";
?>

