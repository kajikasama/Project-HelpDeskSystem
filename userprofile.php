<?php
session_start();
if(empty($_SESSION['user4']))
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
        <title>User :: Info</title>
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
            <a href="index3.php">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-steam"></a>
        </div>
        <div class="sidenav">
            <?php $nama = $_SESSION['user4']; 
            echo"<a name='c1' href='userprofile.php?kode=$nama' >Welcome User $nama</a>" ?>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="dashboard" href="dashboardcustomer.php">Dashboard</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="customer" href="customerv2customer.php">Customer</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticket" href="ticketv2customer.php">Ticket</a></abbr>
            <abbr title="Keluar Dari Halaman Ini"><a name="quit" href="logoutcustomer.php">Logout</a></abbr>
        </div>
        <div class="typographic">
             <?php 
                include "koneksi.php";
                $kode = $_GET['kode'];
                $sql = mysqli_query($konek,"select * from costumer where costumerusername='$kode'");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    $hasil[6]=md5($hasil[6]);
                    $id1 = $hasil[0];
                    $nama1 = $hasil[1];
                    $email1 = $hasil[2];
                    $alamat1 = $hasil[3];
                    $telp1 = $hasil[4];
                    $user1 =  $hasil[5];
                    $pass1 = $hasil[6];
                    $tanggal1 = $hasil[7];

                }
                echo "<p class='c2'>Id Customer : $id1</p><br>
                      <p class='c2'>Nama Customer : $nama1</p><br>
                      <p class='c2'>Email Customer : $email1</p><br>
                      <p class='c2'>Alamat Customer : $alamat1</p><br>
                      <p class='c2'>No Telepon Customer : $telp1</p><br>
                      <p class='c2'>Username Customer : $user1</p><br>
                      <p class='c2'>Password Customer : $pass1</p><br>
                      <p class='c2'>Tanggal Daftar Customer : $tanggal1</p><br>
                    ";
                
            ?>
            <form action="logoutstaff2.php">
                <input type="submit" name="submit" value="Logout">
            </form>
        </div>
        <div class="tipo">
            <h1>CUSTOMER PROFILE </h1>
        </div>
    </body>
</html>