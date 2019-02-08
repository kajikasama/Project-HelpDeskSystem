<?php
	include "koneksi.php";
	$nama1 = $_POST['nama'];
	$simpan = mysqli_query($konek,"insert into staffcategory values ('','$nama1')");
	if($simpan)
	{
		echo
		"
		<script>alert('Data Telah Di Simpan');
			location.href='staffcategory.php';
		</script>
		";
	}
	else
	{
		echo"tidak";
	}
?>
