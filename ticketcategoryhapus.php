<?php
    include "koneksi.php";
    //include "ticketv2.php";
    $kode = $_GET['kode'];
    $hapus = mysqli_query($konek,"delete from ticketcategory where ticketcategoryid='$kode'");
    if($hapus)
    {
        echo
        "<script>
            alert('Data Sudah Di Hapus');
            location.href='ticketkategory.php';
        </script>"
        ;
    }
    else
    {
        echo"<script>
            alert('Data GAGAL Di Hapus');
            location.href='ticketv2.php';
        </script>";
    }
?>