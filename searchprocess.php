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
        $rc = $_POST["riceandcurry"];
        $pr = $_POST["pridrice"];
        $br = $_POST["buriyani"];
        $ng = $_POST["nasigoreng"];
        $pz = $_POST["piza"];
        $pst = $_POST["pasta"];
        $bbq = $_POST["bbq"];

        $connection = new mysqli("localhost", "root", "", "tasty", "3306");
        echo mysqli_error($connection);

        $query = "SELECT * FROM foodprice where id='1'";

        $connection->query($query);
        header("Location:searchprice.php");
        ?>
    </body>
</html>
