<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Daftar Admin</title>
</head>
<body bgcolor="#FFFFFF">
	<?php  
		include "../conn/koneksi.php";
		$query=mysqli_query($connection, "SELECT * FROM tbl_user order by username Asc")or die (mysql_error());
		$jumlah = mysqli_num_rows($query);
	?>
	<center>
		<font color='#033500' face='Tahoma' size=5><b><br>DAFTAR PETUGAS</b></font><br>
		<a href="FrmHome.php?page=FrmEntryUser.php">+ Tambah Data Petugas</a><br><br>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>UserName</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Password</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Status</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Pilihan Proses</font></th>
			</tr>
			<?php
			$j=0;
			while ($row=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo$j+1;?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["username"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["password"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["status"];?></font></td>
				<td align='center' bgcolor='#ededed' width=8%>
					<a href="FrmHome.php?page=FrmEditDataUser.php&Kode=<?php echo $row['username']?>" style="text-decoration:none" title="Edit"><font color='#3c2e3d' face='tahoma' size='2'>Edit</font>
					</a> |
					<a href="FrmHome.php?page=DeleteDataUser.php&Kode=<?php echo $row['username'] ?>" style="text-decoration: none" title="Hapus"><font color='#96281b' face='tahoma' size='2' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</font>
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