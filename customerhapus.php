<?php
	
	include "koneksi.php";
	//include "customer.php";
	$kode = $_GET['kode'];
	$hapus = mysqli_query($konek,"delete from costumer where costumerid='$kode'");
	if($hapus)
	{
		echo
		"<script>
			alert('Data Sudah Di Hapus');
			location.href='customer.php';
		</script>"
		;
	}
	else
	{
		echo"<script>
			alert('Data Sudah Di Hapus');
			location.href='customer.php';
		</script>";
	}
?>