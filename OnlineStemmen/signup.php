<?php
require "Banner.php";
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <section class="section-default">
            <h1>Signup</h1>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo '<p class="signuperror">Vul alle velden in.</p>';
                }
                else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p class="signuperror">Gebruikersnaame en E-Mail fout</p>';
                }
                else if ($_GET["error"] == "invalidleeftijd") {
                    echo '<p class="signuperror">je moet 18 zijn om een account te maken</p>';
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror">Gebruikersnaam Fout</p>';
                }
                else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signuperror">Fout in E-Mail</p>';
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">De wachtwoorden komen niet overeen.</p>';
                }
                else if ($_GET["error"] == "usertaken") {
                    echo '<p class="signuperror">Naam is al ingebruik</p>';
                }
            }
            else if (isset($_GET["signup"])) {
                if ($_GET["signup"] == "success") {
                    echo '<p class="signupsuccess">Account succesvol aangemaakt.</p>';
                }
            }
            ?>
            <form class="form-signup" action="includes/signup.inc.php" method="post">
                <?php
                if (!empty($_GET["uid"])) {
                    echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
                }
                else {
                    echo '<input type="text" name="uid" placeholder="Naam">';
                }
                if (!empty($_GET["mail"])) {
                    echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
                }
                else {
                    echo '<input type="text" name="mail" placeholder="E-mail">';
                }
                ?>
                <input type="password" name="pwd" placeholder="wachtwoord">
                <input type="password" name="pwd-repeat" placeholder="Wachtwoord">
                <input type="date" name="uidDate">
                <button type="submit" name="signup-submit">Aanmaken</button>
                <div class="g-recaptcha" data-sitekey="6LeqkN0UAAAAAE45KIBEU9iTAFJfrD9AbzLFf9z1"></div>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>

