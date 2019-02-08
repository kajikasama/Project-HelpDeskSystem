<?php
	include "koneksi.php";
	$kode = $_GET['kode'];
	$sql = mysqli_query($konek,"select * from costumer where costumerusername='$kode'");
	 while ($hasil = mysqli_fetch_array($sql))
                {
                    $id1 = $hasil[0];

                }
	$category1 = $_POST['kategori'];
	$judul1 = $_POST['judul'];
	$keterangan1 = $_POST['keterangan'];
	$tanggal1 = $_POST['tanggal'];
	$status1 = $_POST['statuss'];
	$idstaff1 = $_POST['idstaff'];
	$reply1 = $_POST['reply'];
	$simpan = mysqli_query($konek,"insert into ticket values ('','$id1','$category1','$judul1','$keterangan1','$tanggal1','$status1','$idstaff1','$reply1')");
	if($simpan)
	{
		echo
		"
		<script>alert('Data Telah Di Simpan');
			location.href='ticketv2.php';
		</script>
		";
	}
	else
	{
		echo"tidak";
	}
?>
