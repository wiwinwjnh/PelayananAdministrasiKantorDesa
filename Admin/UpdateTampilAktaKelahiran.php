<?php  
include "../conn/koneksi.php";
$vtanggal_Pengajuan=$_POST['ttanggal_pengajuan'];
$vno_kk=$_POST['tno_kk'];
$vnama_kepala_keluarga=$_POST['tnama_kepala_keluarga'];
$vnama_ibu=$_POST['tnama_ibu'];
$vnama_bayi=$_POST['tnama_bayi'];
$vjenis_kelamin=$_POST['tjenis_kelamin'];
$vtempat_dilahirkan=$_POST['ttempat_dilahirkan'];
$vtempat_kelahiran=$_POST['ttempat_kelahiran'];
$vtanggal_lahir=$_POST['ttanggal_lahir'];
$vpukul=$_POST['tpukul'];
$vjenis_kelahiran=$_POST['tjenis_kelahiran'];
$vpenolong_kelahiran=$_POST['tpenolong_kelahiran'];
$vberat_bayi=$_POST['tberat_bayi'];
$vpanjang_bayi=$_POST['tpanjang_bayi'];
$vnik_ibu=$_POST['tnik_ibu'];
$vnik_ayah=$_POST['tnik_ayah'];
$vstatus=$_POST['tstatus'];
$vcatat=$_POST['tcatat'];

$query=mysqli_query($connection,"UPDATE tbl_akta_kelahiran SET status='$vstatus', catat='$vcatat'
	WHERE no_kk='$vno_kk' and nama_bayi='$vnama_bayi'" )or die (mysqli_error());
if($query) {
?>
<script type="text/javascript">
	window.location = "FrmHome.php?page=DaftarAktaKelahiran.php";
</script>
<?php
}
?>