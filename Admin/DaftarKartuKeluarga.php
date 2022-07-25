<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Kartu Keluarga</title>
</head>
<body bgcolor="#FFFFFF">
	<?php  
		include "../conn/koneksi.php";
		$query=mysqli_query($connection, "SELECT * FROM tbl_kk order by nik Asc")or die (mysql_error());
		$jumlah = mysqli_num_rows($query);
	?>
	<center>
		<font color='#033500' face='Tahoma' size=5><b><br>PENGAJUAN KARTU KELUARGA</b></font><br><br>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>UserName</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>No Handphone</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Pengajuan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>NIK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Lengkap</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Jenis Kelamin</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tempat Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Ayah</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Ibu</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Status</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Detail</font></th>
			</tr>
			<?php
			$j=0;
			while ($row=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=5%><?php echo$j+1;?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=10%><?php echo $row["username"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=10%><?php echo $row["no_hp"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_pengajuan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nik"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["jenis_kelamin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tempat_lahir"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_lahir"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["ayah"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["ibu"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["status"];?></font></td>
				<td align='center' bgcolor='#ededed' width=8%>
					<a href="FrmHome.php?page=FrmTampilKartuKeluarga.php&Kode=<?php echo $row['nik']?>" style="text-decoration:none" title="View"><font color='#3c2e3d' face='tahoma' size='2'>[ View ]</font>
					</a>
				</td>
			</tr>
			<?php
				$j++;
			}
			?>
		</table>
	</center>
</body>
</html>