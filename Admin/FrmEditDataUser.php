<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Edit Data Admin</title>
</head>
<body>
	<?php
	include "../conn/koneksi.php";
	$tKode = $_GET['Kode'];
	$query=mysqli_query($connection,"SELECT * FROM tbl_user WHERE username='$tKode'");
	while ($row=mysqli_fetch_array($query)){
		$vusername = $row['username'];
		$vpassword =  $row['password'];
		$vkpassword = $row['password'];
		$vstatus = $row['status'];
	?>
	<font face='tahoma' color='green' size=3><b><br>EDIT DATA PETUGAS</b></font>
	<form method="post" action="UpdateDataUser.php" enctype='multipart/form-data'><br>
	<table align='left'>
		<tr>
			<td><font face='Tahoma' color='black' size=2>UserName</font></td>
			<td>:</td>
			<td><input type='text' name='tusername' size='30' value='<?php echo $vusername?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face='Tahoma' color='black' size=2>Password</font></td>
			<td>:</td>
			<td><input type='password' name='tpassword' size='30' value='<?php echo $vpassword?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face='Tahoma' color='black' size=2>Konfirmasi Password</font></td>
			<td>:</td>
			<td><input type='password' name='tkpassword' size='30' value='<?php echo $vkpassword?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td><font face='Tahoma' color='black' size=2>Status</font></td>
			<td>:</td>
			<td><input type='text' name='tstatus' size='30' value='<?php echo $vstatus?>'>&nbsp;
			</td>
		</tr>
		<tr>
			<td></td><td></td>
			<td><font size='2'><input type='submit' name='submit' value='Update'>
				<input type="button" value="Cancel" onclick=self.history.back()>
			</font>
		</td>
	</tr>
</table>
</form>
<?php
}
?>
</body>
</html>