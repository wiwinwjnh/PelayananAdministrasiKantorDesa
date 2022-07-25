<?php  
include "../conn/koneksi.php";
$vusername=$_POST['tusername'];
$vtanggal_pengajuan=$_POST['ttanggal_pengajuan'];
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
	$vupload_ktp=$_FILES['tupload_ktp']['name'];
    // upload file
    $namaFile = $_FILES['tupload_ktp']['name'];
    $namaSementara = $_FILES['tupload_ktp']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "Persyaratan/KTP/";
    // pindahkan file
    $vStatusUpload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    if ($vStatusUpload) {
       echo "Upload berhasil!<br/>";
       echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
       echo "Upload Gagal!";
    }

    $vupload_kk=$_FILES['tupload_kk']['name'];
    // upload file
    $namaFile = $_FILES['tupload_kk']['name'];
    $namaSementara = $_FILES['tupload_kk']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "Persyaratan/KartuKeluarga/";
    // pindahkan file
    $vStatusUpload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    if ($vStatusUpload) {
       echo "Upload berhasil!<br/>";
       echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
       echo "Upload Gagal!";
    }
$vstatus=$_POST['tstatus'];
$vcatat=$_POST['tcatat'];
if ($vno_kk<>$vnama_kepala_keluarga) {
?>
<?php
	$query=mysqli_query($connection, "INSERT INTO tbl_pindah(username, tanggal_pengajuan, no_kk, nama_kepala_keluarga, alamat, telepon, nik_pemohon, nama_lengkap, status_no_kk, no_kk_tujuan, nik_kepala_keluarga, nama_kepala_keluarga_tujuan, tanggal_kedatangan, alamat_tujuan, upload_ktp, upload_kk, status, catat) VALUES ('$vusername', '$vtanggal_pengajuan', '$vno_kk','$vnama_kepala_keluarga','$valamat','$vtelepon','$vnik_pemohon','$vnama_lengkap','$vstatus_no_kk','$vno_kk_tujuan','$vnik_kepala_keluarga','$vnama_kepala_keluarga_tujuan','$vtanggal_kedatangan','$valamat_tujuan','$vupload_ktp','$vupload_kk','$vstatus','$vcatat')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=DaftarPindahKeluar.php'</script>
		<?php
	}
}
?>