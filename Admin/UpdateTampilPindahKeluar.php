<?php  
include "../conn/koneksi.php";
$vtanggal_Pengajuan=$_POST['ttanggal_pengajuan'];
$vno_kk=$_POST['tno_kk'];
$vnama_kepala_keluarga=$_POST['tnama_kepala_keluarga'];
$valamat=$_POST['talamat'];
$vtelepon=$_POST['ttelepon'];
$vnik_pemohon=$_POST['tnik_pemohon'];
$vnama_lengkap=$_POST['tnama_lengkap'];
$vstatus_no_kk=$_POST['tstatus_no_kk'];
$vno_kk_tujuan=$_POST['tno_kk_tujuan'];
$vnik_kepala_keluarga=$_POST['tnik_kepala_keluarga'];
$vnama_kepala_keluarga_tujuan=$_POST['tnama_kepala_keluarga_tujuan'];
$vtanggal_kedatangan=$_POST['ttanggal_kedatangan'];
$valamat_tujuan=$_POST['talamat_tujuan'];
$vstatus=$_POST['tstatus'];
$vcatat=$_POST['tcatat'];

$query=mysqli_query($connection,"UPDATE tbl_pindah SET status='$vstatus', catat='$vcatat'
  WHERE no_kk='$vno_kk'" )or die (mysqli_error());
if($query) {
?>
<script type="text/javascript">
  window.location = "FrmHome.php?page=DaftarPindahKeluar.php";
</script>
<?php
}
?>