<?php
	include "koneksi.php";
	//include "staffv2.php";
	$kode = $_GET['kode'];
	$hapus = mysqli_query($konek,"delete from staffcategory where staffcategoryid='$kode'");
	if($hapus)
	{
		echo
		"<script>
			alert('Data Sudah Di Hapus');
			location.href='staffcategory.php';
		</script>"
		;
	}
	else
	{
		echo"<script>
			alert('Data GAGAL Di Hapus');
			location.href='staffcategory.php';
		</script>";
	}
?>