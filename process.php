<!DOCTYPE html>

<html>
    <head>

        <title></title>
    </head>
    <body>
        <?php
        $un = $_POST["un"];
        $pw = $_POST["pw"];

        $con = new mysqli("localhost", "root", "", "php", "3306");
        $query = "INSERT INTO revision (un,pw) VALUES ('" . $un . "','" . $pw . "')";

        $con->query($query);
        ?>
    </body>
</html>
