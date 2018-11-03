<form action = "index.php" method = "post">
	<table>
		<tr>
			<td>Pesan</td>
			<td><input type="text" name="pesan"></td>
			<td><input type="submit" name="set"></td>
		</tr>
	</table>
</form>

<?php
session_start();

if(@$_POST["pesan"]){
	$_SESSION ["nama"] = "Nazil";
	$_SESSION ["msg"] = @$_POST ["pesan"];
}
?>