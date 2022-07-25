<!DOCTYPE html>
<html>
<head>
	<title>Entry Akta Kelahiran</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
</head>
<body>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Pengajuan Akta Kelahiran</b></font>
	<form action="Insert_AktaKelahiran.php" method="POST" enctype="multipart/form-data">
		<table align="left">
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_pengajuan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">No KK</font></td>
				<td>:</td>
				<td><input type="text" name="tno_kk" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Kepala Keluarga</font></td>
				<td>:</td>
				<td><input type="text" name="tnama_kepala_keluarga" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Ibu</font></td>
				<td>:</td>
				<td><input type="text" name="tnama_ibu" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Bayi</font></td>
				<td>:</td>
				<td><input type="text" name="tnama_bayi" size="20"></td>
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
				<td><font face="Tahoma" color="black" size="2">Tempat Dilahirkan</font></td>
				<td>:</td>
				<td>
					<select type="text" name="ttempat_dilahirkan">
						<option>---Pilih Tempat Dilahirkan---</option>
						<option>RS/RB</option>
						<option>Puskesmas</option>
						<option>Polindes</option>
						<option>Rumah</option>
						<option>Lainnya</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tempat Kelahiran</font></td>
				<td>:</td>
				<td><input type="text" name="ttempat_kelahiran" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Lahir</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_lahir" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Pukul</font></td>
				<td>:</td>
				<td><input type="time" name="tpukul" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Jenis Kelahiran</font></td>
				<td>:</td>
				<td>
					<select type="text" name="tjenis_kelahiran">
						<option>-----Pilih Jenis Kelahiran-----</option>
						<option>Tunggal</option>
						<option>Kembar 2</option>
						<option>Kembar 3</option>
						<option>Kembar 4</option>
						<option>Lainnya</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Penolong Kelahiran</font></td>
				<td>:</td>
				<td>
					<select type="text" name="tpenolong_kelahiran">
						<option>---Pilih Penolong Kelahiran---</option>
						<option>Dokter</option>
						<option>Bidan/Perawat</option>
						<option>Dukun</option>
						<option>Lainnya</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Berat Bayi</font></td>
				<td>:</td>
				<td><input type="text" name="tberat_bayi" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Panjang Bayi</font></td>
				<td>:</td>
				<td><input type="text" name="tpanjang_bayi" size="20"></td>
			</tr>
			<tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK Ibu</font></td>
				<td>:</td>
				<td><input type="text" name="tnik_ibu" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK Ayah</font></td>
				<td>:</td>
				<td><input type="text" name="tnik_ayah" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP Kedua Orang Tua</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_ktp" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KK</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_kk" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan Buku/Akte Nikah</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_buku_nikah" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan Surat Keterangan Kelahiran</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_surat_pengantar" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Catatan</font></td>
				<td>:</td>
				<td><input type="text" name="tcatat" size="20"></td>
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