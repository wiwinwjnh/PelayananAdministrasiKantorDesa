<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Status Pengajuan</title>
</head>
<body bgcolor="#FFFFFF">
	<?php  
		include "../conn/koneksi.php";
		$query=mysqli_query($connection, "SELECT * FROM tbl_pindah where username='$vUser' order by no_kk Asc")or die (mysql_error());
		$jumlah = mysqli_num_rows($query);
	?>
	<center>
		<font color='#0b2a32' face='Tahoma' size=4><b><br>STATUS PENGAJUAN SURAT PINDAH KELUAR</b></font><br><br>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Pengajuan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>No KK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Kepala Keluarga</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Alamat Lengkap</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Telepon</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>NIK Pemohon</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Lengkap</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>NIK Kepala Keluarga</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Kepala Keluarga</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Kedatangan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Alamat Lengkap</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Status</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Catatan</font></th>
			</tr>
			<?php
			$j=0;
			while ($row=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=5%><?php echo$j+1;?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_pengajuan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["no_kk"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama_kepala_keluarga"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["alamat"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["telepon"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nik_pemohon"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama_lengkap"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nik_kepala_keluarga"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama_kepala_keluarga_tujuan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_kedatangan"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["alamat_tujuan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["status"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["catat"];?></font></td>
			</tr>
			<?php
				$j++;
			}
			?>
		</table>
	</center>
</body>
</html>