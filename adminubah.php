 <?php
    session_start();
    if(empty($_SESSION['user2']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Dulu');
            location.href='loginadmin.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin :: Help Desk System</title>
	<link rel="stylesheet" type="text/css" href="adminubah.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="home-icon.png" rel="shortcut icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    <?php
    include "koneksi.php";
    //include "staffv2.php";
    //include "simpanstaff.php";
    //include "staffv2edit.php";
    $kode = $_GET['kode'];
    $sql = mysqli_query($konek,"select * from admin where adminid='$kode'");
    while($hasil = mysqli_fetch_array($sql))
    {
        $id1 = $hasil[0];
        $nama1 = $hasil[1];
        $email1 = $hasil[2];
        $alamat1 = $hasil[3];
        $user1 =  $hasil[4];
        $pass1 = $hasil[5];
    }
?>
	
<div class="topnav">
	<a href="index2.php">Home</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="" class="fa fa-facebook"></a>
	<a href="" class="fa fa-instagram"></a>
    <a href="" class="fa fa-twitter"></a>
    <a href="" class="fa fa-steam"></a>
</div>
<div class="sidenav">
    <?php $nama = $_SESSION['user2']; 
            echo"<a name='c1' href='adminprofile.php?kode=$nama' >Welcome Admin $nama</a>" ?>
            <a name="admin" href="admin.php">Admin</a>
      <a name="dashboard" href="dashboard.php">Dashboard</a>
      <a name="staff" href="staffv2.php">Staff</a>
      <a name="staffcategory" href="staffcategory.php">Staff Category</a>
      <a name="customer" href="customerv2.php">Customer</a>
      <a name="ticket" href="ticketv2.php">Ticket</a>
      <a name="ticketkategory" href="ticketkategory.php">Ticket Category</a>
      <a name="quit" href="logoutstaff.php">Logout</a>
</div>
	<div class="typographic">
    	<form method="post" action="adminedit.php">
        <div class="form-group">
        <label for="exampleInputEmail1">Id Staff</label>
            <input class="form-control" name="id" type="text" value="<?php echo $id1;?>" readonly>
        </div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Nama Admin</label>
    	<input name="nama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $nama1;?>"   required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Email Admin</label>
    	<input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email1;?>" required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Alamat Admin</label>
    	<input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $alamat1;?>" required>
  		</div>
        <div class="form-group">
    	<label  for="exampleInputEmail1">Username Admin</label>
    	<input name="user" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $user1;?>" required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Password Admin</label>
    	<input name="pass" type="password" class="form-control" id="exampleInputEmail1" value="<?php echo $pass1;?>" required>
  		</div>
        <div class="form-group">
        <input type="submit" value="Update" class="" />
        <a href="admin.php">Cancel</a>
        
        </div>
    </div>   
</form>
    <div class="tipo">
    	<h1>ADMIN MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>