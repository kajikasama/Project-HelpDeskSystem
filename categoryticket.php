 <?php
    session_start();
    if(empty($_SESSION['user4']))
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
	<title>Category Ticket :: Help Desk System</title>
	<link rel="stylesheet" type="text/css" href="categoryticket.css">
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
	<a href="Home.php">Home</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="" class="fa fa-facebook"></a>
	<a href="" class="fa fa-instagram"></a>
    <a href="" class="fa fa-twitter"></a>
    <a href="" class="fa fa-steam"></a>
</div>
<div class="sidenav">
	<a href="admin.php">Admin</a>
	<a href="dashboard.php">Dasboard</a>
	<a href="staffv2.php">Staff</a>
	<a href="customerv2.php">Customer</a>
	<a href="ticketv2.php">Ticket</a>
    <a href=categoryticket.php>Ticket Category</a>
	<a href="loginadmin.php">LogOut</a>
</div>
	<div class="typographic">
    	<form method="post" action="categorysimpan.php">
        <div class="form-group">
    	<label for="exampleInputEmail1">Nama Category Ticket</label>
    	<input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Staff ..." required>
  		</div>
       
        <div class="form-group">
        <input type="submit" value="Register" class="" />
        <input type="reset" value="Reset" class="" />
        </div>
    </div>   
</form>
	<div class="typographic2">
    	<h2 style="color:white">Table Category Ticket</h2>
    	<table align="center" class="table table-striped table-hover">
        	<tr>
            	<th>Ticket Category Id</th>
                <th>Ticket Category Nama </th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
				//include "simpanstaff.php";
				include "koneksi.php";
				$sql = mysqli_query($konek,"select * from ticketcategory");
				while ($hasil = mysqli_fetch_array($sql))
				{
					echo
					"
					<tr class='active'>
						<td>$hasil[0]</td>
						<td>$hasil[1]</td>
						<td><a href='categoryticketubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
						<td><a href='categorytickethapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
					</tr>
					";
				}
				
			?>
            
        </table>
    </div>
    <div class="tipo">
    	<h1>CATEGORY TICKET MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>