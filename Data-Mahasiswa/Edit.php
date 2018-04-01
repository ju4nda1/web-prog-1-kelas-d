<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$nim = $_POST['nim'];
	
	$name=$_POST['name'];
	$nim_mhs=$_POST['nim_mhs'];
	$jurusan=$_POST['jurusan'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',jurusan='$jurusan',nim_mhs='$nim_mhs' WHERE nim=$nim");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE nim=$nim");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$jurusan = $user_data['jurusan'];
	$nim_mhs = $user_data['nim_mhs'];
}
?>
<html>
<head>	
	<title>Edit Data Anggota</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
			</tr>
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim_mhs" value=<?php echo $nim_mhs;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>