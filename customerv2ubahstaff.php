<?php
session_start();
if(empty($_SESSION['user1']))
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
	<title>Customer Ubah Data</title>
	<link rel="stylesheet" type="text/css" href="customerv2ubah.css">
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
	//include "Customerv2.php";
	//include "simpanCustomer.php";
	//include "Customerv2edit.php";
	$kode = $_GET['kode'];
	$sql = mysqli_query($konek,"select * from costumer where costumerid='$kode'");
	while($hasil = mysqli_fetch_array($sql))
	{
		$id1 = $hasil[0];
		$nama1 = $hasil[1];
		$email1 = $hasil[2];
		$alamat1 = $hasil[3];
		$telepon1 =  $hasil[4];
		$user1 =  $hasil[5];
		$pass1 = $hasil[6];
		$tanggal1 =  $hasil[7];
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
  <?php $nama = $_SESSION['user1']; 
            echo"<a name='c1' href='staffprofile.php?kode=$nama' >Welcome Staff $nama</a>" ?>
	<a name="dashboard" href="dashboardstaff.php">Dashboard</a>
	<a name="staff" href="staffv2staff.php">Staff</a>
	<a name="customer" href="customerv2staff.php">Customer</a>
	<a name="ticket" href="ticketv2staff.php">Ticket</a>
	<a name="quit" href="logoutstaff.php">Logout</a>
</div>
		<div class="typographic2">
    	<form method="post" action="customerv2edit.php">
         <div class="form-group">
    	<label for="exampleInputEmail1">Id Customer</label>
    	<input name="id" value="<?php echo $id1; ?>" type="text" class="form-control" id="exampleInputEmail1" readonly required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Nama Customer</label>
    	<input name="nama" value="<?php echo $nama1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Customer ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Email Customer</label>
    	<input name="email" value="<?php echo $email1; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Customer ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Alamat Customer</label>
    	<input name="alamat" value="<?php echo $alamat1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Customer ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Telepon Customer</label>
    	<input name="telepon" value="<?php echo $telepon1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telepon Customer ..." required>
  		</div>
        <div class="form-group">
    	<label  for="exampleInputEmail1">Username Customer</label>
    	<input name="user" value="<?php echo $user1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username Customer ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Password Customer</label>
    	<input name="pass" value="<?php echo $pass1; ?>" type="password" class="form-control" id="exampleInputEmail1" placeholder="Password Customer ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Tanggal Customer</label>
    	<input name="tanggal" value="<?php echo $tanggal1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Customer ..." required>
  		</div>
  		 <div class="form-group">
        <input type="submit" value="Ubah" />
        <a href="customerv2staff.php">Cancel</a>
        </div>
       
</form>
    </div>
	<div class="typographic">
    	
    </div>
    <div class="tipo">
    	<h1>CUSTOMER EDIT</h1>
    </div>
</body>
</html>