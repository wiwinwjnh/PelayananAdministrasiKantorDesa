<?php  
include "../conn/koneksi.php";
$vtanggal_Pengajuan=$_POST['ttanggal_pengajuan'];
$vnik=$_POST['tnik'];
$vnama=$_POST['tnama'];
$vjenis_kelamin=$_POST['tjenis_kelamin'];
$vtempat_lahir=$_POST['ttempat_lahir'];
$vtanggal_lahir=$_POST['ttanggal_lahir'];
$vagama=$_POST['tagama'];
$vpendidikan=$_POST['tpendidikan'];
$vpekerjaan=$_POST['tpekerjaan'];
$vstatus_pernikahan=$_POST['tstatus_pernikahan'];
$vstatus_keluarga=$_POST['tstatus_keluarga'];
$vkewarganegaraan=$_POST['tkewarganegaraan'];
$vgol_darah=$_POST['tgol_darah'];
$vayah=$_POST['tayah'];
$vibu=$_POST['tibu'];
$vstatus=$_POST['tstatus'];
$vcatat=$_POST['tcatat'];

$query=mysqli_query($connection,"UPDATE tbl_kk SET status='$vstatus', catat='$vcatat'
	WHERE nik='$vnik'" )or die (mysqli_error());
if($query) {
?>
<script type="text/javascript">
	window.location = "FrmHome.php?page=DaftarKartuKeluarga.php";
</script>
<?php
}
?>