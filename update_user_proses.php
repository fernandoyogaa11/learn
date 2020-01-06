<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $id . $username . $password;

    $koneksi = mysqli_connect('localhost','root','','pretest');

    $query = mysqli_query($koneksi,"UPDATE `user` SET id='$id', username='$username', password='$password' where id=$id");

    header("location: user.php");
?>