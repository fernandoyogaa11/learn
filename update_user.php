<html>
    <head>
        <title>UPDATE</title>
    </head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <h1 class="nando"> Update Soal</h1>
        <br>
        <?php
        $id = $_POST['id'];
        $koneksi = mysqli_connect('localhost','root','','pretest');    
        $query = mysqli_query($koneksi,"SELECT * FROM user where id=$id");
        $data = mysqli_fetch_array($query);

        ?>
        <form action="update_user_proses.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" class="form_soal" value="<?php echo $id; ?>">
            <label>usernam</label>
            <br></br>
            <input type="text" name="soal" class="form_soal" value="<?php echo $data['username']; ?>">
            <br>
            <label>password</label>
            <br></br>
            <input type="text" name="a" class="form_soal" value="<?php echo $data['password']; ?>">
            <br>
            
            <input type="submit" class="form_soal" value="KIRIM">
        </form>
    </body>
</html>
