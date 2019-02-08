<?php
    include "koneksi.php";
    $idcustomer1 = $_POST['idcustomer'];
    $simpan = mysqli_query($konek,"insert into ticketcategory values ('','$idcustomer1')");
    if($simpan)
    {
        echo
        "
        <script>alert('Data Telah Di Simpan');
            location.href='ticketkategory.php';
        </script>
        ";
    }
    else
    {
        echo"tidak";
    }
?>
