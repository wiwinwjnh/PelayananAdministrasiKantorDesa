<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Surat Pindah Keluar</title>
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
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Pengajuan Surat Pindah Keluar</b></font>
	<form action="Insert_PindahKeluar.php?pUser=<?php echo $vUser;?>" method="POST" enctype="multipart/form-data">
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
			<tr><td>-</td></tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">DATA DAERAH TUJUAN</font></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Status No KK Bagi Yang Pindah</font></td>
				<td>:</td>
				<td>
					<select type="text" name="tstatus_no_kk">
						<option>--Pilih Status Nomor KK--</option>
						<option>Numpang Kartu Keluarga</option>
						<option>Membuat KK Baru</option>
						<option>Nomor KK Tetap</option>
					</select>
				</td>
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
				<td><font face="Tahoma" color="black" size="2">Alamat Lengkap</font></td>
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
				<td></td><td></td>
				<td><input type="submit" value="Submit">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>