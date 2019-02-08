 <?php
    session_start();
    if(empty($_SESSION['user4']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Staff Dulu');
            location.href='logincustomer.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard :: Customer</title>
	<link rel="stylesheet" type="text/css" href="dashboardcustomer.css">
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
	<a href="index3.php">Home</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-steam"></a>
</div>
<div class="sidenav">
	 <?php $nama = $_SESSION['user4']; 
            echo"<a name='c1' href='userprofile.php?kode=$nama' >Welcome User $nama</a>" ?>
	<a name="dashboard" href="dashboardcustomer.php">Dashboard</a>
	<a name="customer" href="customerv2customer.php">Customer</a>
	<a name="ticket" href="ticketv2customer.php">Ticket</a>
	<a name="quit" href="logoutcustomer.php">Logout</a>	
</div>
	<div class="tipo">
    	<h1>DASHBOARD HELP DESK SYSTEM</h1>
    </div>
	<div class="typographic">
    	<h2 style="color:white">Table Admin</h2>
    	<table  class="table table-striped table-hover">
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
					$hasil[5] = md5($hasil[5]);
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
					$hasil[5] = md5($hasil[5]);
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
                
            </tr>
            <?php
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from costumer");
				while ($hasil = mysqli_fetch_array($sql))
				{
					$hasil[6] = md5($hasil[6]);
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
						
					</tr>
					";
				}
				
			?>
            
        </table>
    
</body>
</html>