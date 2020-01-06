<!DOCTYPE html>
<html>
<head>
	<title>Pretest</title>
</head>
<body class="ipin">
	<h3>UJIAN PRETEST</h3>

	<table border="1">
		<tbody>
			<?php
				include "koneksi.php";
				$sql = "SELECT * FROM tbl_soal WHERE aktif='Y' ORDER BY RAND ()";
				$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
				$jumlah = mysqli_num_rows($query);
				$no = 0;
				while($data = mysqli_fetch_array($query)){?>
					<form action="kunci.php" method="post">
						<input type="text" name="id[]" value="<?php echo $data['id']; ?>">
						<input type="text" name="jumlah" value="<?php echo $jumlah; ?>">
					
						<tr>
							<td><?php echo $no = $no+1; ?></td>
							<td><?php echo $data['soal'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>A. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="A"><?php echo $data['a'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>B. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="B"><?php echo $data['b'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>C. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="C"><?php echo $data['c'];?></td>
						</tr>
						<tr>
							<td></td>
							<td>D. <input name="pilihan[<?php echo $data['id']?>]" type="radio" value="D"><?php echo $data['d'];?></td>
						</tr>

				<?php }
			?>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
					</td>
				</tr>

			</form>


		</tbody>
	</table>

</body>
</html>