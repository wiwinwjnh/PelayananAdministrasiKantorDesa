<!DOCTYPE html>
<html>
<head>
	<title>Entry Data Penduduk</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
</head>
<body>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data</b></font>
	<form action="Insert_SuratKematian.php" method="POST" enctype="multipart/form-data">
		<table align="left">
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_pengajuan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK</font></td>
				<td>:</td>
				<td><input type="text" name="tnik" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama</font></td>
				<td>:</td>
				<td><input type="text" name="tnama" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Jenis Kelamin</font></td>
				<td>:</td>
				<td>
					<input type="radio" name="tjenis_kelamin" value="Laki-Laki" id="Laki-Laki">
					<label for="Laki-Laki">Laki-Laki</label>
					<input type="radio" name="tjenis_kelamin" value="Perempuan" id="Perempuan">
					<label for="Perempuan">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tempat Lahir</font></td>
				<td>:</td>
				<td><input type="text" name="ttempat_lahir" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Lahir</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_lahir" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Pekerjaan</font></td>
				<td>:</td>
				<td><input type="text" name="tpekerjaan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Alamat</font></td>
				<td>:</td>
				<td><input type="text" name="talamat" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Kematian</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_kematian" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tempat Kematian</font></td>
				<td>:</td>
				<td><input type="text" name="ttempat_kematian" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Sebab Kematian</font></td>
				<td>:</td>
				<td><input type="text" name="tsebab_kematian" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan Surat Keterangan Kematian</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_surat_pengantar" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KK</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_kk" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP Ahli Waris</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_ktp" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Catatan</font></td>
				<td>:</td>
				<td><input type="text" name="tcatat" size="20"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="submit" name="upload" value="Tambah">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
	</form>
</body>
</html>