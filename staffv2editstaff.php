<?php
	include "koneksi.php";
	$id1 = $_POST['id'];
	$nama1 = $_POST['nama'];
	$email1 = $_POST['email'];
	$alamat1 = $_POST['alamat'];
	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$idkat1 = $_POST['idkat'];
	$edit = mysqli_query($konek," update staff set staffid='$id1',staffnama='$nama1',staffemail='$email1',staffalamat='$alamat1',staffusername='$user1',staffpassword='$pass1',staffidstaffcatagory='$idkat1' where staffid='$id1'");
	if($edit)
	{
		echo
		"
			<script>alert('Data Berhasil Di Edit'); location.href='staffv2staff.php'</script>
		";
	}
	else
	{
		echo
		"tidak";
	}
?>