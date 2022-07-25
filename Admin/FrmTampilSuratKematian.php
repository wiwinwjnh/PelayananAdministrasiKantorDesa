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
	$query=mysqli_query($connection,"SELECT * FROM tbl_surat_kematian WHERE nik='$tKode'");
	if ($row=mysqli_fetch_array($query)){
		$vtanggal_pengajuan=$row['tanggal_pengajuan'];
		$vnik=$row['nik'];
		$vnama=$row['nama'];
		$vjenis_kelamin=$row['jenis_kelamin'];
		$vtempat_lahir=$row['tempat_lahir'];
		$vtanggal_lahir=$row['tanggal_lahir'];
		$vpekerjaan=$row['pekerjaan'];
		$valamat=$row['alamat'];
		$vhari=$row['hari'];
		$vtanggal_kematian=$row['tanggal_kematian'];
		$vtempat_kematian=$row['tempat_kematian'];
		$vsebab_kematian=$row['sebab_kematian'];
		$vupload_surat_pengantar=$row['upload_surat_pengantar'];
		$vupload_kk=$row['upload_kk'];
		$vupload_ktp=$row['upload_ktp'];
		$vstatus=$row['status'];
		$vcatat=$row['catat'];
	?>
	<font face='tahoma' color='green' size=3><br><b>TAMPIL DATA PENGAJUAN AKTA KEMATIAN</b></font>
	<form method="post" action="UpdateTampilSuratKematian.php" enctype='multipart/form-data'><br>
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
			<td><font face="Tahoma" color="black" size="2">Pekerjaan</font></td>
			<td>:</td>
			<td><input type="text" name="tpekerjaan" size="30" value="<?php echo $vpekerjaan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Alamat</font></td>
			<td>:</td>
			<td><textarea name="talamat" required><?php echo $row['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Kematian</font></td>
			<td>:</td>
			<td><input type="text" name="ttanggal_kematian" size="30" value="<?php echo $vtanggal_kematian;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Hari</font></td>
			<td>:</td>
			<td><input type="text" name="thari" size="30" value="<?php echo $vhari;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tempat Kematian</font></td>
			<td>:</td>
			<td><input type="text" name="ttempat_kematian" size="30" value="<?php echo $vtempat_kematian;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Sebab Kematian</font></td>
			<td>:</td>
			<td><input type="text" name="tsebab_kematian" size="30" value="<?php echo $vsebab_kematian;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan KTP</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_ktp" size="30" value="<?php echo $vupload_ktp;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_ktp;?>&jenis=KTP" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan Kartu Keluarga</font></td>
			<td>:</td>
			<td><input type="text" name="tupload_kk" size="30" value="<?php echo $vupload_kk;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_kk;?>&jenis=KK" target="_blank">Tampilkan</a>&nbsp;]</td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Foto/Scan Surat Keterangan Kematian</font></td>
			<td>:</td>
			<td><input type="text" name="upload_surat_pengantar" size="30" value="<?php echo $vupload_surat_pengantar;?>">&nbsp;[&nbsp;<a href="tampil_dokumen.php?pfile=<?php echo $vupload_surat_pengantar;?>&jenis=SuratPengantar" target="_blank">Tampilkan</a>&nbsp;]</td>
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