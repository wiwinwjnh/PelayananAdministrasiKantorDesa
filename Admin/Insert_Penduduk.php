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
if ($vNIK<>$vNoKK) {
?>
<?php
	$query=mysqli_query($connection, "INSERT INTO tbl_penduduk(NIK, No_KK, Nama, Tempat_Lahir, Tanggal_Lahir, Alamat, Kelurahan, Kecamatan, Kabupaten, Jenis_Kelamin, Agama, status_kawin, pekerjaan, kewarganegaraan) VALUES ('$vNIK','$vNoKK','$vNama','$vTempatLahir','$vTanggalLahir','$vAlamat','$vKelurahan','$vKecamatan','$vKabupaten','$vJenisKelamin','$vAgama','$vstatus_kawin','$vpekerjaan','$vkewarganegaraan')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=DaftarPenduduk.php'</script>
		<?php
	}
}
?>