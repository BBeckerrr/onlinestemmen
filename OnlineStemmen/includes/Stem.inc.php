<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';


    if(isset($_POST['SubmitStemmen']))
    {
        $Stem = $_POST['stemmen'];

        $sqlS="UPDATE 'users' SET Stem_Partij = $Stem";

        mysqli_query($conn, sqlS);
    }
}
