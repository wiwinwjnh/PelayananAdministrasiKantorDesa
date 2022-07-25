<?php
//Periksa Login
include"../conn/koneksi.php";
$vusername=$_POST["tusername"];
$vpassword=$_POST["tpassword"];
echo $vusername;
echo $vpassword;
$cari="SELECT * From tbl_user WHERE username='$vusername' and password='$vpassword'"; $hasil=mysqli_query($connection,$cari)or die (mysql_error());
//$row=mysql_fetch_row($hasil);
//$ada=mysql_num_rows($hasil);
if($row=mysqli_fetch_array($hasil))
{
	if($row['username']=='Administrator'){
		?><script type="	"></script>t>
			document.location="FrmHome.php?pUser=<?php echo $row['username']?>";
		</script>
		<?php
	}
	else
		{
			?><script>
				document.location="FrmHome.php?page=Home.php&pUser=<?php echo $row['username']?>";
				</script>
				<?php
			}
		}
		else
			{
				?><script>
					alert("UserName atau Password anda salah !");
				document.location="Index.php";
				</script>
				<?php
			}
			?>