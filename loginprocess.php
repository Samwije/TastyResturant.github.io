<?php

$DBConnection = new mysqli("localhost", "root", "", "tasty", "3306");
session_start();

if (!mysqli_connect_errno()) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT * FROM login WHERE un = '" . $username . "' and pw = '" . $password . "'";
    $Result = mysqli_query($DBConnection, $q);


    if (mysqli_num_rows($Result) == 0) {
        $login["username"] = "";
        $login["loged"] = false;
        $_SESSION["login"] = $login;
        header("Location:login.php");
    }
    while ($R = mysqli_fetch_assoc($Result)) {

        if ($R["password"] == $password) {
            $login["username"] = $username;
            $login["loged"] = true;
            $_SESSION["login"] = $login;
            header("Location:l.php");
        } else {
            $login["username"] = "";
            $login["loged"] = false;
            $_SESSION["login"] = $login;
            header("Location:searchprice.php");
        }
    }
} else {

    echo mysqli_connect_errno();
}
?>
