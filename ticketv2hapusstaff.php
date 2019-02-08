<?php
	include "koneksi.php";
	//include "ticketv2.php";
	$kode = $_GET['kode'];
	$hapus = mysqli_query($konek,"delete from ticket where ticketid='$kode'");
	if($hapus)
	{
		echo
		"<script>
			alert('Data Sudah Di Hapus');
			location.href='ticketv2staff.php';
		</script>"
		;
	}
	else
	{
		echo"<script>
			alert('Data GAGAL Di Hapus');
			location.href='ticketv2staff.php';
		</script>";
	}
?>