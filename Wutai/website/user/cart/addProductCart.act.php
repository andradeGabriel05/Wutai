<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

extract($_POST);

if ($_SESSION['idUser']) {




    $id = $_SESSION['idUser'];


    $sql__query = mysqli_query($conn, "SELECT `idCart` FROM `cart` WHERE `idUser` = $id;");
    $sql__array = mysqli_fetch_array($sql__query);

    if ($sql__array) {
        // echo "Tem id do carrinho";
    } else {
        $sql = "INSERT INTO `cart` (`idCart`, `idUser`, `createdDate`) VALUES (NULL, '$id', current_timestamp());";
    }



    $_SESSION['idCart'] = $sql__array['idCart'];

    $idCart = $_SESSION['idCart'];

    // echo "--> carrinho " . $idCart;

    if(isset($_GET['productId'])) {
        $idProduct = $_GET['productId'];
        $quantity = 1;

    } else {
        $idProduct = $_SESSION['idProduct'];
    }





    $sqlDoubleProduct = "SELECT idProduct FROM cart_items WHERE idProduct = $idProduct AND idCart = $idCart";

    $sqlQueryDoubleProduct = mysqli_query($conn, $sqlDoubleProduct);

    if (mysqli_num_rows($sqlQueryDoubleProduct) > 0) {
        echo "tem mais de um produto";

        $sqlSelect = "SELECT quantity FROM cart_items WHERE idProduct = $idProduct AND idCart = $idCart";
        $select = mysqli_query($conn, $sqlSelect);
        $quantityUser = mysqli_fetch_array($select);

        $sqlDelete = "DELETE FROM cart_items 
        WHERE idProduct = $idProduct AND idCart = $idCart";

        $delete = mysqli_query($conn, $sqlDelete);

        $sqlInsert = "INSERT INTO cart_items (`idCartItem`, `idCart`, `idProduct`, `quantity`, `addedDate`) 
        VALUES (NULL, '$idCart', '$idProduct', " . ($quantityUser['quantity'] + $quantity) . ", current_timestamp());";
        
        $insert = mysqli_query($conn, $sqlInsert);
        

        echo " 50 ->" . "\n" . $quantityUser['quantity'];
        echo " 51 ->" . "\n" . $quantity;
        echo " 52 ->" . "\n" . ($quantityUser['quantity'] + $quantity);
        
        header('Location:/php_programs/Wutai/Wutai/website/user/cart/cart.php?product=true');

    } else {


        // echo $quantity;

        $sql = "INSERT INTO `cart_items` (`idCartItem`, `idCart`, `idProduct`, `quantity`, `addedDate`)

VALUES (NULL, '$idCart', '$idProduct', '$quantity', current_timestamp());";

        $result = mysqli_query($conn, $sql);

        header('Location:/php_programs/Wutai/Wutai/website/user/cart/cart.php?product=true');

        mysqli_close($conn);
    }
} else {
    $idProduct = $_SESSION['idProduct'];
    header('Location:/php_programs/Wutai/Wutai/website/user/login/login.php?ref=cart&product=' . $idProduct);
}
