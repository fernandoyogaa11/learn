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
			$data = file_get_contents('soal.json');
			$data = json_decode($data);
			$index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row->id."</td>
						<td>".$row->soal."</td>
						<td>".$row->a."</td>
						<td>".$row->b."</td>
						<td>".$row->c."</td>
						<td>".$row->d."</td>
						<td>".$row->kunci."</td>
						<td>".$row->tanggal."</td>
						<td>".$row->kunci."</td>
						<td>
						<a href='update.php '>Update</a>
						<a href='delete.php?index=".$index."'>Delete</a>
						</td>
					</tr>
				";
 
				$index++;
			}
		?>
	</tbody>
</table>
</body>
</html>