<!DOCTYPE html>
<html>
<head>
	<title>Entry Data Penduduk</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
</head>
<body>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Penduduk</b></font>
	<form action="Insert_Penduduk.php" method="POST">
		<table align="left">
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK</font></td>
				<td>:</td>
				<td><input type="text" name="tNIK" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">No KK</font></td>
				<td>:</td>
				<td><input type="text" name="tNoKK" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Lengkap</font></td>
				<td>:</td>
				<td><input type="text" name="tNama" size="20" autocomplete="off"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tempat Lahir</font></td>
				<td>:</td>
				<td><input type="text" name="tTempatLahir" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Lahir</font></td>
				<td>:</td>
				<td><input type="date" name="tTanggalLahir" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Alamat</font></td>
				<td>:</td>
				<td><input type="text" name="tAlamat" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Kelurahan</font></td>
				<td>:</td>
				<td><input type="text" name="tKelurahan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Kecamatan</font></td>
				<td>:</td>
				<td><input type="text" name="tKecamatan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Kabupaten</font></td>
				<td>:</td>
				<td><input type="text" name="tKabupaten" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Jenis Kelamin</font></td>
				<td>:</td>
				<td>
					<input type="radio" name="tJenisKelamin" value="Laki-Laki" id="Laki-Laki">
					<label for="Laki-Laki">Laki-Laki</label>
					<input type="radio" name="tJenisKelamin" value="Perempuan" id="Perempuan">
					<label for="Perempuan">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Agama</font></td>
				<td>:</td>
				<td><input type="text" name="tAgama" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Status Perkawinan</font></td>
				<td>:</td>
				<td><input type="text" name="tstatus_kawin" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Pekerjaan</font></td>
				<td>:</td>
				<td><input type="text" name="tpekerjaan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Kewarganegaraan</font></td>
				<td>:</td>
				<td>
					<input type="radio" name="tkewarganegaraan" size="20" value="WNI" id="WNI">
					<label for="WNI">WNI</label>
					<input type="radio" name="tkewarganegaraan" size="20" value="WNA" id="WNA">
					<label for="WNA">WNA</label>
				</td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="submit" value="Tambah">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>