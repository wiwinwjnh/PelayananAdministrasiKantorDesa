<?php
include "../conn/koneksi.php";
$tKode = $_GET['Kode'];
$query = "DELETE FROM tbl_user WHERE username = '$tKode'";
mysqli_query($connection,$query);
?>
<script type="text/javascript">
	window.location = "FrmHome.php?page=FrmDaftarUser.php";
</script>