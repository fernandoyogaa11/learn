<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lihat soal</title>
</head>
<form>
         <input type="button" onclick="window.location.href = 'menu.html';" value="MENU"/>
      </form>
<body>
<table border="1">
	<thead>
		<th>ID</th>
		<th>SOAL</th>
		<th>JAWABAN A</th>
		<th>JAWABAN B</th>
		<th>JAWABAN C</th>
		<th>JAWABAN D</th>
		<th>KUNCI</th>
		<th>TANGGAL</th>
		<th>AKTIF</th>
	</thead>
	<tbody>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbl_soal");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['soal']; ?></td>
				<td><?php echo $d['a']; ?></td>
				<td><?php echo $d['b']; ?></td>
				<td><?php echo $d['c']; ?></td>
				<td><?php echo $d['d']; ?></td>
				<td><?php echo $d['kunci']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['aktif']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
</table>
</body>
</html>