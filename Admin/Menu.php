<html>
<head>
	<meta charset="UTF-8">
	<title>Menu Utama</title>
	<style type="text/css" media="screen">
body
{
	font-family:'Trebuchet MS'
}
*
{
	-webkit-transition:all .21s ease-in-out;
	-moz-transition:all .21s ease-in-out;
	-o-transition:all .21s ease-in-out;
	-ms-transition:all .21s ease-in-out;
	transition:all .21s ease-in-out
}
.clear
{
	clear:both
}
header
{
	width:100px;
	margin:100px auto 0
}

.navigation
{
	position:relative;
	background:#fefefe;
	box-shadow:0 1px 4px #e0e0e0;
	-webkit-box-shadow:0 1px 4px #e0e0e0;
	-moz-box-shadow:0 1px 4px #e0e0e0;
	border:1px solid #e0e0e0;
}

.navigation ul
{
	margin:0;
	padding:0
}

.navigation ul li
{
	float:left;
	list-style:none;
	position:relative;
}

.navigation ul li a
{
	display:block;
	color:#404040;
	text-decoration:none;
	padding:5px
}

.navigation ul li a:hover
{
	background:#404040;
	color:#fefefe
}

.navigation ul li ul
{
	position:absolute;
	display:none;
	width:140px;
	background:#fefefe;
	box-shadow:0 1px 4px #e0e0e0;
	-webkit-box-shadow:0 1px 4px #e0e0e0;
	-moz-box-shadow:0 1px 4px #e0e0e0;
	border:1px solid #e0e0e0;
	margin:0 auto
}

.navigation ul ul ul
{
	display:none;
	position:absolute;
	right:-150px;
	top:0;
}

.navigation ul li:hover > ul,.navigation ul ul li:hover > ul
{
	display:block
}

.navigation ul li.clear,.navigation ul ul li
{
	float:none
}
	</style>
</head>

<body>

<center>
	<nav class="navigation">
	<ul>
		<li><a href="FrmHome.php?page=Home.php">Home</a></li>
		<li><a href="#">Master Data</a>
			<ul>
				<li><a href="FrmHome.php?page=FrmDaftarUser.php">Data Petugas</a></li>
				<li><a href="FrmHome.php?page=DaftarPenduduk.php">Data Penduduk</a></li>
			</ul>
		</li>
		<li><a href="#">Pengajuan</a>
			<ul>
				<li><a href="FrmHome.php?page=DaftarAktaKelahiran.php">Surat Pengantar Akta Kelahiran</a></li>
				<li><a href="FrmHome.php?page=DaftarSuratKematian.php">Surat Pengantar Akta Kematian</a></li>
				<li><a href="FrmHome.php?page=DaftarKartuKeluarga.php">Surat Pengantar Kartu Keluarga</a></li>
				<li><a href="FrmHome.php?page=DaftarPindahKeluar.php">Surat Pengantar Pindah Keluar</a></li>
			</ul>
		</li>
		<li><a href="#">Laporan</a>
			<ul>
				<li><a href="FrmHome.php?page=Laporan_AktaKelahiran.php">Laporan SP Akta Kelahiran</a></li>
				<li><a href="FrmHome.php?page=Laporan_AktaKematian.php">Laporan SP Akta Kematian</a></li>
				<li><a href="FrmHome.php?page=Laporan_KartuKeluarga.php">Laporan SP Kartu Keluarga</a></li>
				<li><a href="FrmHome.php?page=Laporan_PindahKeluar.php">Laporan SP Pindah Keluar</a></li>
			</ul>
		</li>
		<li><a href="">Tentang Kami</a>
			<ul>
				<li><a href="FrmHome.php?page=profil.php">Profil</a></li>
				<li><a href="FrmHome.php?page=kontak.php">Kontak Kami</a></li>
			</ul>
		</li>
		<li><a href="Keluar.php">Keluar</a>
			<li class="clear"></li>
		</li>
	</ul>
	</nav>
</body>
</html>