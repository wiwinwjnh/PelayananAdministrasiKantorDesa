<?php  
include "../conn/koneksi.php";

if (isset($_GET['pUser'])) {
  $vUser=$_GET['pUser'];
} else {  
  $vUser="";
}
$vtanggal_pengajuan=$_POST['ttanggal_pengajuan'];
$vno_hp=$_POST['tno_hp'];
$vno_kk=$_POST['tno_kk'];
$vnama_kepala=$_POST['tnama_kepala'];
$vnama_ibu=$_POST['tnama_ibu'];
$vnama_bayi=$_POST['tnama_bayi'];
$vjenis_kelamin=$_POST['tjenis_kelamin'];
$vtempat_dilahirkan=$_POST['ttempat_dilahirkan'];
$vtempat_kelahiran=$_POST['ttempat_kelahiran'];
$vhari=$_POST['thari'];
$vtanggal_lahir=$_POST['ttanggal_lahir'];
$vpukul=$_POST['tpukul'];
$vjenis_kelahiran=$_POST['tjenis_kelahiran'];
$vpenolong_kelahiran=$_POST['tpenolong_kelahiran'];
$vberat_bayi=$_POST['tberat_bayi'];
$vpanjang_bayi=$_POST['tpanjang_bayi'];
$vnik_ibu=$_POST['tnik_ibu'];
$vnik_ayah=$_POST['tnik_ayah'];

$vupload_ktp=$_FILES['tupload_ktp']['name'];
    // upload file
    $namaFile = $_FILES['tupload_ktp']['name'];
    $namaSementara = $_FILES['tupload_ktp']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "../Admin/Persyaratan/KTP/";
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
    $dirUpload = "../Admin/Persyaratan/KartuKeluarga/";
    // pindahkan file
    $vStatusUpload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    if ($vStatusUpload) {
       echo "Upload berhasil!<br/>";
       echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
       echo "Upload Gagal!";
    }

	$vupload_buku_nikah=$_FILES['tupload_buku_nikah']['name'];
    // upload file
    $namaFile = $_FILES['tupload_buku_nikah']['name'];
    $namaSementara = $_FILES['tupload_buku_nikah']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "../Admin/Persyaratan/BukuNikah/";
    // pindahkan file
    $vStatusUpload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    if ($vStatusUpload) {
       echo "Upload berhasil!<br/>";
       echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
       echo "Upload Gagal!";
    }

    $vupload_surat_pengantar=$_FILES['tupload_surat_pengantar']['name'];
    // upload file
    $namaFile = $_FILES['tupload_surat_pengantar']['name'];
    $namaSementara = $_FILES['tupload_surat_pengantar']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "../Admin/Persyaratan/SuratPengantar/";
    // pindahkan file
    $vStatusUpload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    if ($vStatusUpload) {
       echo "Upload berhasil!<br/>";
       echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
       echo "Upload Gagal!";
    }
if ($vno_kk<>$vnama_kepala) {
?>
<?php
	$query=mysqli_query($connection, "INSERT INTO tbl_akta_kelahiran(username, tanggal_pengajuan, no_hp, no_kk, nama_kepala_keluarga, nama_ibu, nama_bayi, jenis_kelamin, tempat_dilahirkan, tempat_kelahiran, hari, tanggal_lahir, pukul, jenis_kelahiran, penolong_kelahiran, berat_bayi, panjang_bayi, nik_ibu, nik_ayah, upload_ktp, upload_kk, upload_buku_nikah, upload_surat_pengantar) VALUES ('$vUser','$vtanggal_pengajuan','$vno_hp','$vno_kk','$vnama_kepala','$vnama_ibu','$vnama_bayi','$vjenis_kelamin','$vtempat_dilahirkan','$vtempat_kelahiran','$vhari','$vtanggal_lahir','$vpukul','$vjenis_kelahiran','$vpenolong_kelahiran','$vberat_bayi','$vpanjang_bayi','$vnik_ibu','$vnik_ayah','$vupload_ktp','$vupload_kk','$vupload_buku_nikah','$vupload_surat_pengantar')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=Home.php&pUser=<?php echo $vUser;?>'</script>
		<?php
	}
}
?>