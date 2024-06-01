<?php
require('../../connect.php');
session_start();

extract($_POST);

$hashPassword = password_hash($password, PASSWORD_DEFAULT);

$email = $_SESSION['email'];

$sql = "INSERT INTO `seller` (`idSeller`, `enterpriseName`, `email`, `creationDate`) VALUES (null, '$enterpriseName', '$email', current_timestamp());";

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