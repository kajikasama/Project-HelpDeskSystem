<?php
	include "koneksi.php";
	//include "customer.php";
	$nama = $_POST['namacustomer'];
	$email = $_POST['emailcustomer'];
	$alamat = $_POST['alamatcustomer'];
	$telepon = $_POST['teleponcustomer'];
	$user = $_POST['usernamecustomer'];
	$pass = $_POST['passwordcustomer'];
	$tanggal = $_POST['tanggaldaftarcustomer'];
	$simpan = mysqli_query($konek, "insert into costumer values ('','$nama','$email','$alamat','$telepon','$user','$pass','$tanggal')");
	if($simpan)
	{
		echo
		"
		<script>
		alert('Data Berhasil Di Simpan');
		location.href='customer.php';
		</script>
		"
		;
	}
	else
	{
		echo"<script>
		alert('Data Gagal Di Simpan');
		location.href='customer.php';
		</script>";
	}
?>