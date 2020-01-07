<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER STATUS</title>
</head>
<form>
         <input type="button" onclick="window.location.href = 'menu.html';" value="MENU"/>
      </form>
<body>
<table border="1">
	<thead>
		<th>ID</th>
		<th>username</th>
		<th>password</th>
	</thead>
	<tbody>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="update_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
	</tbody>
</table>
</body>
</html>