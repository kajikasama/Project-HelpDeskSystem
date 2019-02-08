<?php
    session_start();
    if(empty($_SESSION['user2']))
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
<html>
<head>
    <title>ticketv2</title>
    <link rel="stylesheet" type="text/css" href="ticketv2ubah.css">
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
<?php
    include "koneksi.php";
    //include "Customerv2.php";
    //include "simpanCustomer.php";
    //include "Customerv2edit.php";
    $kode = $_GET['kode'];
    $sql = mysqli_query($konek,"select * from ticket where ticketid='$kode'");
    while($hasil = mysqli_fetch_array($sql))
    {
        $id1 = $hasil[0];
        $idcustomer1 = $hasil[1];
        $category1 = $hasil[2];
        $judul1 = $hasil[3];
        $keterangan1 = $hasil[4];
        $tanggal1 = $hasil[5];
        $status1 = $hasil[6];
        $idstaff1 = $hasil[7];
        $reply1 = $hasil[8];
    }
?>

    
<div class="topnav">
    <a href="dashboard.php">Home</a>
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
      <a name="quit" href="logoutstaff.php">Logout</a>
</div>
        <div class="typographic2">
        <form method="post" action="ticketv2edit.php">
        <div class="form-group">
        <label for="exampleInputEmail1">Id Ticket</label>
        <input readonly name="idticket" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $id1 ?>" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Id Customer Ticket</label>
        <input name="idcustomer" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $idcustomer1 ?>" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Katagori Ticket</label>
        <select class="form-control" name="kategori">
            <?php
                if ($category1 == "VIP") 
                {
                    echo"<option selected value='VIP'>VIP</option>
                         <option value='3D'>3D</option>
                         <option value='2D'>2D</option>
                    ";
                }
                elseif ($category1 == "3D") 
                {
                     echo"<option value='VIP'>VIP</option>
                         <option selected value='3D'>3D</option>
                         <option value='2D'>2D</option>
                    ";
                }
                else
                {
                    echo"<option value='VIP'>VIP</option>
                         <option value='3D'>3D</option>
                         <option selected value='2D'>2D</option>
                    ";
                }
            ?>
            
            
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Judul Ticket</label>
        <select class="form-control" name="judul">
            <?php
                include "koneksi.php";
                {
                    echo"<option readonly value='$judul1'>$judul1</option>"; 
                }
            ?>
        </select>
        </div>
        <div class="form-group">
        <label  for="exampleInputEmail1">Keterangan Ticket</label>
        <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $keterangan1 ?>" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Ticket</label>
        <input name="tanggal" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $tanggal1 ?>" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status Ticket</label>
        <select name="statuss" class="form-control">
            <option value="terjual">Terjual</option>
            <option value="ditunggu">Di Tunggu </option>
        </select>
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Id Staff Ticket</label>
        <input name="idstaff" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $idstaff1 ?>" required>
        </div>
        <div class="form-group">
        <label  for="exampleInputEmail1">Ticket Reply</label>
        <input name="reply" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $reply1 ?>" required>
        </div>
         <div class="form-group">
        <input type="submit" value="Update" class="" />
        <a href="ticketv2.php">Cancel</a>
        </div>
       
</form>
    </div>
    <div class="tipo">
        <h1>UPDATE TICKET MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>