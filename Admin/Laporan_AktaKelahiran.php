<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Laporan Pengajuan</title>
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
	    $query=mysqli_query ($connection,"SELECT * FROM tbl_akta_kelahiran where tanggal_pengajuan>='$vTanggal1' and tanggal_pengajuan<='$vTanggal2' order by no_kk asc")
	    or die(mysql_error());
	    ?>
	
	<center>
		<font color='#033500' face='Tahoma' size=5><b><br>LAPORAN PENGAJUAN AKTA KELAHIRAN</b></font><br><br>
		<tr bgcolor='##8080FF' height="30"><font color='black'>
			<form action="FrmHome.php?page=Laporan_AktaKelahiran.php" method="POST">
				<th align='center' colspan="9">
					<font color='black' face='Tahoma' size=2>
						Dari Tanggal :&nbsp;<input type="date" name="date1" value="<?php echo $vTanggal1;?>">&nbsp;&nbsp;&nbsp;
						Sampai Tanggal :&nbsp;<input type="date" name="date2" value="<?php echo $vTanggal2;?>">
						<input type="submit" name="submit" value="Tampilkan">
					</font>
				</th>
			</form>
		</tr>
		<table border="0" cellpadding="2" cellspacing="2" bordercolor="blue" bgcolor="white" width="100%">
			<tr bgcolor='#363636' height="30"><font color='white'>
				<th align='center'><font color='white' face='Tahoma' size=2>No</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Tanggal Pengajuan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>No KK</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Nama Kepala Keluarga</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Nama Ibu</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Nama Bayi</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Jenis Kelamin</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Tempat Dilahirkan</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Tempat Kelahiran</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Tanggal Lahir</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Penolong Kelahiran</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Berat Bayi</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>Panjang Bayi</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>NIK Ibu</font></th>
				<th align='center'><font color='white' face='Tahoma' size=2>NIK Ayah</font></th>
			</tr>

			<?php
			$j=0;
			while($row=mysqli_fetch_array($query)) {
			?>

			<tr>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo $j+1;?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row['tanggal_pengajuan'];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["no_kk"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["nama_kepala_keluarga"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["nama_ibu"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["nama_bayi"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["jenis_kelamin"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["tempat_dilahirkan"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["tempat_kelahiran"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["tanggal_lahir"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["penolong_kelahiran"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["berat_bayi"];?></font></td>
				<td align='left' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["panjang_bayi"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["nik_ibu"];?></font></td>
				<td align='center' bgcolor='#ededed'><font face='Arial' size=2><?php echo $row["nik_ayah"];?></font></td>
			</tr>
			<?php
				$j++;
			}
			?>
			<tr>
				<td align="right" colspan="20" bgcolor='#8f9779'>
					<input type="button" name="kembali" value="Kembali" onclick="parent.location='FrmHome.php?page=Laporan_AktaKelahiran.php'">
					<input type="button" name="cetak" value="Cetak Laporan" onclick="window.open('Cetak_AktaKelahiran.php?date1=<?php echo $vTanggal1;?>&date2=<?php echo $vTanggal2;?>')" >
				</td>
			</tr>
		</table>
	</center>
</body>
</html>