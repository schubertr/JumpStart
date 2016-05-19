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
$i = 0;

$myfile = fopen("testFile.txt", "w") or die("Unable to open file!");
	
foreach ($choices as $index=>$val) 
{
	fwrite($myfile, $index);
	fwrite($myfile, "\n");
}

fclose($myfile);

print "<prev>";
print_r($choices);
print "</prev>";

$file = 'testFile.txt';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}

?>
</body>

</html>