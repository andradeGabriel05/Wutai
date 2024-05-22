<?php
require('../../connect.php');
session_start();

extract($_POST);

$hashPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `birthdate`) VALUES (NULL, '$name', '$surname', '$email', '$hashPassword', '$birthdate')";

$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['email'] = $email;
    $_SESSION['birthdate'] = $birthdate;
    header('Location:../../index.php');
} else {
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);

