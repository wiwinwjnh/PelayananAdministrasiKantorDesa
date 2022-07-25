<?php
include "../conn/koneksi.php";
$tKode = $_GET['Kode'];
$query = "DELETE FROM tbl_penduduk WHERE NIK = '$tKode'";
mysqli_query($connection,$query);
?>
<script type="text/javascript">
	window.location = "FrmHome.php?page=DaftarPenduduk.php";
</script>