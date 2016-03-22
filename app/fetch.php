<html>

<title>JumpStart</title>

<style>

body{background-color: ; width: 100%}
html{width: 100%}
td{text-align: right; background-color: ; border-left:solid 75px transparent}
th{background-color: ;}
table{border-collapse: separate; margin: 0 auto; margin-top: 13%; border-spacing: 10px;}
input.hide{visibility: hidden}

*{font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif}

</style>

<body background="bkgrd.png">

<?php

$choices = $_GET;
	
	foreach ($choices as $index=>$val) 
	{
		print "$index";
	}
?>
</body>

</html>