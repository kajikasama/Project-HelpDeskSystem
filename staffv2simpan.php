<?php
	include "koneksi.php";
	$nama1 = $_POST['nama'];
	$email1 = $_POST['email'];
	$alamat1 = $_POST['alamat'];
	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$idkat1 = $_POST['idkat'];
	$simpan = mysqli_query($konek,"insert into staff values ('','$nama1','$email1','$alamat1','$user1','$pass1','$idkat1')");
	if($simpan)
	{
		echo
		"
		<script>alert('Data Telah Di Simpan');
			location.href='staffv2.php';
		</script>
		";
	}
	else
	{
		echo"tidak";
	}
?>
