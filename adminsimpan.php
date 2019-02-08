<?php
	include "koneksi.php";
	$nama1 = $_POST['nama'];
	$email1 = $_POST['email'];
	$alamat1 = $_POST['alamat'];
	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$simpan = mysqli_query($konek,"insert into admin values ('','$nama1','$email1','$alamat1','$user1','$pass1')");
	if($simpan)
	{
		echo
		"
		<script>alert('Data Telah Di Simpan');
			location.href='admin.php';
		</script>
		";
	}
	else
	{
		echo"tidak";
	}
?>
