<?php  
include "../conn/koneksi.php";
$vusername=$_POST['tusername'];
$vpassword=$_POST['tpassword'];
$vkpassword=$_POST['tkpassword'];
$vstatus=$_POST['tstatus'];
if ($vpassword<>$vkpassword) {
?>
	<script type="text/javascript">
		var answer = confirm("Input Password dan Konfirmasi Password tidak sama!, Mau diulang ?")
		if (answer){
			window.location = "FrmHome.php?page=FrmEntryUser.php";
		}else{
			window.location ="FrmHome.php?page=FrmDaftarUser.php";
		}
	</script>
<?php  
}else{
	$query=mysqli_query($connection, "INSERT INTO tbl_user(username, password, status) VALUES ('$vusername','$vpassword','$vstatus')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=FrmDaftarUser.php'</script>
		<?php
	}
}
?>