<?php  
include "../conn/koneksi.php";
$vusername=$_POST['tusername'];
$vtanggal_pengajuan=$_POST['ttanggal_pengajuan'];
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

	$vupload_buku_nikah=$_FILES['tupload_buku_nikah']['name'];
    // upload file
    $namaFile = $_FILES['tupload_buku_nikah']['name'];
    $namaSementara = $_FILES['tupload_buku_nikah']['tmp_name'];
    // lokasi file Photo
    $dirUpload = "Persyaratan/BukuNikah/";
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
    $dirUpload = "Persyaratan/SuratPengantar/";
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
	$query=mysqli_query($connection, "INSERT INTO tbl_akta_kelahiran(username, tanggal_pengajuan, no_kk, nama_kepala_keluarga, nama_ibu, nama_bayi, jenis_kelamin, tempat_dilahirkan, tempat_kelahiran, tanggal_lahir, pukul, jenis_kelahiran, penolong_kelahiran, berat_bayi, panjang_bayi, nik_ibu, nik_ayah, upload_ktp, upload_kk, upload_buku_nikah, upload_surat_pengantar, status, catat) VALUES ('$vusername', '$vtanggal_pengajuan', '$vno_kk','$vnama_kepala_keluarga','$vnama_ibu','$vnama_bayi','$vjenis_kelamin','$vtempat_dilahirkan','$vtempat_kelahiran','$vtanggal_lahir','$vpukul','$vjenis_kelahiran','$vpenolong_kelahiran','$vberat_bayi','$vpanjang_bayi','$vnik_ibu','$vnik_ayah','$vupload_ktp','$vupload_kk','$vupload_buku_nikah','$vupload_surat_pengantar','$vstatus','$vcatat')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=DaftarAktaKelahiran.php'</script>
		<?php
	}
}
?>