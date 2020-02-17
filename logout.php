
<!DOCTYPE html>
<html>
    <head>
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
    <div id="loginpolina">
        <h1>Log Out</h1>
        <form id="contact_form" action="logoutprocess.php" method="POST">


            <input type="submit" class="btn btn-default" value="Log Out">
        </form>		
    </div>




</body>

</html>