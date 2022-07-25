<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Cetak Laporan</title>
</head>
<body>
	<?php
	date_default_timezone_set('Asia/Jakarta');
	include "../conn/koneksi.php";
	$vTampilkan=0;
	$vTanggal1=date('m-d-Y');
	$vTanggal2=date('m-d-Y');
	if (isset($_GET['date1'])){
		$vTanggal1=$_GET['date1'];
	}
	if (isset($_GET['date1'])){
		$vTanggal2=$_GET['date2'];
	}
	$query=mysqli_query ($connection,"SELECT * FROM tbl_surat_kematian where tanggal_pengajuan>='$vTanggal1' and tanggal_pengajuan<='$vTanggal2' order by nik asc")
	or die(mysql_error());
	?>

	<center>
		<table width="100%" border="0">
			<tr>
				<td width="5%"><img src="Image/Logo.png" width="100" height="120"></td1>
				<td width="100%">
					<center>
						<font size="5">PEMERINTAHAN KABUPATEN PURWAKARTA</font><br>
						<font size="5">KECAMATAN JATILUHUR</font><br><font size="6"><b>KANTOR DESA CILEGONG</b></font><br>
						<font size="3"><i>Jl. Ir. H DJuanda No. 161 Cilegong Kecamatan Jatiluhur Kabupaten Purwakarta (41152) Telp./Fax (0331)758005</i></font>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
		</table>
		<h2 style="text-align: center;">Laporan Pengajuan Akta Kematian</h2>
		<table border="0" width ="100%">
			<tr height="30"><font color='black'>
				<th align='center' colspan="9">
					<font face='Tahoma' size=2>
						Dari Tanggal :&nbsp;<font face='Tahoma' size=2><?php echo date('d-m-Y',strtotime($vTanggal1));?></font>&nbsp;&nbsp;&nbsp;
						Sampai Tanggal :&nbsp;<font face='Tahoma' size=2><?php echo date('d-m-Y',strtotime($vTanggal2)) ;?></font>
					</font>
				</th>
			</tr>
		</table>
		<table border="1">
		<tr>
			<th>No</th>
			<th>Tanggal Pengajuan</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Pekerjaan</th>
			<th>Alamat</th>
			<th>Tanggal Kematian</th>
			<th>Tempat Kematian</th>
			<th>Sebab Kematian</th>
		</tr>
		<?php
		$j=0;
		while ($d=mysqli_fetch_array($query)) {
		?>
			<tr>
				<td align="center"><?php echo $j+1;?></font></td>
				<td style='text-align: center;'><?php echo $d['tanggal_pengajuan'] ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['tempat_lahir']; ?> </td>
				<td align="center"><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['pekerjaan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td align="center"><?php echo $d['tanggal_kematian']; ?></td>
				<td><?php echo $d['tempat_kematian']; ?></td>
				<td><?php echo $d['sebab_kematian']; ?></td>
			</tr>
			<?php
				$j++;
			}
			?>
	</table>
	<br><br>
		<table width="100%">
			<tr>
				<td width="80%"><br><br><br><br></td>
				<td align="center">Purwakarta,&nbsp;<?php echo date('d M Y');?><br>
				Kepala Desa<br><br><br><br>Bpk Hasanudin Baim Hasan</td>
			</tr>
	     </table>
	</center>	
	<script>
		window.print();
	</script>
</body>
</html>