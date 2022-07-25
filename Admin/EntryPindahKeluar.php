<!DOCTYPE html>
<html>
<head>
	<title>Entry Penduduk Pindah</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
</head>
<body>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Penduduk Pindah Keluar</b></font>
	<form action="Insert_PindahKeluar.php" method="POST" enctype="multipart/form-data">
		<table align="left">
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_pengajuan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">DATA DAERAH ASAL</font></td>
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
				<td><font face="Tahoma" color="black" size="2">Alamat Lengkap</font></td>
				<td>:</td>
				<td><input type="text" name="talamat" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Telepon</font></td>
				<td>:</td>
				<td><input type="text" name="ttelepon" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK Pemohon</font></td>
				<td>:</td>
				<td><input type="text" name="tnik_pemohon" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Lengkap</font></td>
				<td>:</td>
				<td><input type="text" name="tnama_lengkap" size="20"></td>
			</tr>
			<td></td>
			<tr>
				<td><font face="Tahoma" color="black" size="2">DATA DAERAH TUJUAN</font></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Status No KK Bagi Yang Pindah</font></td>
				<td>:</td>
				<td><input type="text" name="tstatus_no_kk" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">No KK</font></td>
				<td>:</td>
				<td><input type="text" name="tno_kk_tujuan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">NIK Kepala Keluarga</font></td>
				<td>:</td>
				<td><input type="text" name="tnik_kepala_keluarga" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Kepala Keluarga</font></td>
				<td>:</td>
				<td><input type="text" name="tnama_kepala_keluarga_tujuan" size="20"></td>
			</tr>
						<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Kedatangan</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_kedatangan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Alamat</font></td>
				<td>:</td>
				<td><input type="text" name="talamat_tujuan" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_ktp" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KK</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_kk" size="20"></td>
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