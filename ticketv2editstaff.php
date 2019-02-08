<?php
	include "koneksi.php";
	$kode = $_GET['kode'];
	$sql = mysqli_query($konek,"select * from staff where staffusername='$kode'");
	while ($hasil1 = mysqli_fetch_array($sql))
	{
		$id2 = $hasil1[0];
	}
	$id1 = $_POST['idticket'];
	$idcustomer1 = $_POST['idcustomer'];
	$category1 = $_POST['kategori'];
	$judul1 = $_POST['judul'];
	$keterangan1 = $_POST['keterangan'];
	$tanggal1 = $_POST['tanggal'];
	$status1 = $_POST['statuss'];
	$idstaff1 = $id2;
	$reply1 = $_POST['reply'];
	$edit = mysqli_query($konek," update ticket set ticketid='$id1',ticketidcostumer='$idcustomer1',ticketidticketcategory='$category1',ticketjudul='$judul1',ticketketerangan='$keterangan1',tickettanggal='$tanggal1',ticketstatus='$status1',ticketidstaff='$idstaff1',ticketreply='$reply1' where ticketid='$id1'");
	if($edit)
	{
		echo
		"
			<script>alert('Data Berhasil Di Edit'); location.href='ticketv2staff.php'</script>
		";
	}
	else
	{
		echo
		"tidak";
	}
?>