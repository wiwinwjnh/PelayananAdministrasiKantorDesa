<?php  
include "../conn/koneksi.php";
$vusername=$_POST['tusername'];
$vtanggal_pengajuan=$_POST['ttanggal_pengajuan'];
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
    $vupload_surat_pengantar=$_FILES['tupload_surat_pengantar']['name'];
    // upload file
    $namaFile = $_FILES['tupload_surat_pengantar']['name'];
    $namaSementara = $_FILES['tupload_surat_pengantar']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "Persyaratan/SuratPengantar/";
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
$vcatat=$_POST['tcatat'];
if ($vnik<>$vnama) {
?>
<?php
	$query=mysqli_query($connection, "INSERT INTO tbl_surat_kematian(username, tanggal_pengajuan, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, pekerjaan, alamat, tanggal_kematian, tempat_kematian, sebab_kematian, upload_surat_pengantar, upload_kk, upload_ktp, catat) VALUES ('$vusername', '$vtanggal_pengajuan', '$vnik','$vnama','$vjenis_kelamin','$vtempat_lahir','$vtanggal_lahir','$vpekerjaan','$valamat','$vtanggal_kematian','$vtempat_kematian','$vsebab_kematian','$vupload_surat_pengantar','$vupload_kk','$vupload_ktp','$vcatat')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=DaftarSuratKematian.php'</script>
		<?php
	}
}
?>