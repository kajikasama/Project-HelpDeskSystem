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
        <title>Admin :: Help Desk System</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
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
        <div class="sidenav"><?php $nama = $_SESSION['user2']; 
            echo"<a name='c1' href='adminprofile.php?kode=$nama' >Welcome Admin $nama</a>" ?>
            <abbr style="cursor: pointer;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="admin" href="admin.php" >Admin</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="dashboard" href="dashboard.php">Dashboard</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="staff" href="staffv2.php">Staff</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 2 Id (Admin & Staff)"><a name="staffcategory" href="staffcategory.php">Staff Category</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="customer" href="customerv2.php">Customer</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticket" href="ticketv2.php">Ticket</a></abbr>
            <abbr style="text-decoration: none;" title="Login Menggunakan 1 Id (User)"><a name="ticketkategory" href="ticketkategory.php">Ticket Category</a></abbr>
            <abbr title="Keluar Dari Halaman Ini"><a name="" href="logoutadmin.php">Logout</a></abbr>
        </div>
        <div class="typographic">
            <form method="post" action="adminsimpan.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Admin</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Staff ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Admin</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Staff ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Admin</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Staff ..." required>
                </div>
                <div class="form-group">
                    <label  for="exampleInputEmail1">Username Admin</label>
                    <input name="user" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username Staff ..." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password Admin</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputEmail1" placeholder="Password Staff ..." required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" class="" />
                    <input type="reset" value="Reset" class="" />
                </div>
            </div>
        </form>
        <div class="typographic2">
            <h2 style="color:white">Table Admin</h2>
            <table align="center" class="table table-striped table-hover">
                <tr>
                    <th>Admin Id</th>
                    <th>Admin Nama </th>
                    <th>Admin Email </th>
                    <th>Admin Alamat </th>
                    <th>Admin Username </th>
                    <th>Admin Password </th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
                //include "simpanstaff.php";
                include "koneksi.php";
                $sql = mysqli_query($konek,"select * from admin");
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
                    <td><a href='adminubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
                    <td><a href='adminhapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
                </tr>
                ";
                }
                
                ?>
                
            </table>
        </div>
        <div class="tipo">
            <h1>ADMIN MANAGEMENT SYSTEM</h1>
        </div>
    </body>
</html>