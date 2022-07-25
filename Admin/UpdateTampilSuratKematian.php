<?php  
include "../conn/koneksi.php";
$vtanggal_Pengajuan=$_POST['ttanggal_pengajuan'];
$vnik=$_POST['tnik'];
$vnama=$_POST['tnama'];
$vjenis_kelamin=$_POST['tjenis_kelamin'];
$vtempat_lahir=$_POST['ttempat_lahir'];
$vtanggal_lahir=$_POST['ttanggal_lahir'];
$vpekerjaan=$_POST['tpekerjaan'];
$valamat=$_POST['talamat'];
$vtanggal_kematian=$_POST['ttanggal_kematian'];
$vtempat_kematian=$_POST['ttempat_kematian'];
$vsebab_kematian=$_POST['tsebab_kematian'];
$vstatus=$_POST['tstatus'];
$vcatat=$_POST['tcatat'];

$query=mysqli_query($connection,"UPDATE tbl_surat_kematian SET status='$vstatus', catat='$vcatat'
  WHERE nik='$vnik'" )or die (mysqli_error());
if($query) {
?>
<script type="text/javascript">
  window.location = "FrmHome.php?page=DaftarSuratKematian.php";
</script>
<?php
}
?>