<?php
require('../../connect.php');
session_start();

extract($_POST);
$id = $_SESSION['idUser'];

$sql = "INSERT INTO `address` (`idAddress`, `completeName`, `zipcode`, `state`, `city`, `country`, `address`, `houseNumber`, `complement`, `neighborhood`, `phoneNumber`, `idUser`) VALUES (null, '$completeName', '$zipcode', '$state', '$city', '$country', '$address', '$number', '$complement', '$neighborhood', '$phoneNumber', '$id');";

$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['idAddress'] = $idAddress;
    $_SESSION['completeName'] = $completeName;
    $_SESSION['zipcode'] = $zipcode;
    $_SESSION['state'] = $state;
    $_SESSION['city'] = $city;
    $_SESSION['country'] = $country;
    $_SESSION['address'] = $address;
    $_SESSION['houseNumber'] = $number;
    $_SESSION['complement'] = $complement;
    $_SESSION['neighborhood'] = $neighborhood;
    $_SESSION['phoneNumber'] = $phoneNumber;
    header('Location:address.php');
} else {
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);