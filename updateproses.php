<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $kunci = $_POST['kunci'];
    $gambar = $_POST['gambar'];
    $tanggal = $_POST['tanggal'];
    $aktif = $_POST['aktif'];
    echo $id . $soal . $a . $b . $c . $d . $kunci . $gambar . $tanggal . $aktif;

    $koneksi = mysqli_connect('localhost','root','','pretest');

    $query = mysqli_query($koneksi,"UPDATE `tbl_soal` SET id='$id', soal='$soal', a='$a', b='$b', c='$c', d='$d', kunci='$kunci', gambar='$gambar' , tanggal='$tanggal', aktif='$aktif'  where id=$id");

    header("location: view.php");
?>