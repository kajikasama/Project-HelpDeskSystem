<?php
	include "koneksi.php";
	//include "staffv2.php";
	$kode = $_GET['kode'];
	$hapus = mysqli_query($konek,"delete from admin where adminid='$kode'");
	if($hapus)
	{
		echo
		"<script>
			alert('Data Berhasil Di Hapus');
			location.href='admin.php';
		</script>"
		;
	}
	else
	{
		echo"<script>
			alert('Data Admin GAGAL Di Hapus');
			location.href='admin.php';
		</script>";
	}
?>