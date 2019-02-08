<?php
session_start();
if(empty($_SESSION['user2']))
{
echo
"
<script>
alert('Anda Wajib Login Admin / Staff Dulu');
location.href='logoutadmin.php';
</script>
";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin :: Info</title>
        <link rel="stylesheet" type="text/css" href="adminprofile.css">
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
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-steam"></a>
        </div>
        <div class="sidenav">
            <?php $nama = $_SESSION['user2']; 
            echo"<a name='c1' href='adminprofile.php?kode=$nama' >Welcome Admin $nama</a>" ?>
            <abbr style="cursor: pointer;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="admin" href="admin.php" >Admin</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="dashboard" href="dashboard.php">Dashboard</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="staff" href="staffv2.php">Staff</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="staffcategory" href="staffcategory.php">Staff Category</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="customer" href="customerv2.php">Customer</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticket" href="ticketv2.php">Ticket</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticketkategory" href="ticketkategory.php">Ticket Category</a></abbr>
            <abbr title="Keluar Dari Halaman Ini"><a name="quit" href="logoutadmin.php">Logout</a></abbr>
        </div>
        <div class="typographic">
             <?php 
                include "koneksi.php";
                $kode = $_GET['kode'];
                $sql = mysqli_query($konek,"select * from admin where adminusername='$kode'");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    $hasil[5]=md5($hasil[5]);
                    $id1 = $hasil[0];
                    $nama1 = $hasil[1];
                    $email1 = $hasil[2];
                    $alamat1 = $hasil[3];
                    $user1 =  $hasil[4];
                    $pass1 = $hasil[5];

                }
                echo "<p class='c2'>Id Admin : $id1</p><br>
                      <p class='c2'>Nama Admin : $nama1</p><br>
                      <p class='c2'>Email Admin : $email1</p><br>
                      <p class='c2'>Alamat Admin : $alamat1</p><br>
                      <p class='c2'>Username Admin : $user1</p><br>
                      <p class='c2'>Password Admin : $pass1</p><br>
                    ";
                
            ?>
            <form action="logoutadmin.php">
                <input type="submit" name="submit" value="Logout">
            </form>
        </div>
        <div class="tipo">
            <h1>ADMIN MANAGEMENT SYSTEM</h1>
        </div>
    </body>
</html>