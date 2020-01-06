<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENU</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<header class="kika">
    <form>
         <input type="button" onclick="window.location.href = 'menu.html';" value="MENU"/>
      </form>
</header>
<body>
    
    <ul>
    <?php
                $koneksi = mysqli_connect('localhost','root','','pretest');
                $query = mysqli_query($koneksi,"SELECT * FROM tbl_soal");

                while($data = mysqli_fetch_array($query)){
            ?>
                <li><?php echo $data['id'] . $data['soal'] . $data['a'] . $data['b'] . $data['c'] . $data['d'] . $data['kunci'] . " - " . $data['tanggal'] . $data['aktif']?>
                    <br>
                    <a href="update.php?id=<?php echo $data['id']?>">Update</a>
                    <br>
                    <a href="hapus.php?id=<?php echo $data['id']?>">Delete</a>
                </li>
            <?php
                }
            ?>
    </ul>
</body>
</html>