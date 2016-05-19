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

print "<form name = 'tools' action = 'fetch.php' method='get'>

<table>
	<tr>
		<th>Homebrew</th>
		<td><input type = 'checkbox' name = 'hb' size = '3' /></td>
	</tr>
	<tr>
		<th>Homebrew Versions</th>
		<td><input type = 'checkbox' name = 'hbVrsn' size = '3' /></td>
	</tr>
	<tr>
		<th>Homebrew Bundle</th>
		<td><input type = 'checkbox' name = 'hbBndle' size = '3' /></td>
	</tr>
	<tr>
		<th>Homebrew Cask</th>
		<td><input type = 'checkbox' name = 'hbCsk' size = '3' /></td>
	</tr>
	<tr>
		<th>XCode</th>
		<td><input type = 'checkbox' name = 'xCode' size = '3' /></td>
	</tr>
	<tr>
		<th>Latest OSX Software Updates</th>
		<td><input type = 'checkbox' name = 'osxUp' size = '3' /></td>
	</tr>
	<tr>
		<td><input type='submit' value='Submit'></td>
	</tr>
</table>

</form>";
		
?>
</body>

</html>