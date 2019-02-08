<?php
	include "koneksi.php";
	//include "staffv2.php";
	$kode = $_GET['kode'];
	$hapus = mysqli_query($konek,"delete from costumer where costumerid='$kode'");
	if($hapus)
	{
		echo
		"<script>
			alert('Data Sudah Di Hapus');
			location.href='customerv2.php';
		</script>"
		;
	}
	else
	{
		echo"<script>
			alert('Data GAGAL Di Hapus');
			location.href='customerv2.php';
		</script>";
	}
?>