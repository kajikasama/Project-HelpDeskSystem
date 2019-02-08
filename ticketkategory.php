<?php
session_start();
if(empty($_SESSION['user2']))
{
echo
"
<script>
alert('Anda Wajib Login Customrt Dulu');
location.href='logoutadmin.php';
</script>
";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ticket :: Help Desk System</title>
        <link rel="stylesheet" type="text/css" href="ticketkategory.css">
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
        <div class="typographic2">
            <form method="post" action="ticketcategorysimpan.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Kategori Ticket (Nama Film)</label>
                    <input name="idcustomer" type="text" class="form-control" id="exampleInputEmail1" value="" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" class="" />
                    <input type="reset" value="Reset" class="" />
                </div>
            </form>
            
        </div>
        <div class="typographic">
            <h2 style="color:white">Table Ticket</h2>
            <table align="center" class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Id Ticket Category</th>
                    <th>Id Customer Ticket Category</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
                //include "ticketv2simpan.php";
                include "koneksi.php";
                $sql = mysqli_query($konek,"select * from ticketcategory");
                while ($hasil = mysqli_fetch_array($sql))
                {
                echo
                "
                <tr class='active'>
                    <td>$hasil[0]</td>
                    <td>$hasil[1]</td>
                    
                    <td><a href='ticketcategoryubah.php?kode=$hasil[0]' class='glyphicon glyphicon-pencil'></a></td>
                    <td><a href='ticketcategoryhapus.php?kode=$hasil[0]' class='glyphicon glyphicon-trash'></a></td>
                </tr>
                ";
                }
                
                ?>
                
            </table>
        </div>
        <div class="tipo">
            <h1>TICKET MANAGEMENT SYSTEM</h1>
        </div>
    </body>
</html>