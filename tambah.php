<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . $password ;

    $koneksi = mysqli_connect('localhost','root','','pretest');

    $query = mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password')");
    
?>

