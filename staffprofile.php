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
        <title>Staff :: Info</title>
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
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="dashboard" href="dashboardstaff.php">Dashboard</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="staff" href="staffv2staff.php">Staff</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="customer" href="customerv2staff.php">Customer</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticket" href="ticketv2staff.php">Ticket</a></abbr>
            <abbr title="Keluar Dari Halaman Ini"><a name="" href="logoutstaff.php">Logout</a></abbr>
        </div>
        <div class="typographic">
             <?php 
                include "koneksi.php";
                $kode = $_GET['kode'];
                $sql = mysqli_query($konek,"select * from staff where staffusername='$kode'");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    $hasil[5]=md5($hasil[5]);
                    $id1 = $hasil[0];
                    $nama1 = $hasil[1];
                    $email1 = $hasil[2];
                    $alamat1 = $hasil[3];
                    $user1 =  $hasil[4];
                    $pass1 = $hasil[5];
                    $cat1 = $hasil[6];

                }
                echo "<p class='c2'>Id Staff : $id1</p><br>
                      <p class='c2'>Nama Staff : $nama1</p><br>
                      <p class='c2'>Email Staff : $email1</p><br>
                      <p class='c2'>Alamat Staff : $alamat1</p><br>
                      <p class='c2'>Username Staff : $user1</p><br>
                      <p class='c2'>Password Staff : $pass1</p><br>
                      <p class='c2'>Id Kategori Staff : $cat1</p><br>
                    ";
                
            ?>
            <form action="logoutstaff2.php">
                <input type="submit" name="submit" value="Logout">
            </form>
        </div>
        <div class="tipo">
            <h1>ADMIN MANAGEMENT SYSTEM</h1>
        </div>
    </body>
</html>