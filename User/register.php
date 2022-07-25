<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="style02.css">
  <link rel="icon" href="Image/Logo.png" type="image/gif" sizes="17x17">
  <style>
    .tulisan_register{
     text-align: center;
      /*membuat semua huruf menjadi kapital*/
      text-transform: uppercase;
      font-size: 27px;
      font-family: serif;
      font-weight: bold;
      padding: 5px 10px;
    }
    .kotak_judul_register{
      width: 400px;
      background: #e8e6d9;
      /*meletakkan form ke tengah*/
      margin-top: 30px;
      margin-bottom: 0px;
      padding: 5px 5px;
      border-radius: 6px;
    }
    .kotak_badan_register{
      width: 400px;
      background: #e8e6d9;
      /*meletakkan form ke tengah*/
      margin: 2px auto;
      padding: 5px 5px;
      border-radius: 6px;
    }
    .kotak_tombol_register{
      width: 400px;
      background: #999999;
      /*meletakkan form ke tengah*/
      margin: 2px auto;
      padding: 10px 10px;
      border-radius: 6px;
    }
    .label{
      font-size: 12pt;
      font-family: serif;
      padding: 5px;
      margin-bottom: 9px;
    }
    .textbox{
      /*membuat lebar form 50% dari kotak register*/
      box-sizing : border-box;
      width: 108%;
      padding: 5px;
      font-size: 11pt;
      margin-top: -4px;
      margin-bottom: 1px;
      border-radius: 3px;
    }
    .btn{
      background: #323339;
      color: white;
      font-size: 12pt;
      width: 40%;
      border: white 1pt solid;
      border-radius: 6px;
      padding: 8px 10px;
    }
    .link{
      color: #999999;
    }
  </style>
</head>
<body>
  <center>
  <?php
    include "../conn/koneksi.php";
    ?>
  <form action="Insert_Register.php" method="POST">
  <div class="kotak_judul_register">
    <table>
    <tr><td><img class="logo" src="Image/Logo.png" width=80 height=90 style="display: block; margin: auto;"></td></tr>
    <td><p class="tulisan_register">DAFTAR</p></td>
    </table>
  </div>
  <div class="kotak_badan_register">
  <table>
    <tr>
      <td><label class="label">NIK</label></td>
      <td><label class="label">:</label></td>
      <td><input type="text" name="tnik" minlength="16" maxlength="16" class="textbox" placeholder=" Nomor Induk Kependudukan"></td>
    </tr>
    <tr>
      <td><label class="label">Nama Lengkap</label></td>
      <td><label class="label">:</label></td>
      <td><input type="text" name="tnama" class="textbox" placeholder=" Nama Lengkap sesuai KTP"></td>
    </tr>
    <tr>
      <td><label class="label">UserName</label></td>
      <td><label class="label">:</label></td>
      <td><input type="text" name="tusername" class="textbox" placeholder=" UserName"></td>
    </tr>
    <tr>
      <td><label class="label">No. Handphone</label></td>
      <td><label class="label">:</label></td>
      <td><input type="text" name="tno_hp" class="textbox" placeholder=" Nomor Handphone"></td>
    </tr>
    <tr>
      <td><label class="label">Password</label></td>
      <td><label class="label">:</label></td>
      <td><input type="password" name="tpassword" class="textbox" placeholder=" Password"></td>
    </tr>
    <tr>
      <td><label class="label">Konfirmasi Password</label></td>
      <td><label class="label">:</label></td>
      <td><input type="password" name="tkpassword" class="textbox" placeholder=" Konfirmasi Password"></td>
    </tr>
  </table>
  </div>
  <div class="kotak_tombol_register">
    <input name="submit" type="submit" class="btn" value="Daftar">
    <input type="button" class="btn" value="Batal" onclick="parent.location='register.php'">
  </div>
  <table bgcolor=#dbd7d2 width=30%>
    <p class="link">Sudah punya akun? <a href="Index.php" class="link">Login di sini</a>.</p>
  </table>
</form>
  </form>
  </center>
</body>
</html>