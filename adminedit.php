<?php
	include "koneksi.php";
	$id1 = $_POST['id'];
	$nama1 = $_POST['nama'];
	$email1 = $_POST['email'];
	$alamat1 = $_POST['alamat'];
	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$edit = mysqli_query($konek," update admin set adminid='$id1',adminnama='$nama1',adminemail='$email1',adminalamat='$alamat1',adminusername='$user1',adminpassword='$pass1' where adminid='$id1'");
	if($edit)
	{
		echo
		"
			<script>alert('Data Berhasil Di Edit'); location.href='admin.php'</script>
		";
	}
	else
	{
		echo
		"tidak";
	}
?>