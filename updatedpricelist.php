
<!DOCTYPE html>
<html>
    <head>
<!--        <script type="text/javascript">
function clearFields() {
    document.getElementById("textfield1").value=""
    document.getElementById("textfield2").value=""
}
</script>-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css" >
        <link rel="stylesheet" href="css/extra.css" type="text/css" >

    <div id="header">
        <div class="section">
            <ul>
                <li>
                    <a href="searchprice.php">Search Price</a>
                </li>
                <li>
                    <a href="updatedpricelist.php">Update Price</a>
                </li>	
                <!--                <li>
                                    <a href="savepricelist.php">Save Price</a>
                                </li>	
                                <li>
                                    <a href="deleteprice.php">Delete Price</a>
                                </li>	-->
                <li>
                    <a href="logout.php">Log Out</a>
                </li>
            </ul>

        </div>
    </div>



    <video autoplay  poster="image/bbq.jpg" id="bgvid" loop>  
        <source src="video/bbq.webm">

    </video>

</head>
<body>

    <div id="changepricepolina" >
        <h1>Update Price List</h1>

        <form id="contact_form" action="updateprocess.php" method="POST" >


            <table border="0" >
                <?php
                $con = new mysqli("localhost", "root", "", "tasty", "3306");

                $qury = "SELECT * FROM foodprice WHERE id='1'";

                $result = $con->query($qury);

                if ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><label for="name">Rice and curry :</label></td>
                        <td><input  name="riceandcurry" type="text" value="<?php echo $row["rc"]; ?>" size="30" /></td>

                    </tr>

                    <tr>
                        <td><label for="name">Prid Rice:</label></td>
                        <td><input name="pridrice" type="text" value="<?php echo $row["pr"]; ?>" size="30" /></td>

                    </tr>

                    <tr>
                        <td><label for="name">Burriyani:</label></td>
                        <td><input name="buriyani" type="text" value="<?php echo $row["bri"]; ?>" size="30" /></td>

                    </tr>
                    <tr>
                        <td><label for="name">Nasi Goreng:</label></td>
                        <td><input  name="nasigoreng" type="text" value="<?php echo $row["nsg"]; ?>" size="30" /></td>

                    </tr>
                    <tr>
                        <td><label for="name">Piza:</label></td>
                        <td><input  name="piza" type="text" value="<?php echo $row["pz"]; ?>" size="30" /></td>

                    </tr>
                    <tr>
                        <td><label for="name">Pasta:</label></td>
                        <td><input  name="pasta" type="text" value="<?php echo $row["pst"]; ?>" size="30" /></td>

                    </tr>
                    <tr>
                        <td><label for="name">B.B.Q - Soup:</label></td>
                        <td><input   name="bbq" type="text" value="<?php echo $row["bbq"]; ?>" size="30" /></td>

                    </tr>
                    <?php
                }
                ?>

            </table>
            <input type="submit" value="Update">


        </form>     
    </div>

</div>





</body>
</html>
