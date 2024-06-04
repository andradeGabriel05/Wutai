<?php

session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
$idCartItem = $_GET['idProduct'];;
$idUser = $_SESSION['idUser'];

echo $idCartItem;


$sqlDelete = "DELETE FROM cart_items WHERE `cart_items`.`idCartItem` = '$idCartItem'";
mysqli_query($conn, $sqlDelete);

header('Location: /php_programs/Wutai/Wutai/website/user/cart/cart.php?user='.$idUser);

mysqli_close($conn);