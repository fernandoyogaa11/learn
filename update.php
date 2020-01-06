<html>
    <head>
        <title>update</title>
    </head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <h1 class="nando"> Update Soal</h1>
        <br>
        <?php
    $id = (isset($_GET['id']) ? $_GET['id'] : '');
    $koneksi = mysqli_connect('localhost','root','','pretest');    
         $query = mysqli_query($koneksi,"SELECT * FROM tbl_soal where id=$id");
         $data = mysqli_fetch_array($query);

        ?>
        <form action="updateproses.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" class="form_soal" value="<?php echo $id; ?>">
            <label>Soal</label>
            <br></br>
            <input type="text" name="soal" class="form_soal" value="<?php echo $data['soal']; ?>">
            <br>
            <label>Jawaban A</label>
            <br></br>
            <input type="text" name="a" class="form_soal" value="<?php echo $data['a']; ?>" placeholder = "jawaban a">
            <br>
            <label>Jawaban B</label>
            <br></br>
            <input type="text" name="b" class="form_soal" value="<?php echo $data['b']; ?>" placeholder = "jawaban b">
            <br>
            <label>Jawaban C</label>
            <br></br>
            <input type="text" name="c" class="form_soal" value="<?php echo $data['c']; ?>" placeholder = "jawaban c">
            <br>
            <label>Jawaban D</label>
            <br></br>
            <input type="text" name="d" class="form_soal" value="<?php echo $data['d']; ?>" placeholder = "jawaban d">
            <br>
            <label>Kunci Jawaban</label>
            <br></br>
            <input type="text" name="kunci" class="form_soal" value="<?php echo $data['kunci']; ?>" placeholder = "kunci jawaban">
            <br>
            <input type="hidden" name="gambar" class="form_soal" value="<?php echo $gambar; ?>" >
            <br>
            <label>Tanggal</label>
            <br></br>
            <input type="text" name="tanggal" class="form_soal" value="<?php echo $data['tanggal']; ?>" placeholder = "tanggaal">
            <br>
            <label>Aktif</label>
            <br></br>
            <input type="text" name="aktif" class="form_soal" value="<?php echo $data['aktif']; ?>" placeholder = "KETIK Y">
            <br><br>
            
            <input type="submit" class="form_soal" value="KIRIM">
        </form>
    </body>
</html>
