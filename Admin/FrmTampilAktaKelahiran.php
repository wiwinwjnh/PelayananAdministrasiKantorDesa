<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Edit Data User</title>
</head>
<body>
	<?php
	include "../conn/koneksi.php";
	$tKode = $_GET['Kode'];
	$tNamaBayi = $_GET['NamaBayi'];
	$query=mysqli_query($connection,"SELECT * FROM tbl_akta_kelahiran WHERE no_kk='$tKode' and nama_bayi='$tNamaBayi'");
	if ($row=mysqli_fetch_array($query)){
		$vtanggal_pengajuan=$row['tanggal_pengajuan'];
		$vno_kk=$row['no_kk'];
		$vnama_kepala_keluarga=$row['nama_kepala_keluarga'];
		$vnama_ibu=$row['nama_ibu'];
		$vnama_bayi=$row['nama_bayi'];
		$vjenis_kelamin=$row['jenis_kelamin'];
		$vtempat_dilahirkan=$row['tempat_dilahirkan'];
		$vtempat_kelahiran=$row['tempat_kelahiran'];
		$vhari=$row['hari'];
		$vtanggal_lahir=$row['tanggal_lahir'];
		$vpukul=$row['pukul'];
		$vjenis_kelahiran=$row['jenis_kelahiran'];
		$vpenolong_kelahiran=$row['penolong_kelahiran'];
		$vberat_bayi=$row['berat_bayi'];
		$vpanjang_bayi=$row['panjang_bayi'];
		$vnik_ibu=$row['nik_ibu'];
		$vnik_ayah=$row['nik_ayah'];
		$vupload_ktp=$row['upload_ktp'];
		$vupload_kk=$row['upload_kk'];
		$vupload_buku_nikah=$row['upload_buku_nikah'];
		$vupload_surat_pengantar=$row['upload_surat_pengantar'];
		$vstatus=$row['status'];
		$vcatat=$row['catat'];
	?>
	<font face='tahoma' color='green' size=3><b><br>TAMPIL DATA PENGAJUAN AKTA KELAHIRAN</b></font>
	<form method="post" action="UpdateTampilAktaKelahiran.php" enctype='multipart/form-data'><br>
	<table align='left'>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
			<td>:</td>
			<td><input type="text" name="ttanggal_pengajuan" size="30" value="<?php echo $vtanggal_pengajuan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">No KK</font></td>
			<td>:</td>
			<td><input type="text" name="tno_kk" size="30" value="<?php echo $vno_kk;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama Kepala Keluarga</font></td>
			<td>:</td>
			<td><input type="text" name="tnama_kepala_keluarga" size="30" value="<?php echo $vnama_kepala_keluarga;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama Ibu</font></td>
			<td>:</td>
			<td><input type="text" name="tnama_ibu" size="30" value="<?php echo $vnama_ibu;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama Bayi</font></td>
			<td>:</td>
			<td><input type="text" name="tnama_bayi" size="30" value="<?php echo $vnama_bayi;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Jenis Kelamin</font></td>
			<td>:</td>
			<td><input type="text" name="tjenis_kelamin" size="30" value="<?php echo $vjenis_kelamin;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tempat Dilahirkan</font></td>
			<td>:</td>
			<td><input type="text" name="ttempat_dilahirkan" size="30" value="<?php echo $vtempat_dilahirkan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tempat Kelahiran</font></td>
			<td>:</td>
			<td><input type="text" name="ttempat_kelahiran" size="30" value="<?php echo $vtempat_kelahiran;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Hari</font></td>
			<td>:</td>
			<td><input type="text" name="thari" size="30" value="<?php echo $vhari;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Lahir</font></td>
			<td>:</td>
			<td><input type="text" name="ttanggal_lahir" size="30" value="<?php echo $vtanggal_lahir;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Pukul</font></td>
			<td>:</td>
			<td><input type="text" name="tpukul" size="30" value="<?php echo $vpukul;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Jenis Kelahiran</font></td>
			<td>:</td>
			<td><input type="text" name="tjenis_kelahiran" size="30" value="<?php echo $vjenis_kelahiran;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Penolong Kelahiran</font></td>
			<td>:</td>
			<td><input type="text" name="tpenolong_kelahiran" size="30" value="<?php echo $vpenolong_kelahiran;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Berat Bayi</font></td>
			<td>:</td>
			<td><input type="text" name="tberat_bayi" size="30" value="<?php echo $vberat_bayi;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Panjang Bayi</font></td>
			<td>:</td>
			<td><input type="text" name="tpanjang_bayi" size="30" value="<?php echo $vpanjang_bayi;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">NIK Ibu</font></td>
			<td>:</td>
			<td><input type="text" name="tnik_ibu" size="30" value="<?php echo $vnik_ibu;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">NIK Ayah</font></td>
			<td>:</td>
			<td><input type="text" name="tnik_ayah" size="30" value="<?php echo $vnik_ayah;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP Kedua Orang Tua</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_ktp" size="30" value="<?php echo $vupload_ktp;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_ktp;?>&jenis=KTP" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan KK</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_kk" size="30" value="<?php echo $vupload_kk;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_kk;?>&jenis=KK" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan Buku/Akte Nikah</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_buku_nikah" size="30" value="<?php echo $vupload_buku_nikah;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_buku_nikah;?>&jenis=BukuNikah" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan Surat Keterangan Kelahiran</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_surat_pengantar" size="30" value="<?php echo $vupload_surat_pengantar;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_surat_pengantar;?>&jenis=SuratPengantar" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
	        <td><label class="label">Status Pengajuan</label></td>
	        <td><label class="label">:</label></td>
	        <td>
	        	<select type="text" name="tstatus" class="textbox">
	        	<?php if ($vstatus=="Diterima") { ?>
                    <option value=""></option>
		            <option value="Diterima" selected>Diterima</option>
		            <option value="Ditolak">Ditolak</option>
		            <option value="Diproses">Diproses</option>
		            <option value="Selesai">Selesai</option> 
	        	<?php }	elseif ($vstatus=="Ditolak") { ?>
                    <option value=""></option>
		            <option value="Diterima">Diterima</option>
		            <option value="Ditolak" selected>Ditolak</option>
		            <option value="Diproses">Diproses</option>
		            <option value="Selesai">Selesai</option> 
	        	<?php }	elseif ($vstatus=="Diproses") { ?>
                    <option value=""></option>
		            <option value="Diterima">Diterima</option>
		            <option value="Ditolak">Ditolak</option>
		            <option value="Diproses" selected>Diproses</option>
		            <option value="Selesai">Selesai</option>
		        <?php }	elseif ($vstatus=="Selesai") { ?>
                    <option value=""></option>
		            <option value="Diterima">Diterima</option>
		            <option value="Ditolak">Ditolak</option>
		            <option value="Diproses">Diproses</option>
		            <option value="Selesai"  selected>Selesai</option>    
                <?php }	else { ?>
                    <option value="" selected></option>
		            <option value="Diterima">Diterima</option>
		            <option value="Ditolak">Ditolak</option>
		            <option value="Diproses">Diproses</option>
		            <option value="Selesai" >Selesai</option>
	        	<?php } ?>	
	        	</select>
	        </td>
    	</tr>
    	<tr>
			<td><font face="Tahoma" color="black" size="2">Catatan</font></td>
			<td>:</td>
			<td><input type="text" name="tcatat" size="30" value="<?php echo $vcatat;?>"></td>
		</tr>
		<tr>
			<td></td><td></td>
			<td><font size='2'><input type='submit' name='submit' value='Update'>
				<input type="button" value="Cancel" onclick=self.history.back()></font>
			</td>
		</tr>
</table>
</form>
<?php
}
?>
</body>
</html>