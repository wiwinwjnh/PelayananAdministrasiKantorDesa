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
		$query=mysqli_query($connection, "SELECT * FROM tbl_surat_kematian where username='$vUser' order by nik Asc")or die (mysql_error());
		$jumlah = mysqli_num_rows($query);
	?>
	<center>
		<font color='#0b2a32' face='Tahoma' size=4><b><br>STATUS PENGAJUAN AKTA KEMATIAN</b></font><br><br>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Pengajuan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>NIK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Jenis Kelamin</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tempat Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Alamat</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Kematian</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tempat Kematian</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Sebab Kematian</font></th>
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
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nik"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["jenis_kelamin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tempat_lahir"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_lahir"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["alamat"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_kematian"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tempat_kematian"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["sebab_kematian"];?></font></td>
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