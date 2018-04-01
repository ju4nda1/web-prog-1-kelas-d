<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY nim DESC");
?>
 
<html>
<head>    
    <title>Beranda</title>
</head>
 
<body bgcolor="red">
<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<a href="tambah.php">Tambah Anggota Baru</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Nim</th> <th>Jurusan</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['nim_mhs']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";    
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>