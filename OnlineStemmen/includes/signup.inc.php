<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    $date = $_POST['uidDate'];
    $recaptcha = $_POST['recaptcha'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($date)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invaliduidmail");
        exit();
    } else if ( validateAge($date, 18) == false ) {
        header("Location: ../signup.php?error=invalidleeftijd");
        exit;
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCount = mysqli_stmt_num_rows($stmt);
            mysqli_stmt_close($stmt);
            if ($resultCount > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, iDate) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $date);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();

                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../signup.php");
    exit();
}


// functions start:
function validateAge($then, $min)
{
    // $then will first be a string-date
    $then = strtotime($then);
    //The age to be over, over +18
    $min = strtotime('+18 years', $then);
    if(time() < $min)  {
        return false;
    }
    return true;
}
