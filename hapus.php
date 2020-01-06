<?php
       $id = $_GET['id'];
       $koneksi = mysqli_connect('localhost','root','','pretest');

       $query = mysqli_query($koneksi,"DELETE FROM tbl_soal WHERE id=$id");
   
       header("location: view.php");
?>