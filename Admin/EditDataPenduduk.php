<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Edit Data Penduduk</title>
</head>
<body>
	<?php
	include "../conn/koneksi.php";
	$tKode = $_GET['Kode'];
	$query=mysqli_query($connection,"SELECT * FROM tbl_penduduk WHERE NIK='$tKode'");
	while ($row=mysqli_fetch_array($query)){
		$vNIK=$row['NIK'];
		$vNoKK=$row['No_KK'];
		$vNama=$row['Nama'];
		$vTempatLahir=$row['Tempat_Lahir'];
		$vTanggalLahir=$row['Tanggal_Lahir'];
		$vAlamat=$row['Alamat'];
		$vRT=$row['RT'];
		$vRW=$row['RW'];
		$vKelurahan=$row['Kelurahan'];
		$vKecamatan=$row['Kecamatan'];
		$vKabupaten=$row['Kabupaten'];
		$vJenisKelamin=$row['Jenis_Kelamin'];
		$vAgama=$row['Agama'];
		$vstatus_kawin=$row['status_kawin'];
		$vpekerjaan=$row['pekerjaan'];
		$vkewarganegaraan=$row['kewarganegaraan'];
	?>
	<font face='tahoma' color='green' size=3><b>EDIT DATA PENDUDUK</b></font>
	<form method="post" action="UpdateDataPenduduk.php" enctype='multipart/form-data'><br>
	<table align='left'>
		<tr>
			<td><font face="Tahoma" color="black" size="2">NIK</font></td>
			<td>:</td>
			<td><input type="text" name="tNIK" size="25" value='<?php echo $vNIK?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">No KK</font></td>
			<td>:</td>
			<td><input type="text" name="tNoKK" size="25" value='<?php echo $vNoKK?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama</font></td>
			<td>:</td>
			<td><input type="text" name="tNama" size="25" value='<?php echo $vNama?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tempat Lahir</font></td>
			<td>:</td>
			<td><input type="text" name="tTempatLahir" size="25" value='<?php echo $vTempatLahir?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Lahir</font></td>
			<td>:</td>
			<td><input type="date" name="tTanggalLahir" size="25" value='<?php echo $vTanggalLahir?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Alamat</font></td>
			<td>:</td>
			<td><input type="text" name="tAlamat" size="25" value='<?php echo $vAlamat?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Kelurahan</font></td>
			<td>:</td>
			<td><input type="text" name="tKelurahan" size="25" value='<?php echo $vKelurahan?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Kecamatan</font></td>
			<td>:</td>
			<td><input type="text" name="tKecamatan" size="25" value='<?php echo $vKecamatan?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Kabupaten</font></td>
			<td>:</td>
			<td><input type="text" name="tKabupaten" size="25" value='<?php echo $vKabupaten?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Jenis Kelamin</font></td>
			<td>:</td>
			<td>
				<input type="radio" name="tJenisKelamin" size="25" value="Laki-Laki" id="Laki-Laki">
				<label for="Laki-Laki">Laki-Laki</label>
				<input type="radio" name="tJenisKelamin" size="25" value="Perempuan" id="Perempuan">
				<label for="Perempuan">Perempuan</label>
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Agama</font></td>
			<td>:</td>
			<td><input type="text" name="tAgama" size="25" value='<?php echo $vAgama?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Status Perkawinan</font></td>
			<td>:</td>
			<td><input type="text" name="tstatus_kawin" size="25" value='<?php echo $vstatus_kawin?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Pekerjaan</font></td>
			<td>:</td>
			<td><input type="text" name="tpekerjaan" size="25" value='<?php echo $vpekerjaan?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Kewarganegaraan</font></td>
			<td>:</td>
			<td>
				<input type="radio" name="tkewarganegaraan" value="WNI" id="WNI">
				<label for="WNI">WNI</label>
				<input type="radio" name="tkewarganegaraan" value="WNA" id="WNA">
				<label for="WNA">WNA</label>
			</td>
		</tr>
		<tr>
			<td></td><td></td>
			<td><font size='2'><input type='submit' name='submit' value='Update'>
				<input type="button" value="Cancel" onclick=self.history.back()>
			</font>
		</td>
	</tr>
</table>
</form>
<?php
}
?>
</body>
</html>