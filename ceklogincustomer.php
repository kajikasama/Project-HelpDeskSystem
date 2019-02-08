<?php
	include "koneksi.php";
	$user_input = $_POST['user4'];
	$pass_input = $_POST['pass4'];
	$cek = mysqli_query ($konek, "select * from costumer where costumerusername='$user_input'");
	$hasil = mysqli_fetch_array($cek);
	$user_db = $hasil[5];
	$pass_db = $hasil[6];
	if(($user_input == $user_db) && ($pass_input == $pass_db))
	{
		session_start();
		$_SESSION['user4'] = $user_input;
		echo 
		"<script>
			location.href='index3.php'
		</script>
		";
	}
	else
	{
		echo
		"<script>
			alert('Cek Username atau Password');
			location.href='logincustomer.php';
		</script>";
	}
	
?>