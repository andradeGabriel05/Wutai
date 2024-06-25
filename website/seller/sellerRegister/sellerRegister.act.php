<?php
require('../../connect.php');
session_start();

extract($_POST);

$id = $_SESSION['idUser'];
$idSeller = $_SESSION['idSeller'];

$sql = "INSERT INTO `seller` (`idSeller`, `enterpriseName`, `website`, `email`, `creationDate`, `idUser`) VALUES (null, '$enterpriseName', '$email', '$website', current_timestamp(), '$id');";

$result = mysqli_query($conn, $sql);

if ($result) {
    if (!isset($_SESSION['idSeller'])) {
        $_SESSION['idSeller'] = mysqli_insert_id($conn);
    }
    $_SESSION['enterpriseName'] = $enterpriseName;
    header('Location:../../index.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
