 <?php
    session_start();
    if(empty($_SESSION['user1']))
    {
        echo 
        "
        <script>
            alert('Anda Wajib Login Admin / Staff Dulu');
            location.href='loginstaff.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Staffv2</title>
	<link rel="stylesheet" type="text/css" href="staffv2staff.css">
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
    	<form method="post" action="staffv2simpanstaff.php">
        <div class="form-group">
    	<label for="exampleInputEmail1">Nama Staff</label>
    	<input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Staff ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Email Staff</label>
    	<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Staff ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Alamat Staff</label>
    	<input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Staff ..." required>
  		</div>
        <div class="form-group">
    	<label  for="exampleInputEmail1">Username Staff</label>
    	<input name="user" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username Staff ..." required>
  		</div>
        <div class="form-group">
    	<label for="exampleInputEmail1">Password Staff</label>
    	<input name="pass" type="password" class="form-control" id="exampleInputEmail1" placeholder="Password Staff ..." required>
  		</div>
  		<div class="form-group">
         <label for="exampleInputEmail1">Id Kategori Staff</label>
        	<select name="idkat" class="form-control">
            	<?php
                include "koneksi.php";
                $sql = mysqli_query ($konek, "select * from staffcategory");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    echo"<option value='$hasil[1]'>$hasil[1]</  option>"; 
                }
                ?>
            </select>
        </div>    
        <div class="form-group">
        <input type="submit" value="Register" class="" />
        <input type="reset" value="Reset" class="" />
        </div>
       
</form>
    </div>
	<div class="typographic">
    	<h2 style="color:white">Table </h2>
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
				//include "simpanstaff.php";
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
    </div>
    <div class="tipo">
    	<h1>STAFF MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>