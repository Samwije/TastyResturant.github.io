<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css" >
        <link rel="stylesheet" href="css/extra.css" type="text/css" >

    <div id="header">
        <div class="section">
            <ul>
                <li class="current">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="aboutme.php">About Us</a>
                </li>
                <li>
                    <a href="list.php">Price List</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>



    <video autoplay  poster="image/bbq.jpg" id="bgvid" loop>  
        <source src="video/bbq.webm">

    </video>
    <div id="listpolina">
        <h1>Price List</h1>
        <div style="width:490px;height:300px;line-height:1em;overflow:auto;padding:1px;">
            <form id="contact_form" id="confnt" action="#" method="POST" >


                <table border="0" ><br><br>
                    <?php
                    $con = new mysqli("localhost", "root", "", "tasty", "3306");

                    $qury = "SELECT * FROM foodprice WHERE id='1'";

                    $result = $con->query($qury);

                    if ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">Rice and curry :</pre></label></td>
                            <td><input name="name" type="text" value="<?php echo $row["rc"]; ?>" size="30" /></td>

                        </tr>

                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">Prid Rice      :</pre></label></td>
                            <td><input  name="name" type="text" value="<?php echo $row["pr"]; ?>" size="30" /></td>

                        </tr>

                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">Burriyani      :</pre></label></td>
                            <td><input  name="name" type="text" value="<?php echo $row["bri"]; ?>" size="30" /></td>

                        </tr>
                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">Nasi Goreng    :</pre></label></td>
                            <td><input name="name" type="text" value="<?php echo $row["nsg"]; ?>" size="30" /></td>

                        </tr>
                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">Piza           :</pre></label></td>
                            <td><input name="name" type="text" value="<?php echo $row["pz"]; ?>" size="30" /></td>

                        </tr>
                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">Pasta          :</pre></label></td>
                            <td><input  name="name" type="text" value="<?php echo $row["pst"]; ?>" size="30" /></td>

                        </tr>
                        <tr>
                            <td><label for="name" id="confnt"><pre id="confnt">B.B.Q - Soup   :</pre></label></td>
                            <td><input name="name" type="text" value="<?php echo $row["bbq"]; ?>" size="30" /></td>

                        </tr>
                        <?php
                    }
                    ?>
                </table>


            </form>
        </div>



    </head>
    <body>



    </body>
</html>
