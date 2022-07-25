<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Kartu Keluarga</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
</head>
<body>
	<?php
	if (isset($_GET['pUser'])) {
    	$vUser=$_GET['pUser'];
	} else {	
		$vUser="";
	}
   ?>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Pengajuan Kartu Keluarga</b></font>
	<form action="Insert_KartuKeluarga.php?pUser=<?php echo $vUser;?>" method="POST" enctype="multipart/form-data">
		<table align="left"><br>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_pengajuan" value="<?php echo date('Y-m-d');?>"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">No Handphone</font></td>
				<td>:</td>
				<td><input type="text" name="tno_hp" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK</font></td>
				<td>:</td>
				<td><input type="text" name="tnik" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Lengkap</font></td>
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
				<td><font face="Tahoma" color="black" size="2">Agama</font></td>
				<td>:</td>
				<td><input type="text" name="tagama" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">pendidikan</font></td>
				<td>:</td>
				<td><input type="text" name="tpendidikan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Jenis Pekerjaan</font></td>
				<td>:</td>
				<td><input type="text" name="tpekerjaan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Status Pernikahan</font></td>
				<td>:</td>
				<td><input type="text" name="tstatus_pernikahan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Status Hubungan Keluarga</font></td>
				<td>:</td>
				<td><input type="text" name="tstatus_keluarga" size="20"></td>
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
				<td><font face="Tahoma" color="black" size="2">Golongan Darah</font></td>
				<td>:</td>
				<td><input type="text" name="tgol_darah" size="20"></td>
			</tr>
			<tr><td>-</td></tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Orang Tua</font></td>
				<td>:</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Ayah</font></td>
				<td>:</td>
				<td><input type="text" name="tayah" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Ibu</font></td>
				<td>:</td>
				<td><input type="text" name="tibu" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KK</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_kk" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_ktp" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan Buku/Akte Nikah</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_buku_nikah" size="20"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="submit" value="Submit">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>