<!DOCTYPE html>
<html>
<head>
	<title>Tambah Soal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="nando"> Input Soal</h1>
<form action="tambahsoalproses.php" method="POST" enctype="multipart/form-data">

        	<label></label>
			
			<input type="hidden" name="id_soal" class="form_soal" placeholder="id soal">
 <br>
 			<label>Soal</label>
			<br></br>
			<input type="text" name="soal" class="form_soal" placeholder="soal">
 <br>
 <br>
			<label>Jawaban A</label>
			<br></br>
			<input type="text" name="a" class="form_soal" placeholder="jawaban a">
<br>
<br>
			<label>Jawaban B</label>
			<br></br>
			<input type="text" name="b" class="form_soal" placeholder="jawaban b">
<br>
<br>
			<label>Jawaban C</label>
			<br></br>
			<input type="text" name="c" class="form_soal" placeholder="jawaban c">
<br>
<br>
			<label>Jawaban D</label>
			<br></br>
			<input type="text" name="d" class="form_soal" placeholder="jawaban d">
<br>
<br>
			<label>Kunci Jawaban</label>
			<br></br>
			<input type="text" name="kunci" class="form_soal" placeholder="jawaban kunci">
<br>
<br>		
			<label></label>
			<input type="hidden" name="gambar" class="form_soal" placeholder="">
<br>
<br>
			<label>Date</label>
			<br></br>
			<input type="date" name="tanggal" class="form_soal"  placeholder="YYYY-MM-DD"  >
<br>
<br>
			<label>aktif</label>
			<br></br>
			<input type="text" name="aktif" class="form_soal" placeholder="ketik Y">
<br><br>
        	<input type="submit" class="tombol_soal" value="DAFTAR">
<br>
<br>
        </form>
</body>
</html>