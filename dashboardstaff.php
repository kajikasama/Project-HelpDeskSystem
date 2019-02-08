 <?php
    session_start();
    if(empty($_SESSION['user1']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Staff Dulu');
            location.href='loginstaff.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard :: Help Desk System</title>
	<link rel="stylesheet" type="text/css" href="dashboardstaff.css">
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
	<a href="index2.php">Home</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-steam"></a>
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
	<div class="tipo">
    	<h1>DASHBOARD HELP DESK SYSTEM</h1>
    	<?php
    		include "koneksi.php";
    		$sql = mysqli_query($konek,"select count(*) from admin");
    		$sql1 = mysqli_query($konek,"select count(*) from staff");
    		$sql2 = mysqli_query($konek,"select count(*) from costumer");
    		$sql3 = mysqli_query($konek,"select count(*) from ticket");
    		while ($hitung = mysqli_fetch_array($sql)) 
    		{
    			echo"<h3>Jumlah Data Di Admin : $hitung[0]</h3>";
    		}
    		while ($hitung1 = mysqli_fetch_array($sql1)) 
    		{
    			echo"<h3>Jumlah Data Di Staff : $hitung1[0]</h3>";
    		}
    		while ($hitung2 = mysqli_fetch_array($sql2)) 
    		{
    			echo"<h3>Jumlah Data Di Customer : $hitung2[0]</h3>";
    		}
    		while ($hitung3 = mysqli_fetch_array($sql3)) 
    		{
    			echo"<h3>Jumlah Data Di Ticket : $hitung3[0]</h3>";
    		}
    	?>
    </div>
	<div class="typographic">
    	<h2 style="color:white">Table Admin</h2>
    	<table align="center" class="table table-striped table-hover">
        	<tr>
            	<th>Id Admin</th>
                <th>Nama Admin</th>
                <th>Email Admin</th>
                <th>Alamat Admin</th>
                <th>Username Admin</th>
                <th>Password Admin</th>
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
						<td>$hasil[0]</td>
						<td>$hasil[1]</td>
						<td>$hasil[2]</td>
						<td>$hasil[3]</td>
						<td>$hasil[4]</td>
						<td>$hasil[5]</td>
						
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
						<td>$hasil[0]</td>
						<td>$hasil[1]</td>
						<td>$hasil[2]</td>
						<td>$hasil[3]</td>
						<td>$hasil[4]</td>
						<td>$hasil[5]</td>
						<td>$hasil[6]</td>
						
					</tr>
					";
				}
				
			?>
            
        </table>
        <h2 style="color:white; text-align:center;">Table Costomer</h2>
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
						<td>$hasil[0]</td>
						<td>$hasil[1]</td>
						<td>$hasil[2]</td>
						<td>$hasil[3]</td>
						<td>$hasil[4]</td>
						<td>$hasil[5]</td>
						<td>$hasil[6]</td>
						<td>$hasil[7]</td>
						<td><a href='customerv2ubahstaff.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='customerv2hapusstaff.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
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
						<td>$hasil[0]</td>
						<td>$hasil[1]</td>
						<td>$hasil[2]</td>
						<td>$hasil[3]</td>
						<td>$hasil[4]</td>
						<td>$hasil[5]</td>
						<td>$hasil[6]</td>
						<td>$hasil[7]</td>
						<td><a href='ticketv2ubahstaff.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='ticketv2hapusstaff.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";
				}
				
			?>
            
        </table>
    </div>
</body>
</html>