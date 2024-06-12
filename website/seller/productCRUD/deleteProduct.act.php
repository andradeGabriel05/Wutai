<?php
session_start();
@define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

$idProduct = $_GET['productId'];


echo $idProduct;

$sqlDelete = "DELETE FROM `product` WHERE `idProduct` = '$idProduct'";

$sqlDeleteQuery = mysqli_query($conn, $sqlDelete);

var_dump($sqlDelete);

if($sqlDelete) {
    echo "APAGOU";
    header('Location: /php_programs/Wutai/Wutai/website/seller/affiliatePanel.php');
} else {
    echo "NAO APAGOU! SEU BUCHA!";
}