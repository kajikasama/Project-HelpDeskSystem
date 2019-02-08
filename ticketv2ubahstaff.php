<?php
    session_start();
    if(empty($_SESSION['user1']))
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
    <?php $nama = $_SESSION['user1']; 
            echo"<a name='c1' href='staffprofile.php?kode=$nama' >Welcome Staff $nama</a>" ?>
      <a name="dashboard" href="dashboardstaff.php">Dashboard</a>
      <a name="staff" href="staffv2staff.php">Staff</a>
      <a name="customer" href="customerv2staff.php">Customer</a>
      <a name="ticket" href="ticketv2staff.php">Ticket</a>
      <a name="quit" href="logoutstaff.php">Logout</a>
</div>
        <div class="typographic2">
        <?php $nama = $_SESSION['user1']; 
        echo"<form method='post' action='ticketv2editstaff.php?kode=$nama'>"
            ?>
        <div class="form-group">
        <label for="exampleInputEmail1">Id Ticket</label>
        <input readonly name="idticket" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $id1 ?>" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Id Customer Ticket</label>
        <input name="idcustomer" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $idcustomer1 ?>" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Katagori Ticket</label>
        <select class="form-control" name="kategori" >
            <option value="<?php echo $category1 ?>"><?php echo $category1 ?></option>
            <!--<option value="VIP">VIP</option>
            <option value="3D">3D</option>
            <option value="2D">2D</option> -->
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Judul Ticket</label>
        <select class="form-control" name="judul" >
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
        <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $tanggal1 ?>" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Status Ticket</label>
        <select readonly name="statuss" class="form-control">
            <?php echo"<option  value='$status1'>$status1</option>";
            ?>
        </select>
        </div>
        <div class="form-group">
        <label  for="exampleInputEmail1">Ticket Reply</label>
        <input name="reply" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $reply1 ?>" required>
        </div>
         <div class="form-group">
        <input type="submit" value="Update" class="" />
        <a href="ticketv2staff.php">Cancel</a>
        </div>
       
</form>
    </div>
    <div class="tipo">
        <h1>UPDATE TICKET MANAGEMENT SYSTEM</h1>
    </div>
</body>
</html>