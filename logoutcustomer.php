<?php
	session_start();
	session_destroy();
	echo 
	"
	<script>
		alert('Terima Kasih');
		location.href='logincustomer.php';
	</script>
	";
?>