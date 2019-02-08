<?php
    session_start();
    if(empty($_SESSION['user1']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Customrt Dulu');
            location.href='logincustomer.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket :: Help Desk System</title>
	<link rel="stylesheet" type="text/css" href="ticketv2.css">
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
    <abbr style="text-decoration: none;" title="dashboard"><a name="dashboard" href="dashboardstaff.php">Dashboard</a></abbr>
    <abbr style="text-decoration: none;" title="staff"><a name="staff" href="staffv2staff.php">Staff</a></abbr>
    <abbr style="text-decoration: none;" title="customer"><a name="customer" href="customerv2staff.php">Customer</a></abbr>
    <abbr style="text-decoration: none;" title="ticket"><a name="ticket" href="ticketv2staff.php">Ticket</a></abbr>
    <abbr title="Keluar Dari Halaman Ini"><a name="quit" href="logoutstaff.php">Logout</a></abbr>
</div>
		<div class="typographic2">
    	<?php $nama = $_SESSION['user1']; 
        echo"<form method='post' action='ticketv2simpanstaff.php?kode=$nama'>"
            ?>
        <div class="form-group">
    	<label for="exampleInputEmail1">Id Customer Ticket</label>
    	<input name="idcustomer" type="text" class="form-control" id="exampleInputEmail1" value="" required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Katagori Ticket</label>
    	<select class="form-control" name="kategori">
        	<option value="VIP">VIP</option>
            <option value="3D">3D</option>
            <option selected value="2D">2D</option>
        </select>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Judul Ticket</label>
    	<select class="form-control" name="judul">
        	<?php
                include "koneksi.php";
                $sql = mysqli_query ($konek, "select * from ticketcategory");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    echo"<option value='$hasil[1]'>$hasil[1]</  option>"; 
                    if ($hasil[1]) 
                    {
                        $_GET['kategori']=$hasil[0];      
                      }  
                }
            ?>
        </select>
  		</div>
        <div class="form-group">
    	<label  for="exampleInputEmail1">Keterangan Ticket</label>
    	<input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan Ticket ..." required>
  		</div>
        <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Ticket</label>
        <input name="tanggal" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Ticket ..." required>
        </div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Status Ticket</label>
    	<select name="statuss" class="form-control">
        	<option value="terjual">Terjual</option>
            <option value="ditunggu">Di Tunggu </option>
        </select>
  		</div>
         <!--<div class="form-group">
            <label for="exampleInputEmail1">Id Staff Ticket</label>
        <input name="idstaff" type="text" class="form-control" id="exampleInputEmail1" placeholder="Id Staff Ticket ..." required>
        </div>-->
        <div class="form-group">
    	<label  for="exampleInputEmail1">Ticket Reply</label>
    	<input name="reply" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ticket Reply ..." required>
  		</div>
  		 <div class="form-group">
        <input type="submit" value="Register" class="" />
        <input type="reset" value="Reset" class="" />
        </div>
       
</form>
    </div>
	<div class="typographic">
    	<h2 style="color:white">Table Ticket</h2>
    	<table align="center" class="table table-bordered table-hover table-striped">
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
				//include "ticketv2simpan.php";
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from ticket");
				while ($hasil = mysqli_fetch_array($sql))
				{
                     if($hasil[7]=="")
                        $hasil[7] = "-";
                    if($hasil[8]=="")
                        $hasil[8] = "-";
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
						<td>$hasil[8]</td>
						<td><a href='ticketv2ubahstaff.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='ticketv2hapusstaff.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";
				}
				
			?>
            
        </table>
    </div>
    <div class="tipo">
    	<h1>TICKET MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>