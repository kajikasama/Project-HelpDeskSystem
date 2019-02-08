 <?php
    session_start();
    if(empty($_SESSION['user2']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Dulu');
            location.href='loginstaff.php';
        </script>
        ";
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staffv2</title>
	<link rel="stylesheet" type="text/css" href="staffv2ubah.css">
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
	$sql = mysqli_query($konek,"select * from staff where staffid='$kode'");
	while($hasil = mysqli_fetch_array($sql))
	{
		$id1 = $hasil[0];
		$nama1 = $hasil[1];
		$email1 = $hasil[2];
		$alamat1 = $hasil[3];
		$user1 =  $hasil[4];
		$pass1 = $hasil[5];
		$idkat1 =  $hasil[6];
	}
?>

	
<div class="topnav">
	<a href="Home.php">Home</a>
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
		<div class="typographic2">
        <h2>Edit Staff</h2>
    	<form method="post" action="staffv2edit.php">
        <div class="form-group">
        <label for="exampleInputEmail1">Id Staff</label>
        	<input class="form-control" name="id" type="text" value="<?php echo $id1;?>" readonly>
        </div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Nama Staff</label>
    	<input name="nama" value="<?php echo $nama1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Staff ...">
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Email Staff</label>
    	<input name="email" value="<?php echo $email1; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Staff ...">
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Alamat Staff</label>
    	<input name="alamat" value="<?php echo $alamat1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Staff ...">
  		</div>
        <div class="form-group">
    	<label  for="exampleInputEmail1">Username Staff</label>
    	<input name="user" value="<?php echo $user1; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username Staff ...">
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Password Staff</label>
    	<input name="pass" value="<?php echo $pass1; ?>" type="password" class="form-control" id="exampleInputEmail1" placeholder="Password Staff ...">
  		</div>
  		 <div class="form-group">
         <label for="exampleInputEmail1">Id Kategori Staff</label>
        	<select value="<?php echo $idkat1; ?>" name="idkat" class="form-control">
            	<?php
                include "koneksi.php";
                $sql = mysqli_query ($konek, "select * from staffcategory");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    echo"<option value='$hasil[1]'>$hasil[1]</  option>"; 
                }
                ?>
            </select>
        <input type="submit" value="Update" class="btn btn-default" />
        <a href="staffv2.php">Cancel</a>
        </div>
       
</form>
    </div>
    <div class="tipo">
    	<h1>STAFF UPDATE MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>