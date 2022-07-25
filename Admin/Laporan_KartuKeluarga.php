<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Daftar Laporan</title>
</head>
<body bgcolor="#FFFFFF">
	<?php 
		date_default_timezone_set('Asia/Jakarta');
		include "../conn/koneksi.php";
		$vTampilkan=0;
    	$vTanggal1=date('m-d-Y');
	    $vTanggal2=date('m-d-Y');
	    if (isset($_POST['submit'])){
	    	$vTanggal1=$_POST['date1'];
	    	$vTanggal2=$_POST['date2'];
	    }
	    $query=mysqli_query ($connection,"SELECT * FROM tbl_kk where tanggal_pengajuan>='$vTanggal1' and tanggal_pengajuan<='$vTanggal2' order by nik asc")
	    or die(mysql_error());
	    ?>

	<center>
		<font color='#033500' face='Tahoma' size=5><b><br>LAPORAN PENGAJUAN KARTU KELUARGA</b></font><br><br>
		<form method="POST" action="" class="form-inline mt-3">
			<label for="date1">Dari Tanggal</label>
			<input type="date" name="date1" id="date1" class="form-control mr-2">
			<label for="date2">Sampai Tanggal</label>
			<input type="date" name="date2" id="date2" class="form-control mr-2">
			<button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
		</form>

		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white" width="100%">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2 width=1%>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Pengajuan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>NIK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Nama Lengkap</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Jenis Kelamin</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tempat Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Tanggal Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Agama</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Pendidikan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Jenis Pekerjaan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Status Pernikahan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Status Keluarga</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Kewarganegaraan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Ayah</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2 width=10%>Ibu</font></th>
			</tr>

			<?php
			$j=0;
			while($row=mysqli_fetch_array($query)) {
			?>

			<tr>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=5%><?php echo $j+1;?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_pengajuan"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nik"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["nama"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["jenis_kelamin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tempat_lahir"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["tanggal_lahir"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["agama"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["pendidikan"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["pekerjaan"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["status_pernikahan"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["status_keluarga"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["kewarganegaraan"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["ayah"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2 width=20%><?php echo $row["ibu"];?></font></td>
			</tr>
			<?php
				$j++;
			}
			?>
			<tr>
				<td align="right" colspan="20" bgcolor='#8f9779'>
					<input type="button" name="kembali" value="Kembali" onclick="parent.location='FrmHome.php?page=Laporan_KartuKeluarga.php'">
					<input type="button" name="cetak" value="Cetak Laporan" onclick="window.open('Cetak_KartuKeluarga.php?date1=<?php echo $vTanggal1;?>&date2=<?php echo $vTanggal2;?>')" >
				</td>
			</tr>
		</table>
	</center>
</body>
</html>