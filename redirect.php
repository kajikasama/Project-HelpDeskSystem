<?php
	include "koneksi.php"
	$sql = mysqli_query($konek,"select * from admin");
		while ($hasil = mysqli_fetch_array($sql))
			{
				echo"header('adminubah.php?kode=$hasil[0]')";
			}	
?>