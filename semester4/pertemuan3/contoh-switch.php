<form action="input.php" method="post">
	kelas <input type="text name="kelas"><br>
	<input type="submit" value="proses">
</form>

<?php
if (array_key_exists("kelas", $_POST)) {
	switch ($_POST["kelas"]) {
		case "4a":
			echo "kamu mahasiswa kelas 4A";
			break;
		case "4d":
			echo "kamu mahasiswa kelas top";
			break;
		default:
			echo "kamu bukan mahasiswa semester 4";
	}
}
?>