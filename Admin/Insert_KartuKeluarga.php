<?php  
include "../conn/koneksi.php";
$vusername=$_POST['tusername'];
$vtanggal_pengajuan=$_POST['ttanggal_pengajuan'];
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
if ($vnik<>$vnama) {
?>
<?php
	$query=mysqli_query($connection, "INSERT INTO tbl_kk(username, tanggal_pengajuan, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pendidikan, pekerjaan, status_pernikahan, status_keluarga, kewarganegaraan, gol_darah, ayah, ibu, status, catat) VALUES ('$vusername', '$vtanggal_pengajuan', '$vnik','$vnama','$vjenis_kelamin','$vtempat_lahir','$vtanggal_lahir','$vagama','$vpendidikan','$vpekerjaan','$vstatus_pernikahan','$vstatus_keluarga','$vkewarganegaraan','$vgol_darah','$vayah','$vibu','$vstatus','$vcatat')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=DaftarKartuKeluarga.php'</script>
		<?php
	}
}
?>