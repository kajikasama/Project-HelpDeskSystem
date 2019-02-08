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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styleticket.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
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
  <h1>Tickets</h1>
  <p></p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  
</div>
		<table class="table table-hover table-striped">
        <tr>
        	<td>Ticket Id</td>
            <td>Ticket Id Costumer</td>
            <td>Ticket Kategori</td>
            <td>Ticket Judul</td>
            <td>Ticket Keterangan</td>
            <td>Ticket Tanggal</td>
            <td>Ticket Status</td>
            <td>Ticket Id Staff</td>
            <td>Ticket Reply</td>
        </tr>
        <?php
			include "koneksi.php";
			$sql = mysqli_query ($konek, "select * from ticket");
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
					<td>$hasil[8]</td>
				<tr>";
			}
		?>
	</table>
    </div>
  </body>
</html>