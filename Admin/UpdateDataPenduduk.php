<?php  
include "../conn/koneksi.php";
$vNIK=$_POST['tNIK'];
$vNoKK=$_POST['tNoKK'];
$vNama=$_POST['tNama'];
$vTempatLahir=$_POST['tTempatLahir'];
$vTanggalLahir=$_POST['tTanggalLahir'];
$vAlamat=$_POST['tAlamat'];
$vKelurahan=$_POST['tKelurahan'];
$vKecamatan=$_POST['tKecamatan'];
$vKabupaten=$_POST['tKabupaten'];
$vJenisKelamin=$_POST['tJenisKelamin'];
$vAgama=$_POST['tAgama'];
$vstatus_kawin=$_POST['tstatus_kawin'];
$vpekerjaan=$_POST['tpekerjaan'];
$vkewarganegaraan=$_POST['tkewarganegaraan'];
?>
<script type="text/javascript">
	else{
		window.location = "FrmHome.php?page=DaftarPenduduk.php";
	}
</script>
<?php  
	$query=mysqli_query($connection,"UPDATE tbl_penduduk SET NIK='$vNIK', No_Kk='$vNoKK', Nama='$vNama', Tempat_Lahir='$vTempatLahir', Tanggal_Lahir='$vTanggalLahir', Alamat='$vAlamat', Kelurahan='$vKelurahan', Kecamatan='$vKecamatan', Kabupaten='$vKabupaten', Jenis_Kelamin='$vJenisKelamin', Agama='$vAgama', status_kawin='$vstatus_kawin', pekerjaan='$vpekerjaan', kewarganegaraan='$vkewarganegaraan'
		 WHERE NIK='$vNIK'")or die (mysqli_error());
	if($query) {
			?>
			<script language="JavaScript">
				document.location='FrmHome.php?page=DaftarPenduduk.php'</script>
			<?php
		}
		?>