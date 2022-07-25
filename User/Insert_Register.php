<?php  
include "../conn/koneksi.php";
$vnik=$_POST['tnik'];
$vnama=$_POST['tnama'];
$vusername=$_POST['tusername'];
$vno_hp=$_POST['tno_hp'];
$vpassword=md5($_POST['tpassword']);
$vkpassword=md5($_POST['tkpassword']);
if (strlen($vnik)<>16) {
   ?>
      <script type="text/javascript">
	     var answer=confirm("Penulisan NIK salah (harus 16 digit). Ulang ?")
	     if(answer){
		    window.location=history.go(-1);
	     }else{
		    window.location="index.php";
	     }
	  </script>
   <?php
} else {
   if ($vpassword<>$vkpassword) {
   ?>
      <script type="text/javascript">
	     var answer=confirm("Password dan Konfirmasi Password tidak sama. Ulang ?")
	     if(answer){
		    window.location=history.go(-1);
	     }else{
		    window.location="index.php";
	     }
	  </script>
   <?php
   } else {
	  $query=mysqli_query($connection, "INSERT INTO tbl_registrasi(nik, nama, username, no_hp, password) VALUES ('$vnik','$vnama','$vusername','$vno_hp','$vpassword')")or die (mysqli_error());
	  if($query) {
		 ?>
	 	 <script language="javascript">
			document.location='Index.php'</script>
		 <?php
	  }
   }
}
?>
