<?php
require_once 'pdo.php';
require_once 'taikhoan.php';

    $mysqli = pdo_get_connection();
    $query = "SELECT * FROM account ";

    $stmt = $mysqli->prepare($query);

    $stmt->execute();

    $formdk = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($formdk as $key => $value) {
        if ($value['user'] == $user) {
            $_SESSION['error']['user'] = "User already exists!! !!" ;
        }else {
            unset($_SESSION['error']['user']);
        }
        if ($value['email'] == $email) {
            $_SESSION['error']['email'] = "Email already exists!! !!" ;
        }else {
            unset($_SESSION['error']['email']);
        }
    }        
    if (!empty($_SESSION['error'])) {
        header('location: index.php?act=dangky');
        exit();
    }else{
        insert_tk($user, $pass, $email);
        header("Location: index.php?act=dangnhap");
    }