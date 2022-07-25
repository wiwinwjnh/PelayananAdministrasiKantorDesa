<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="Image/Logo.png" type="image/x-icon">
	<style media="screen" type="text/css">
		html,
		body {
			background: linear-gradient(to right, #FCFCFC, #EFEFEF, #FCFCFC);
			margin:0;
			padding:0;
			height:115%;
		}
		#container {
			min-height:100%;
			position:relative;
		}
		#header {
			background: linear-gradient(to right, #FCFCFC, #EFEFEF, #FCFCFC);
			padding:0px;
		}
		#body {
			padding:5px;
			padding-bottom:60px; /* Height of the footer */
		}
		#footer {
			width:100%;
			height:50px; /* Height of the footer */
			background:#193446;
			position:absolute;
			bottom:0px;
		}
	</style>
</head>
<body>
	<div id="container">
	<div id="header">
		<?php
		if (isset($_GET['pUser'])) {
			$vUser=$_GET['pUser'];
		} else {	
			$vUser="";
		}
		include "Header.php";
		include "Menu.php";
		?>
	</div>
	<div id="body">
		<?php
		if (isset($_GET["page"])){
			$vPage=$_GET["page"];
			include "$vPage";
		}else{
			$vPage="";
		}
		?>
		</div>
    <div id="footer">
    	<br>
    	<center><font color="white">Copyright &copy; 2021 - Wiwin Wijanah</font></center>
    </div>
</div>
</body>
</html>