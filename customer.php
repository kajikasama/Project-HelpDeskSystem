<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project1</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stylecustomer.css" rel="stylesheet">
  </head>
  <body>

    <script src="jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <div class="sat">	
        <ul class="nav nav-pills nav-stacked">
        	<ul class="nav nav-pills">
  				<li role="presentation" class="active"><a href="index.php">Home</a>
                </li>
                <li role="presentation"><a href="index.php">Dashboard</a></li>
                <li role="presentation"><a href="staff.php">Staff</a></li>
                <li role="presentation"><a href="customer.php">Customer</a></li>
                <li role="presentation"><a href="ticket.php">Ticket</a></li>
			</ul>
		</ul>
    </div>   
    <div class="container">
    	<div class="jumbotron">
        	<div class="kiri">
        		<h1>CUSTOMER</h1>
                <p></p>
                <p><a class="btn btn-primary btn-lg" href="#c4" role="button">Register</a></p>
            </div>
            
</div>
	<form method="post" action="customersimpan.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Customer</label>
    <input name="namacustomer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Customer ...">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Customer</label>
    <input name="emailcustomer" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Customer ...">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Customer</label>
    <input name="alamatcustomer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Customer ...">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telepon Customer</label>
    <input name="teleponcustomer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telepon Customer ...">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Customer Username</label>
    <input name="usernamecustomer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer Username ...">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Customer Password</label>
    <input name="passwordcustomer" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password ...">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Daftar Customer</label>
    <input name="tanggaldaftarcustomer" type="date" class="form-control" id="exampleInputEmail1">
  </div>
  <button type="submit" id="c4" class="btn btn-default">Submit</button>
</form>
	<table class="table table-hover">
        <tr class="active">
        	<td>Id Customer</td>
            <td>Nama Customer</td>
            <td>Email Customer</td>
            <td>Alamat Customer </td>
            <td>Telepon Customer </td>
            <td>Username Customer</td>
            <td>Password Customer</td>
            <td>Tanggal Daftar Customer</td>
            <td colspan="2">Action</td>
        </tr>
        <?php
			include "koneksi.php";
			$sql = mysqli_query ($konek, "select * from costumer");
			while ($hasil = mysqli_fetch_array($sql))
			{
				echo 
				"<tr>
					<td>$hasil[0]</td>
					<td>$hasil[1]</td>
					<td>$hasil[2]</td>
					<td>$hasil[3]</td>
					<td>$hasil[4]</td>
					<td>$hasil[5]</td>
					<td>$hasil[6]</td>
					<td>$hasil[7]</td>
					<td><a href='customerubah.php?$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
					<td><a href='customerhapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
				<tr>";
			}
		?>
	</table>
    </div>
  </body>
</html>