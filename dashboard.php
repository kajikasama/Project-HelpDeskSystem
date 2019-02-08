 <?php
    session_start();
    error_reporting(0);
    if(empty($_SESSION['user2']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Staff Dulu');
            location.href='logoutadmin.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard :: Help Desk System</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
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


	
<div class="topnav">
	<a href="index.php">Home</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-steam"></a>
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
      <a name="quit" href="logoutadmin.php">Logout</a>	
</div>
	<div class="tipo">
    	<h1>DASHBOARD HELP DESK SYSTEM</h1>
    </div>
	<div class="typographic">
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        .asdlk
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    	<h2 style="color:white">Table Admin</h2>
    	<table align="center" class="table table-striped table-hover">
        	<tr>
            	<th>Id Admin</th>
                <th>Nama Admin</th>
                <th>Email Admin</th>
                <th>Alamat Admin</th>
                <th>Username Admin</th>
                <th>Password Admin</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
	
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from admin");
				while ($hasil = mysqli_fetch_array($sql))
				{
					$hasil[5]=md5($hasil[5]);
					echo
					"
					<tr class='active'>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[0]</a></td>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[1]</a></td>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[2]</a></td>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[3]</a></td>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[4]</a></td>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[5]</a></td>
						<td><a href='adminubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='adminhapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";

				}
				
			?>
            
       </table>
       <h2 style="color:white; text-align: center;">Table Staff</h2>
    	<table align="center" class="table table-striped table-hover">
        	<tr>
            	<th>Id Staff</th>
                <th>Nama Staff</th>
                <th>Email Staff</th>
                <th>Alamat Staff</th>
                <th>Username Staff</th>
                <th>Password Staff</th>
                <th>Id Catagory Staff</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
	
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from staff");
				while ($hasil = mysqli_fetch_array($sql))
				{
					$hasil[5]=md5($hasil[5]);
					echo
					"
					<tr class='active'>
						<td><a href='lihat.php?kode=$hasil[0]'>$hasil[0]</a></td>
						<td><a href='lihat2.php?kode=$hasil[0]'>$hasil[1]</a></td>
						<td><a href='lihat2.php?kode=$hasil[0]'>$hasil[2]</a></td>
						<td><a href='lihat2.php?kode=$hasil[0]'>$hasil[3]</a></td>
						<td><a href='lihat2.php?kode=$hasil[0]'>$hasil[4]</a></td>
						<td><a href='lihat2.php?kode=$hasil[0]'>$hasil[5]</a></td>
						<td><a href='lihat2.php?kode=$hasil[0]'>$hasil[6]</a></td>
						<td><a href='staffv2ubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='staffv2hapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";
				}
				
			?>
            
        </table>
        <h2 style="color:white; text-align:center">Table Costomer</h2>
        <table align="center" class="table table-striped table-hover">
        	<tr>
            	<th>Id Customer</th>
                <th>Nama Customer</th>
                <th>Email Customer</th>
                <th>Alamat Customer</th>
                <th>Telepon Customer</th>
                <th>Username Customer</th>
                <th>Password Customer</th>
                <th>Id Catagory Customer</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from costumer");
				while ($hasil = mysqli_fetch_array($sql))
				{
					$hasil[6]=md5($hasil[6]);
					echo
					"
					<tr class='active'>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[0]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[1]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[2]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[3]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[4]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[5]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[6]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[7]</a></td>
						<td><a href='customerv2ubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='customerv2hapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";
				}
				
			?>
        </table>
        <h2 style="color:white; text-align: center;">Table Ticket</h2>
    	<table align="center" class="table table-striped table-hover">
        	<tr>
            	<th>Id Ticket</th>
                <th>Id Customer Ticket</th>
                <th>Id Kategori Ticket</th>
                <th>Jucul Ticket</th>
                <th>Keterangan Ticket</th>
                <th>Tanggal Ticket</th>
                <th>Status Ticket</th>
                <th>Id Staff Ticket</th>
                <th>Ticket Reply</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
				//include "simpanticket.php";
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from ticket");
				while ($hasil = mysqli_fetch_array($sql))
				{
					echo
					"
					<tr class='active'>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[0]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[1]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[2]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[3]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[4]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[5]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[6]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[7]</a></td>
						<td><a href='lihat3.php?kode=$hasil[0]'>$hasil[8]</a></td>
						<td><a href='ticketv2ubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='ticketv2hapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";
				}
				
			?>
            
        </table>
    </div>
</body>
</html>