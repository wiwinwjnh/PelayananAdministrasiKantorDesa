<!DOCTYPE html>
<html>
<head>
	<title>Entry Data Admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
</head>
<body>
	<font face="Tahoma" color="green" size="3"><b><br>Tambah Data Petugas</b></font>
	<form action="Insert_User.php" method="POST"><br>
		<table align="left">
			<tr>
				<td><font face="Tahoma" color="black" size="2">UserName</font></td>
				<td>:</td>
				<td><input type="text" name="tusername" size="30" autocomplete="off"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Password</font></td>
				<td>:</td>
				<td><input type="password" name="tpassword" size="30"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Konfirmasi Password</font></td>
				<td>:</td>
				<td><input type="password" name="tkpassword" size="30"></td>
			</tr>
			<tr>
				<td><font face="Tahoma" color="black" size="2">Status</font></td>
				<td>:</td>
				<td><input type="text" name="tstatus" size="30"></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td><input type="submit" value="Tambah">
				<input type=button value="Kembali" onclick=self.history.back()>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>