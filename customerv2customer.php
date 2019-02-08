<?php
session_start();
if(empty($_SESSION['user4']))
{
echo
"
<script>
alert('Anda Wajib Login Dulu');
location.href='logincustomer.php';
</script>
";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>customerv2</title>
        <link rel="stylesheet" type="text/css" href="customerv2customer.css">
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
            <a href="https://www.facebook.com/banana.garuda" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="https://twitter.com/KajikajiaSama" class="fa fa-twitter"></a>
            <a href="http://steamcommunity.com/id/KajikaSama/" class="fa fa-steam"></a>
        </div>
        <div class="sidenav">
             <?php $nama = $_SESSION['user4']; 
            echo"<a name='c1' href='userprofile.php?kode=$nama' >Welcome User $nama</a>" ?>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a href="dashboardcustomer.php">Dashboard</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="customer" href="customerv2customer.php">Customer</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticket" href="ticketv2customer.php">Ticket</a></abbr>
            <abbr title="Keluar Dari Halaman Ini"><a name="quit" href="logoutcustomer.php">Logout</a></abbr>
        </div>
        <!--<div class="typographic2">
            <form method="post" action="customerv2simpan.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Customer</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Customer ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Customer</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Customer ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Customer</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Customer ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon Customer</label>
                    <input name="telepon" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telepon Customer ..." required>
                </div>
                <div class="form-group">
                    <label  for="exampleInputEmail1">Username Customer</label>
                    <input name="user" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username Customer ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password Customer</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputEmail1" placeholder="Password Customer ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Customer</label>
                    <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Customer ..." required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" />
                    <input type="reset" value="Reset" />
                </div> 
                
            </form>
        </div>-->
        <div class="typographic">
            <h2 style="color:white">Table Customer</h2>
            <table align="center" class="table table-striped table-hover">
                <tr>
                    <th>Id Customer</th>
                    <th>Nama Customer</th>
                    <th>Email Customer</th>
                    <th>Alamat Customer</th>
                    <th>Telepon Customer</th>
                    <th>Username Customer</th>
                    <th>Password Customer</th>
                    <th>Tanggal Daftar Customer</th>
                    <!-- <th colspan="2">Actions</th> -->
                </tr>
                <?php
                include "koneksi.php";
                $sql = mysqli_query($konek,"select * from costumer");
                while ($hasil = mysqli_fetch_array($sql))
                {
                    $hasil[6] = md5($hasil[6]);
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
                    
                </tr>
                ";
                }
                
                ?>
                
            </table>
        </div>
        <div class="tipo">
            <h1>CUSTOMER MANAGEMENT SYSTEM</h1>
        </div>
    </body>
</html>