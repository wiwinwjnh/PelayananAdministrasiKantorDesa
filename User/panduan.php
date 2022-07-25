<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="panduan.css">
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>About Me</title>
</head>
<body>
<?php
  if (isset($_GET['pUser'])) {
      $vUser=$_GET['pUser'];
  } else {  
    $vUser="";
  }
?>

<!-- Main -->
<section class="section about" id="about">
  <div class="title">
    <h1>Panduan Penggunaan</h1>
  </div>
  <div class="about-center container">
    <div class="right" data-aos="fade-left">
      <h1>Mudahnya Masyarakat Mengurus Administrasi Kependudukan</h1>
      <p>Aplikasi ini hadir untuk semakin memudahkan masyarakat desa yang akan mengurus administrasi kependudukan. Masyarakat tidak perlu ribet karena bisa mengurus langsung dari layar smartphone.<br>Total ada empat kemudahan yang bisa didapatkan masyarakat melalui aplikasi ini, yakni :<br>1. Pengajuan Surat Pengantar Akta Kelahiran.<br>2. Pengajuan Surat Pengantar Akta Kematian.<br>3. Pengajuan Surat Pengantar Kartu Keluarga.<br>4. Pengajuan Surat Pengantar Pindah Keluar.</p>
      <p>1. Anda harus login terlebih dahulu sebelum Anda bisa mengajukan pembuatan surat pengantar. Halaman utama yang akan tampil adalah form login. Masukkan username dan password Anda. Kemudian klik tombol login.</p>
      <center><img src="Image/login.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>2. Jika Anda belum mempunyai akun, dapat registrasi terlebih dahulu dengan meng-klik link <i>Daftar disini.</i> Dan masukkan nik, nama lengkap, username, nomor handphone, dan password.</p>
      <center><img src="Image/register.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>3. Anda akan menuju kehalaman utama jika login berhasil. Untuk Pengajuan surat pengantar Anda bisa memilih menu yang disediakan di navbar.</p>
      <center><img src="Image/menu.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center><br>
      <center><img src="Image/sobir.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>

      <h1>Pengajuan Surat Pengantar Akta Kelahiran</h1><br>
      <p>1. Klik <b><i>"surat pengantar akta kelahiran"</i></b> pada menu pengajuan.</p>
      <center><img src="panduan/menu ak.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>2. Kemudian Anda harus mengisi kolom dan mengunggah dokumen persyaratannya. Pastikan No KK, Nama Kepala Keluarga, Nama Ibu, Nama Bayi, Jenis Kelamin, Tempat Dilahirkan, Tempat Kelahiran, Hari, Tanggal Lahir, Pukul, Jenis Kelahiran, Penolong Kelahiran, Berat Bayi, Panjang Bayi, NIK Ibu, NIK Ayah, Foto/Scan KTP Orang Tua, Foto/Scan KK, Foto/Scan Buku/Akte Nikah, Foto/Scan Surat Keterangan Kelahiran sudah terisi dengan benar. Kemudian klik tombol submit.</p>
      <center><img src="panduan/Kelahiran.jpg" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>3. Kemudian pengajuan Anda akan di proses dengan cepat berdasarkan aduan dan data yang Anda berikan. Dan Anda juga bisa melihat status pengajuan akta kelahiran beserta catatan atau alasan status pengajuan Anda pada menu status pengajuan.</p>
      <center><img src="Image/status.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>

      <h1>Pengajuan Surat Pengantar Akta Kematian</h1><br>
      <p>1. Klik <b><i>"surat pengantar akta kematian"</i></b> pada menu pengajuan.</p>
      <center><img src="Image/menu.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>2. Kemudian Anda harus mengisi kolom dan mengunggah dokumen persyaratannya. Pastikan Tanggal Pengajuan, No Handphone, NIK, Nama, Jenis Kelamin, Tempat Lahir, Tanggal Lahir, Pekerjaan, Alamat, Hari, Tanggal Kematian, Tempat Kematian, Sebab Kematian, Foto/Scan Surat Keterangan Kematian, Foto/Scan KK, Foto/Scan KTP sudah terisi dengan benar. Kemudian klik tombol submit.</p>
      <center><img src="panduan/Kematian.jpg" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>3. Kemudian pengajuan Anda akan di proses dengan cepat berdasarkan aduan dan data yang Anda berikan. Dan Anda juga bisa melihat status pengajuan akta kematian beserta catatan atau alasan status pengajuan Anda pada menu status pengajuan.</p>
      <center><img src="Image/status.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>

      <h1>Pengajuan Surat Pengantar Kartu Keluarga</h1><br>
      <p>1. Klik <b><i>"surat pengantar kartu keluarga"</i></b> pada menu pengajuan.</p>
      <center><img src="Image/menu.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>2. Kemudian Anda harus mengisi kolom dan mengunggah dokumen persyaratannya. Pastikan Tanggal Pengajuan, No Handphone, NIK, Nama, Jenis Kelamin, Tempat Lahir, Tanggal Lahir, Pekerjaan, Alamat, Hari, Tanggal Kematian, Tempat Kematian, Sebab Kematian, Foto/Scan Surat Keterangan Kematian, Foto/Scan KK, Foto/Scan KTP sudah terisi dengan benar. Kemudian klik tombol submit.</p>
      <center><img src="panduan/Kk.jpg" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>3. Kemudian pengajuan Anda akan di proses dengan cepat berdasarkan aduan dan data yang Anda berikan. Dan Anda juga bisa melihat status pengajuan akta kelahiran beserta catatan atau alasan status pengajuan Anda pada menu status pengajuan.</p>
      <center><img src="Image/status.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>

      <h1>Pengajuan Surat Pengantar Pindah Keluar</h1><br>
      <p>1. Klik <b><i>"surat pengantar pindah keluar"</i></b> pada menu pengajuan.</p>
      <center><img src="Image/menu.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>2. Kemudian Anda harus mengisi kolom dan mengunggah dokumen persyaratannya. Pastikan Tanggal Pengajuan, No Handphone, No KK, Nama Kepala Keluarga, Alamat Lengkap, Telepon, NIK Pemohon, Nama Lengkap, Status No KK Bagi Yang Pindah, No KK, NIK Kepala Keluarga, Nama Kepala Keluarga, Tanggal Kedatangan, Alamat Lengkap, Foto/Scan KTP, Foto/Scan KK sudah terisi dengan benar. Kemudian klik tombol submit.</p>
      <center><img src="panduan/Pindah.jpg" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>
      <p>3. Kemudian pengajuan Anda akan di proses dengan cepat berdasarkan aduan dan data yang Anda berikan. Dan Anda juga bisa melihat status pengajuan akta kelahiran beserta catatan atau alasan status pengajuan Anda pada menu status pengajuan.</p>
      <center><img src="Image/status.png" alt="" style="display: block; margin: auto; height: 130px; width: 250px"></center>

    </div>
  </div>
</section>

</body>
</html>