<?php
	include 'koneksi.php';
    $idsoal = $_POST['id_soal'];
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $kunci = $_POST['kunci'];
    $gambar = $_POST['gambar'];
    $tanggal = $_POST['tanggal'];
    $aktif = $_POST['aktif'];
    echo $idsoal . $soal . $a . $b . $c . $d . $kunci . $gambar . $tanggal . $aktif;
    $koneksi = mysqli_connect('localhost','root','','pretest');

    $query = mysqli_query($koneksi,"INSERT INTO tbl_soal VALUES('','$soal','$a','$b','$c','$d','$kunci','','$tanggal','$aktif')");


    header("location: view.php");
?>