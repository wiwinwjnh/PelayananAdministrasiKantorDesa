<?php
include "../conn/koneksi.php";
$vusername=$_POST['tusername'];
$vpassword=$_POST['tpassword'];
$vkpassword=$_POST['tkpassword'];
$vstatus=$_POST['tstatus'];
if ($vpassword<>$vkpassword) {
?>
<script type="text/javascript">
	var answer = confirm("Input Password dan Konfirmasi Password tidak sama !, Mau diulang ?")
	if (answer){
		window.location = "FrmHome.php?page=FrmEditDataUser.php&Kode=<?php echo $vnik?>";
	}else{
		window.location = "FrmHome.php?page=FrmDaftarUser.php";
	}
</script>
<?php
} else {
	$query=mysqli_query($connection,"UPDATE tbl_user SET username='$vusername', password='$vpassword', status='$vstatus'
		WHERE username='$vusername'")or die (mysqli_error());
		if($query) {
			?>
			<script language="JavaScript">
				document.location='FrmHome.php?page=FrmDaftarUser.php'</script>
		<?php
	}
}
?>