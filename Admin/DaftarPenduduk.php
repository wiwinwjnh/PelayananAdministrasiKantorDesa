<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Data Penduduk</title>
</head>
<body bgcolor="#FFFFFF">
	<?php  
		include "../conn/koneksi.php";
		$query=mysqli_query($connection, "SELECT * FROM tbl_penduduk order by NIK Asc")or die (mysql_error());
		$jumlah = mysqli_num_rows($query);
	?>
	<center>
		<font color='#033500' face='Tahoma' size=5><b><br>DATA PENDUDUK</b></font><br>
		<a href="FrmHome.php?page=EntryPenduduk.php">+ Tambah Data Penduduk</a><br><br>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=20%>NIK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=20%>No KK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Nama</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=20%>Tempat Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Tanggal Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Alamat</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Kelurahan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Kecamatan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Kabupaten</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Jenis Kelamin</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Agama</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Status Perkawinan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Pekerjaan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>Kewarganegaraan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=20%>Pilihan Proses</font></th>
			</tr>
			<?php
			$j=0;
			while ($row=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=5%><?php echo$j+1;?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["NIK"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["No_KK"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Nama"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Tempat_Lahir"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Tanggal_Lahir"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Alamat"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Kelurahan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Kecamatan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Kabupaten"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Jenis_Kelamin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["Agama"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["status_kawin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["pekerjaan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["kewarganegaraan"];?></font></td>
				<td align='center' bgcolor='#ededed' width=8%>
					<a href="FrmHome.php?page=EditDataPenduduk.php&Kode=<?php echo $row['NIK']?>" style="text-decoration:none" title="Edit"><font color='#3c2e3d' face='tahoma' size='2'>Edit</font>
					</a> |
					<a href="FrmHome.php?page=DeleteDataPenduduk.php&Kode=<?php echo $row['NIK'] ?>" style="text-decoration: none" title="Hapus"><font color='#96281b' face='tahoma' size='2' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</font>
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