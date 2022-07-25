<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Akta Kematian</title>
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
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Pengajuan Akta Kematian</b></font>
	<form action="Insert_SuratKematian.php?pUser=<?php echo $vUser;?>" method="POST" enctype="multipart/form-data">
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
				<td><textarea name="talamat" required></textarea></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Hari</font></td>
				<td>:</td>
				<td><input type="text" name="thari" id="thari" size="20"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Tanggal Kematian</font></td>
				<td>:</td>
				<td><input type="date" name="ttanggal_kematian" id="ttanggal_kematian" size="20" oninput="tentukan_hari(this.value);" value="<?php echo date("Y-m-d");?>" min="01-01-1945"/></td>
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
				<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP</font></td>
				<td>:</td>
				<td><input type="file" name="tupload_ktp" size="20"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="submit" name="upload" value="Submit">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
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