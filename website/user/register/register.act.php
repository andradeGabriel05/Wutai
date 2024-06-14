<?php
require('../../connect.php');
session_start();

extract($_POST);

$hashPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `user` (`idUser`, `name`, `surname`, `email`, `password`, `birthdate`) VALUES (NULL, '$name', '$surname', '$email', '$hashPassword', '$birthdate')";

$sql__query = mysqli_query($conn, $sql);

header('Location:../login/login.php');


mysqli_close($conn);

