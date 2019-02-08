<html>
	<head>
		<title>Login Customer :: Help Desk System</title>
		<style>
        *
        {
            margin:0;
            padding:0;
        }
        body
        {
            /*background: url(22.jpg);*/
            background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(admin.jpg);
			background-size:1920px 1080px;
            
            	
        }
        .judul h1
        {
            margin-left:0;
            margin-top:40px;
            font-family:"arial";
            font-size : 48px;
            font-weight:bold;
            color: rgba(255,255,255,1);
            text-align:center;
        }
        .kotak
        {
            width:900px;
            height:500px;
            background: rgba(255,255,255,1);
            margin:0 auto;
            border: rgba(255,255,255,1) 5px solid;
            box-shadow:rgba(0,0,0,0.6) 20px 30px 40px;
        }
        .kotak .kiri
        {
            float:left;
            width:50%;
            height:500px;
            background: url(homepage-background.jpg);
            background-size:500px 500px;
            background-repeat:no-repeat;
            box-sizing:border-box;
        }
        .kotak .kanan
        {
            float:right;
            width:50%;
            height:500px;
            border: rgba(255,255,255,1) 3px solid;
            box-sizing:border-box;
        
        }
        .kotak .kanan form
        {
            width:100%;
            padding:80px 60px;
            box-sizing:border-box;
            height:400px;
        }
        .kotak .kanan form p
        {
            margin:0;
            padding:0;
            font-weight:bold;
            color: rgba(102,204,102,1);
            font-size:24px;
            font-family:'Tahoma';
        }
        .kotak .kanan form input
        {
            margin-bottom:50px;
            width:100%;
        }
        .kotak .kanan form input[type="text"],
        .kotak .kanan form input[type="password"]
        {
            border:none;
            border-bottom: rgba(51,204,153,1) 2px solid;
            margin-top:20px;
            font-size:20px;
            outline:none;
            padding-bottom:15px;
            color: rgba(102,102,102,1);
        }
        .kotak .kanan form input[type="text"]:focus,
        .kotak .kanan form input[type="password"]:focus
        {
            transition:.5s linear;
            border-bottom:rgba(0,102,204,1) 2px solid;
        }
        
        .kotak .kanan form input[type="submit"]
        {
            border:none;
            outline:none;
            height:40px;
            background: rgba(0,102,204,1);
            color: rgba(255,204,0,1);
            font-size:18px;
            font-family: "GeoSlab703 Md BT";
            cursor:pointer;
            transition:background 0.3s ease-out;
        }
        .kotak .kanan form input[type="submit"]:hover
        {
            background: #45E241;
            color: #0B2EF9;
            transition:0.3s linear;
        }
        .kanan form h4
        {
            font-family:'Arial';
            margin-top:-20px;
            float:none;
            margin-left:20px;
        }
        .kanan form img
        {
            width:50px;
            height:50px;
            float:right;
            margin-top: -30px;
            margin-left:20px;
            border:2px rgba(0,0,0,1) solid;
            border-radius:3px;
            
        }
        </style>
	</head>

	<body>
       <div class="judul">
    	<h1>Login Admin <br>Help Desk System</h1>
    </div>
    <div class="kotak">
    	<div class="kiri"></div>
    	<div class="kanan">
        	<form method="post" action="cekloginadmin.php">
            	<p>Username</p> 
                <input type="text" name="user2" placeholder="username">
                <p>Password</p> 
                <input type="password" name="pass2" placeholder="•••••">
                <input type="submit" value="Login" >
                <h4>Login For :</h4>
                <a href="logincustomer.php"><img src="user.png" /></a>
                <a href="loginstaff.php"><img src="staff.gif" /></a>
            </form>
           
        </div>
    </div>
		<?php
        ?>
	</body>
</html>