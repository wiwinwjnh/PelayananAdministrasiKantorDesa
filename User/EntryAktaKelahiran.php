<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Akta Kelahiran</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<?php
	date_default_timezone_set('Asia/Jakarta');
	if (isset($_GET['pUser'])) {
    	$vUser=$_GET['pUser'];
	} else {	
		$vUser="";
	}
	
   ?>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Pengajuan Akta Kelahiran</b></font>
	<form action="Insert_AktaKelahiran.php?pUser=<?php echo $vUser;?>" id="form" method="POST" enctype="multipart/form-data">
		<table align="left"><br>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_pengajuan" value="<?php echo date('Y-m-d');?>">
				</td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">No Handphone</font></td>
				<td>:</td>
				<td><input type="text" name="tno_hp" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">No KK</font></td>
				<td>:</td>
				<td><input type="text" name="tno_kk" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Nama Kepala Keluarga</font></td>
				<td>:</td>
				<td><input type="text" name="tnama_kepala" size="20"></td>
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
						<option>--Pilih Tempat Dilahirkan--</option>
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
				<td><input type="date" name="ttanggal_lahir" id="ttanggal_lahir" size="20" oninput="tentukan_hari(this.value);" value="<?php echo date("Y-m-d");?>" min="01-01-1945"/></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Hari</font></td>
				<td>:</td>
				<td><input type="text" name="thari" id="thari" size="20"></td>
			</tr>
			

			<tr>
				<td><font face="Tahoma" color="black" size="2">Pukul</font></td>
				<td>:</td>
				<td><input type="time" name="tpukul" size="20" value="<?php echo date('H:i:s');?>"/></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Jenis Kelahiran</font></td>
				<td>:</td>
				<td>
					<select type="text" name="tjenis_kelahiran">
						<option>---Pilih Jenis Kelahiran---</option>
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
						<option>--Pilih Penolong Kelahiran--</option>
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
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP Orang Tua</font></td>
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
				<td></td><td></td>
				<td><input type="submit" value="Submit">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
</body>
<script type="text/javascript">
    function tentukan_hari(value){
    var d=new Date(value);
    var weekday = new Array(7);
    weekday[0] = "Minggu";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jumat";
    weekday[6] = "Sabtu";
    var day = weekday[d.getDay()];
    document.getElementById("thari").value=day;
  }
</script>
</html>
