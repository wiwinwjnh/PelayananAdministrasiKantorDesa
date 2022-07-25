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
	$query=mysqli_query($connection,"SELECT * FROM tbl_pindah WHERE no_kk='$tKode'");
	if ($row=mysqli_fetch_array($query)){
		$vtanggal_pengajuan=$row['tanggal_pengajuan'];
		$vno_kk=$row['no_kk'];
		$vnama_kepala_keluarga=$row['nama_kepala_keluarga'];
		$valamat=$row['alamat'];
		$vtelepon=$row['telepon'];
		$vnik_pemohon=$row['nik_pemohon'];
		$vnama_lengkap=$row['nama_lengkap'];
		$vstatus_no_kk=$row['status_no_kk'];
		$vno_kk_tujuan=$row['no_kk_tujuan'];
		$vnik_kepala_keluarga=$row['nik_kepala_keluarga'];
		$vnama_kepala_keluarga_tujuan=$row['nama_kepala_keluarga_tujuan'];
		$vtanggal_kedatangan=$row['tanggal_kedatangan'];
		$valamat_tujuan=$row['alamat_tujuan'];
		$vupload_ktp=$row['upload_ktp'];
		$vupload_kk=$row['upload_kk'];
		$vstatus=$row['status'];
		$vcatat=$row['catat'];
	?>
	<font face='tahoma' color='green' size=3><b><br>TAMPIL DATA PENGAJUAN PINDAH KELUAR</b></font>
	<form method="post" action="UpdateTampilPindahKeluar.php" enctype='multipart/form-data'><br>
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
			<td><font face="Tahoma" color="black" size="2">Alamat</font></td>
			<td>:</td>
			<td><input type="text" name="talamat" size="30" value="<?php echo $valamat;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">No Telepon</font></td>
			<td>:</td>
			<td><input type="text" name="ttelepon" size="30" value="<?php echo $vtelepon;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">NIK Pemohon</font></td>
			<td>:</td>
			<td><input type="text" name="tnik_pemohon" size="30" value="<?php echo $vnik_pemohon;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama Lengkap</font></td>
			<td>:</td>
			<td><input type="text" name="tnama_lengkap" size="30" value="<?php echo $vnama_lengkap;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Status No Kartu Keluarga</font></td>
			<td>:</td>
			<td><input type="text" name="tstatus_no_kk" size="30" value="<?php echo $vstatus_no_kk;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">No Kartu Keluarga Tujuan</font></td>
			<td>:</td>
			<td><input type="text" name="tno_kk_tujuan" size="30" value="<?php echo $vno_kk_tujuan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">NIK Kepala Keluarga</font></td>
			<td>:</td>
			<td><input type="text" name="tnik_kepala_keluarga" size="30" value="<?php echo $vnik_kepala_keluarga;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Nama Kepala Keluarga Tujuan</font></td>
			<td>:</td>
			<td><input type="text" name="tnama_kepala_keluarga_tujuan" size="30" value="<?php echo $vnama_kepala_keluarga_tujuan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Tanggal Kedatangan</font></td>
			<td>:</td>
			<td><input type="text" name="ttanggal_kedatangan" size="30" value="<?php echo $vtanggal_kedatangan;?>"></td>
		</tr>
		<tr>
			<td><font face="Tahoma" color="black" size="2">Alamat Tujuan</font></td>
			<td>:</td>
			<td><input type="text" name="talamat_tujuan" size="30" value="<?php echo $valamat_tujuan;?>"></td>
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