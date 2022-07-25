<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<title>Tampil Dokumen</title>
</head>
<body>
	<?php
	   if (isset($_GET['pfile'])) {
	   	  $vfile=$_GET['pfile'];
	   	  $vjenis=$_GET['jenis'];
	   } else {
	   	  $vfile="";
	   	  $vjenis="";
	   }
	   if ($vjenis=="KTP") {
	   	  $folder="KTP";
	   	} elseif ($vjenis=="KK") {
	   	  $folder="KartuKeluarga";
	   	} elseif ($vjenis=="BukuNikah") {
	   	  $folder="BukuNikah";
	   	} elseif ($vjenis=="SuratPengantar") {
	   	  $folder="SuratPengantar";
	   }
	?>   
	<iframe src="Persyaratan/<?php echo $folder; ?>/<?php echo $vfile; ?>" width="100%" height="768" style="border: l;" allowfullscreen="true" loading="lazy"></iframe>
</body>
</html>