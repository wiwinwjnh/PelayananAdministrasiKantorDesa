<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="style02.css">
  <link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
  <style>
    .tulisan_login{
      text-align: center;
      /*membuat semua huruf menjadi kapital*/
      text-transform: uppercase;
      font-size: 30px;
      font-family: serif;
      font-weight: bold;
      padding: 5px 10px;
    }

    .kotak_judul_login{
      width: 330px;
      background: #e8e6d9;
      /*meletakkan form ke tengah*/
      margin-top: 20px;
      margin-bottom: 0px;
      padding: 5px 5px;
      border-radius: 6px;
    }

    .kotak_badan_login{
      width: 330px;
      background: #e8e6d9;
      /*meletakkan form ke tengah*/
      margin: 2px auto;
      padding: 5px 5px;
      border-radius: 6px;
    }

    .kotak_tombol_login{
      width: 330px;
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
      margin-bottom: 10px;
    }

    .textbox{
      /*membuat lebar form 50% dari kotak login*/
      box-sizing : border-box;
      width: 97%;
      padding: 5px;
      font-size: 11pt;
      margin-top: -6px;
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
  <form action="PeriksaLogin.php" method="POST">
  <div class="kotak_judul_login">
    <table>
    <tr><td><img src="image/Logo.png" width=80 height=90 style="display: block; margin: auto;"></td></tr>
    <td><p class="tulisan_login">LOGIN</p></td>
    </table>
  </div>
  <div class="kotak_badan_login">
  <table>
    <tr>
      <td><label class="label">UserName</label></td>
      <td><label class="label">:</label></td>
      <td><input type="text" name="tusername" class="textbox" placeholder=" UserName" autocomplete="off"></td>
    </tr>
    <tr>
      <td><label class="label">Password</label></td>
      <td><label class="label">:</label></td>
      <td><input type="password" name="tpassword" class="textbox" placeholder=" Password"></td>
    </tr>
  </table>
  </div>
  <div class="kotak_tombol_login">
    <input type="submit" class="btn" value="Login">
    <input type="button" class="btn" value="Batal" onclick="parent.location='Index.php'">
  </div>
  <table bgcolor=#dbd7d2 width=30%>
    <tr><p class="link">Belum punya akun? <a href="register.php" class="link">Daftar di sini</a>.</p></tr>
  </table>
</form>
  </form>
  </center>
</body>
</html>