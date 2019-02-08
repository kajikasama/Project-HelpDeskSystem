<html>
<head>
<title>Login Staff :: Help Desk System</title>
<link rel="stylesheet" href="stylelogin.css" >
</head>

<body>
	<div class="judul">
    	<h1>Login Staff <br>Help Desk System</h1>
    </div>
    <div class="kotak">
    	<div class="kiri"></div>
    	<div class="kanan">
        	<form method="post" action="cekloginstaff.php" action="cekloginadmin.php">
            	<p>Username</p> 
                <input type="text" name="user" placeholder="username">
                <p>Password</p> 
                <input type="password" name="pass" placeholder="•••••">
                <input type="submit" value="Login" >
                <h4>Login For :</h4>
                <a href="logincustomer.php"><img src="user.png" /></a>
                <a href="loginadmin.php"><img src="user_login-512.png" /></a>
            </form>
           
        </div>
    </div>
    <div></div>
    <?php
	?>
</body>
</html>