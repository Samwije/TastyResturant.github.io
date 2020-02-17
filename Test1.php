<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//            $rc = $_POST["rc"];
//            $pr = $_POST["pr"];
//            $br = $_POST["br"];
//            $ng = $_POST["ng"];
//            $pz = $_POST["pz"];
//            $pst = $_POST["pst"];
//            $bbq = $_POST["bbq"];
//            echo $rc;
//            echo $pr;
//            echo $br;
//            echo $ng;
//            echo $pz;
//            echo $pst;
//            echo $bbq;
//            $connection = new mysqli("localhost", "root", "", "tasty", "3306");
//            echo mysqli_error($connection);
//            
//            $query = "INSERT INTO foodprice(rc,pr,bri,nsg,pz,pst,bbq) VALUES('".$rc."','".$pr."','".$br."','".$ng."','".$pz."','".$pst."','".$bbq."')";
//            
//            $connection->query($query);
        
        

$DBConnection = new mysqli("localhost", "root", "123", "phpdatabase", "3306");
session_start();

if (!mysqli_connect_errno()) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT *FROM user WHERE username = '" . $username . "'";
    $Result = mysqli_query($DBConnection, $q);


    while ($R = mysqli_fetch_assoc($Result)) {

        if ($R["password"] == $password) {
            $_SESSION["username"] = $username;
            header("Location:home.php");
        } else {
            header("Location:login.php");
        }
    }
} else {

    echo mysqli_connect_errno();
}

            
        ?>
    </body>
</html>
