<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

extract($_POST);

if ($_SESSION['idUser']) {
    $id = $_SESSION['idUser'];
    $idProduct = $_SESSION['idProduct'];

    $sql__query = mysqli_query($conn, "SELECT `idCart` FROM `cart` WHERE `idUser` = $id;");
    $sql__array = mysqli_fetch_array($sql__query);

    if ($sql__array) {
        // echo "Tem id do carrinho";
    } else {
        $sql = "INSERT INTO `cart` (`idCart`, `idUser`, `createdDate`) VALUES (NULL, '$id', current_timestamp());";
    }


    $_SESSION['idCart'] = $sql__array['idCart'];

    $idCart = $_SESSION['idCart'];

    echo "--> carrinho " . $idCart;


    // echo $quantity;

    $sql = "INSERT INTO `cart_items` (`idCartItem`, `idCart`, `idProduct`, `quantity`, `addedDate`)

VALUES (NULL, '$idCart', '$idProduct', '$quantity', current_timestamp());";

    $result = mysqli_query($conn, $sql);

    header('Location:/php_programs/Wutai/Wutai/website/user/cart/cart.php?product=true');

    mysqli_close($conn);
} else {
    $idProduct = $_SESSION['idProduct'];
    header('Location:/php_programs/Wutai/Wutai/website/user/login/login.php?ref=cart&product=' . $idProduct);
}
