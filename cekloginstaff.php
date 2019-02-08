<?php
	include "koneksi.php";
	$userinput = $_POST['user'];
	$passinput = $_POST['pass'];
	$cek = mysqli_query
	($konek, "select * from staff where staffusername='$userinput'");
	$hasil = mysqli_fetch_array($cek);
	$userdb = $hasil[4];
	$passdb = $hasil[5];
	if(($userinput == $userdb) && ($passinput == $passdb))
	{	
		session_start();
		$_SESSION['user1'] = $userinput;
		echo 
		"<script>
			location.href='index2.php'
		</script>
		";
	}
	else
	{
		echo
		"
			<script>
			location.href='loginstaff.php'
		</script>
		";
	}
	
?>