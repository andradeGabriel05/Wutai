<?php
require('../../../website/connect.php');

extract($_POST);
session_start();


if(isset($_POST['email']) || isset($_POST['password'])) {
    if(strlen($_POST['email']) < 1 || strlen($_POST['password']) < 1) {
        echo "Please enter your email address or password";
    } else {
        $email = $conn -> real_escape_string($_POST['email']);
        $password = $conn -> real_escape_string($_POST['password']);

        $sql__code = "SELECT * FROM  `user` WHERE `email` = '$email'";
        $sql__query = $conn -> query($sql__code) or die("Falhou". $conN -> error);


        $user = $sql__query->fetch_assoc();


        if(password_verify($password, $user['password']) && $user['email'] == $email){
            if(!isset($_SESSION)) {
                session_start();
            } 
            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;
            $_SESSION['birthdate'] = $birthdate;
            header('Location:../../index.php');            

        } else {
            echo "FALHOU. EMAIL OU SENHA";
        }
    }
} 
