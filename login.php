
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



</head>
<body>
    <div id="loginpolina">
        <h1>Login</h1>

        <form id="contact_form" action="loginprocess.php" method="POST">
            <div class="row">
                <label for="name" id="confnt">User name:</label>
                <input id="name" name="username" type="text"  size="30" /><br /><br>
            </div>
            <div class="row">
                <label for="email" id="confnt">Pass word:</label>
                <input id="email" name="password" type="text" size="30" /><br /><br><br>
            </div>

            <input type="submit" class="btn btn-default" value="Login">
        </form>		
    </div>




</body>

</html>