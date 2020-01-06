<?php
    include 'koneksi.php';
    $id = (isset($_GET['id']) ? $_GET['id'] : '');
    $koneksi = mysqli_connect('localhost','root','','pretest');
       $query = mysqli_query($koneksi,"DELETE FROM user WHERE id=$id");

       header("location: user.php");

?>