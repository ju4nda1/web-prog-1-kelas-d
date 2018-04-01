<html>
<head>
	<title>Tambah Anggota</title>
</head>
 
<body>
<h2>Silahkan Masukkan Data Anda</h2>
<hr>
	<a href="index.php">Kembali Ke Menu Beranda</a>
	<br/><br/>
 
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim_mhs"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$jurusan = $_POST['jurusan'];
		$nim_mhs = $_POST['nim_mhs'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,jurusan,nim_mhs) VALUES('$name','$jurusan','$nim_mhs')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>