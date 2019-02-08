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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="about2.css">
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
      <a name="index" href="index.php">Home</a>
      <a href="about.php">About</a>
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
      <h1>ABOUT</h1>
    </div>
    <div class="typographic">
      <p>help desk merupakan sistem manajemen untuk membantu menangani kebutuhan customer / user terkait dengan pertanyaan, pelayanan, support teknis, atau komplain terhadap produk &amp jasa tertentu dengan memanfaatkan sistem penomoran untuk memudahkan penelusuran terhadap tindakan penyelesaian yang dikoordinasi oleh suatu tim.</p>  
    </div>
          </body>
        </html>