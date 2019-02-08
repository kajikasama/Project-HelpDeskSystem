<?php
	include "koneksi.php";
	$nama1 = $_POST['nama'];
	$email1 = $_POST['email'];
	$alamat1 = $_POST['alamat'];
	$telepon1 = $_POST['telepon'];
	$user1 = $_POST['user'];
	$pass1 = $_POST['pass'];
	$tanggal1 = $_POST['tanggal'];
	$simpan = mysqli_query($konek,"insert into costumer values ('','$nama1','$email1','$alamat1','$telepon1','$user1','$pass1','$tanggal1')");
	if($simpan)
	{
		echo"<i class='fa fa-spinner' aria-hidden='true'></i>";
		
		echo
		"
<script>alert('Data Telah Di Simpan');
	location.href='customerv2staff.php';
</script>
";
}
else
{
echo"tidak";
}
?>