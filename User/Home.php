<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Home.css">
  <link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
  <title>Beranda</title>
</head>
<body>
  <?php
  if (isset($_GET['pUser'])) {
      $vUser=$_GET['pUser'];
  } else {  
    $vUser="";
  }
  ?>
  <main>
    <section class="presentation">
      <div class="introduction">
        <div class="intro-text">
          <h1>Selamat Datang <?php echo $vUser;?></h1>
          <p>Di Website Kantor Desa Cilegong</p>
        </div>
        <div class="cta">
          <button class="cta-select" onclick="parent.location='FrmHome.php?page=kontak.php&pUser=<?php echo $vUser;?>'">Kontak Kami</button>
          <button class="cta-add" onclick="parent.location='FrmHome.php?page=Profil.php&pUser=<?php echo $vUser;?>'">Profil Desa</button>
        </div>
      </div>
      <div class="cover">
        <img src="Image/User.png" alt="matebook" />
      </div>
    </section>
  </main>
</body>
</html>