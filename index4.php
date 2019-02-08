<?php
session_start();
if(empty($_SESSION))
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
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="index2.css">
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
			<a name="c1" href="#">Wlecome
				<?php  if(empty($_SESSION['user4']))
				{
					echo($_SESSION['user1']);
				}
				else
				{
					echo($_SESSION['user4']);
				}
			?></a>
			<a href="admin.php">Admin</a>
			<a href="dashboard.php">Dasboard</a>
			<a href="staffv2.php">Staff</a>
			<a href="customerv2.php">Customer</a>
			<a href="ticketv2.php">Ticket</a>
			<a href="logoutstaff.php">Logout</a>
		</div>
		<div class="tipo">
			<h1>HELP DESK SYSTEM</h1>
		</div>
		<div class="typographic">
			<div class="row">
				<div class="col-sm-6 col-md-5">
					<div class="thumbnail" name="c1">
						<img src="tables-512.png" alt="asdasdw">
						<div class="caption">
							<h3>DashBoard</h3>
							<p>Menampilkan Keseluruhan Data Yang Ada Dalam Bentuk Tabel</p>
							<p><a href="dashboard.php" class="btn btn-primary" role="button">Select</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail" name="c2">
							<img src="user_login-512.png" alt="asdasd">
							<div class="caption">
								<h3>Admin</h3>
								<p>Menampilkan Semua Data-Data Admin Dalam Bentuk Tabel </p>
								<p><a href="admin.php" class="btn btn-primary" role="button">Select</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail" name="c3">
							<img src="staff.gif" alt="sddf">
							<div class="caption">
								<h3>Staff</h3>
								<p>Menampilkan Semua Data-Data Staff Dalam Bentuk Tabel</p>
								<p><a href="staffv2.php" class="btn btn-primary" role="button">Select</a></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail" name="c4">
								<img src="customer.png" alt="">
								<div class="caption">
									<h3>Customer</h3>
									<p>Menampilkan Semua Data-Data Customer Dalam Bentuk Tabel</p>
									<p><a href="customerv2.php" class="btn btn-primary" role="button">Select</a></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail" name="c5">
									<img src="ticket.png" alt="">
									<div class="caption">
										<h3>Ticket</h3>
										<p>Menampilkan Semua Data-Data Ticket Dalam Bentuk Tabel</p>
										<p><a href="ticketv2.php" class="btn btn-primary" role="button">Select</a></p>
									</div>
								</div>
							</div>
						</div>
					</body>
				</html>