<?php

include 'config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$check_pass = $_POST['check_password'];

if($check_pass == $pass){
    $name = $firstname . " " . $lastname;
    $add = mysqli_query($connect, "insert into user (name, email, password, roles) values 
    ('$name', '$email', '$pass', 1)");

    if(!$add){
        echo "gagal memuat data";
    }
    else{
        header('location:../index.php?pesan=berhasil');
    }
}else{
    header('location:../register.php?pesan=gagal');
}

?>