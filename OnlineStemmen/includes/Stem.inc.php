<?php
if (isset($_POST['Submitstemmen'])) {

    require 'dbh.inc.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $stem = $_POST["Stem_Partij"];

        // Prepare an insert statement
        $sqli = "INSERT INTO users (Stem_Partij) VALUES ($stem);";

        if (mysqli_query( $conn,$sqli)) {
            echo "New record created successfully";
        } else {
            //THIS LINE SHOWS THE ERROR
            echo "Error: " . $sqli . "<br>" . mysqli_error();
        }

        // Close connection
        mysqli_close($conn);
    }
}else{
    header("location: login.php");
    exit;
}

