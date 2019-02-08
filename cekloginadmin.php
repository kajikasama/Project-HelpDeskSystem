<?php
	include "koneksi.php";
	$userinput = $_POST['user2'];
	$passinput = $_POST['pass2'];
	$cek = mysqli_query
	($konek, "select * from admin where adminusername='$userinput'");
	$hasil = mysqli_fetch_array($cek);
	$userdb = $hasil[4];
	$passdb = $hasil[5];
	if(($userinput == $userdb) && ($passinput == $passdb))
	{
		session_start();
		$_SESSION['user2'] = $userinput;
		echo 
		"<script>
			location.href='index.php'
		</script>
		";
	}
	else
	{
		echo
		"<script>
			alert('Cek Username atau Password');
			location.href='loginadmin.php';
		</script>";
	}
	
?>