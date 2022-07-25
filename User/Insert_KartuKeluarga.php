<?php  
include "../conn/koneksi.php";
if (isset($_GET['pUser'])) {
  $vUser=$_GET['pUser'];
} else {  
  $vUser="";
}

$vtanggal_pengajuan=$_POST['ttanggal_pengajuan'];
$vno_hp=$_POST['tno_hp'];
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
if ($vnik<>$vnama) {
?>
<?php
	$query=mysqli_query($connection, "INSERT INTO tbl_kk(username, tanggal_pengajuan, no_hp, nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pendidikan, pekerjaan, status_pernikahan, status_keluarga, kewarganegaraan, gol_darah, ayah, ibu, upload_kk, upload_ktp, upload_buku_nikah) VALUES ('$vUser','$vtanggal_pengajuan','$vno_hp','$vnik','$vnama','$vjenis_kelamin','$vtempat_lahir','$vtanggal_lahir','$vagama','$vpendidikan','$vpekerjaan','$vstatus_pernikahan','$vstatus_keluarga','$vkewarganegaraan','$vgol_darah','$vayah','$vibu','$vupload_kk','$vupload_ktp','$vupload_buku_nikah')")or die (mysqli_error());
	if($query) {
		?>
		<script language="javascript">
			document.location='FrmHome.php?page=Home.php&pUser=<?php echo $vUser;?>'</script>
		<?php
	}
}
?>