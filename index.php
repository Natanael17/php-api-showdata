<?php 
	include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table align="center" border="2" width="70%">
		<tr>
			<td colspan="5">
				<h3><center>DATA PARTISIPAN</center></h3>
			</td>
			<td>
				<h3><center>Ubah</center></h3>
				<a href="insert.php"><center>Tambah</center></a>
			</td>
		</tr>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>level</th>
			<th>fullname</th>
		</tr>
			<?php 

				$qry = mysqli_query($conn,"SELECT * FROM users");
				while($data = mysqli_fetch_array($qry)){
			 ?>
		<tr>
			
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
            <td><?php echo $data['fullname']; ?></td>
            <td>
			<a onclick="return confirm('Yakin untuk menghapus ?')"
			href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
			<a href="update.php?id=<?php echo $data['id']; ?>">Edit</a>
			</td>
			
		</tr>
		
		

	<?php  
}
?>
	</table>
</body>
</html>