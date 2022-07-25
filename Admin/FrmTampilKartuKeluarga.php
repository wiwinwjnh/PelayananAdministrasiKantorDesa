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
	$query=mysqli_query($connection,"SELECT * FROM tbl_kk WHERE nik='$tKode'");
	if ($row=mysqli_fetch_array($query)){
		$vtanggal_pengajuan=$row['tanggal_pengajuan'];
		$vnik=$row['nik'];
		$vnama=$row['nama'];
		$vjenis_kelamin=$row['jenis_kelamin'];
		$vtempat_lahir=$row['tempat_lahir'];
		$vtanggal_lahir=$row['tanggal_lahir'];
		$vagama=$row['agama'];
		$vpendidikan=$row['pendidikan'];
		$vpekerjaan=$row['pekerjaan'];
		$vstatus_pernikahan=$row['status_pernikahan'];
		$vstatus_keluarga=$row['status_keluarga'];
		$vkewarganegaraan=$row['kewarganegaraan'];
		$vgol_darah=$row['gol_darah'];
		$vayah=$row['ayah'];
		$vibu=$row['ibu'];
		$vupload_kk=$row['upload_kk'];
		$vupload_ktp=$row['upload_ktp'];
		$vupload_buku_nikah=$row['upload_buku_nikah'];
		$vupload_keterangan_pindah=$row['upload_keterangan_pindah'];
		$vstatus=$row['status'];
		$vcatat=$row['catat'];
	?>
	<font face='tahoma' color='green' size=3><b><br>TAMPIL DATA PENGAJUAN KARTU KELUARGA</b></font>
	<form method="post" action="UpdateTampilKartuKeluarga.php" enctype='multipart/form-data'><br>
	<table align='left'>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Pengajuan</font></td>
			<td>:</td>
			<td><input type="text" name="ttanggal_pengajuan" size="30" value="<?php echo $vtanggal_pengajuan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">NIK</font></td>
			<td>:</td>
			<td><input type="text" name="tnik" size="30" value="<?php echo $vnik;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama Lengkap</font></td>
			<td>:</td>
			<td><input type="text" name="tnama" size="30" value="<?php echo $vnama;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Jenis Kelamin</font></td>
			<td>:</td>
			<td><input type="text" name="tjenis_kelamin" size="30" value="<?php echo $vjenis_kelamin;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tempat Lahir</font></td>
			<td>:</td>
			<td><input type="text" name="ttempat_lahir" size="30" value="<?php echo $vtempat_lahir;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Lahir</font></td>
			<td>:</td>
			<td><input type="text" name="ttanggal_lahir" size="30" value="<?php echo $vtanggal_lahir;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Agama</font></td>
			<td>:</td>
			<td><input type="text" name="tagama" size="30" value="<?php echo $vagama;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Pendidikan</font></td>
			<td>:</td>
			<td><input type="text" name="tpendidikan" size="30" value="<?php echo $vpendidikan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Pekerjaan</font></td>
			<td>:</td>
			<td><input type="text" name="tpekerjaan" size="30" value="<?php echo $vpekerjaan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Status Pernikahan</font></td>
			<td>:</td>
			<td><input type="text" name="tstatus_pernikahan" size="30" value="<?php echo $vstatus_pernikahan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Status Hubungan Keluarga</font></td>
			<td>:</td>
			<td><input type="text" name="tstatus_keluarga" size="30" value="<?php echo $vstatus_keluarga;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Kewarganegaraan</font></td>
			<td>:</td>
			<td><input type="text" name="tkewarganegaraan" size="30" value="<?php echo $vkewarganegaraan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Golongan Darah</font></td>
			<td>:</td>
			<td><input type="text" name="tgol_darah" size="30" value="<?php echo $vgol_darah;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Ayah</font></td>
			<td>:</td>
			<td><input type="text" name="tayah" size="30" value="<?php echo $vayah;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Ibu</font></td>
			<td>:</td>
			<td><input type="text" name="tibu" size="30" value="<?php echo $vibu;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan KK</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_kk" size="30" value="<?php echo $vupload_kk;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_kk;?>&jenis=KK" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_ktp" size="30" value="<?php echo $vupload_ktp;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_ktp;?>&jenis=KTP" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan Buku/Akte Nikah</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_buku_nikah" size="30" value="<?php echo $vupload_buku_nikah;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_buku_nikah;?>&jenis=BukuNikah" target="_blank">Tampilkan</a>&nbsp;]</td>
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