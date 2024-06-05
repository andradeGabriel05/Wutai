<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));

require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

session_start();
extract($_POST);

$idAddress = $_SESSION['idAddress'];

$sqlAddressUpdate = "UPDATE `address` SET 
    `completeName` = '$completeName',
    `zipcode` = '$zipcode',
    `state` = '$state',
    `city` = '$city',
    `country` = '$country',
    `address` = '$address',
    `houseNumber` = '$number',
    `complement` = '$complement',
    `neighborhood` = '$neighborhood',
    `phoneNumber` = '$phoneNumber'
    WHERE `idAddress` = '$idAddress'";

if(mysqli_query($conn, $sqlAddressUpdate)) {
    header('Location:address.php');
    
} else {
    echo "Erro ao atualizar endereço: ". mysqli_error($conn);
}