<?php
	include "koneksi.php";
	//include "customerv2ubah.php";
	$id1 = $_POST['id'];
	$nama1 = $_POST['nama'];
	$email1 = $_POST['email'];
	$alamat1 = $_POST['alamat'];
	$telepon1 = $_POST['telepon'];
	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$tanggal1 = $_POST['tanggal'];
	$edit = mysqli_query($konek,"update costumer set costumerid='$id1',costumernama='$nama1',costumeremail='$email1',costumeralamat='$alamat1',costumertelepon='$telepon1',costumerusername='$user1',costumerpassword='$pass1',costumertanggaldaftar='$tanggal1' where costumerid='$id1'");
	if($edit)
	{
		echo
		"
			<script>alert('Data Berhasil Di Edit'); location.href='customerv2.php'</script>
		";
	}
	else
	{
		echo
		"tidak";
	}
?>