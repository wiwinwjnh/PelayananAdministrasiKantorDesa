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
		if (isset($_GET['pUser'])) {
			$vUser=$_GET['pUser'];
		} else {  
			$vUser="";
		}
		$query=mysqli_query($connection, "SELECT * FROM tbl_akta_kelahiran where username='$vUser' order by no_kk Asc")or die (mysql_error());
		$jumlah = mysqli_num_rows($query);
	?>
	<center>
		<font color='#0b2a32' face='Tahoma' size=4><b><br>STATUS PENGAJUAN SP AKTA KELAHIRAN</b></font><br><br>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2 width=5%>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Pengajuan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>No KK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Kepala Keluarga</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Ibu</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Bayi</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Jenis Kelamin</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tempat Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Berat Bayi</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Panjang Bayi</font></th>
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
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama_ibu"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama_bayi"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["jenis_kelamin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tempat_kelahiran"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_lahir"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["berat_bayi"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["panjang_bayi"];?></font></td>
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