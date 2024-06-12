<?php
//só deus sabe a logica desse .act

session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
extract($_POST);

$idProduct = $_SESSION['idProduct'];

if (!isset($_SESSION['idUser'])) {
    header('Location:../user/login/login.php?ref=buyNow&productId=' . $idProduct);
} else {
    if ($_GET['ref'] == 'buyNow') {
        $id = $_SESSION['idUser'];


        $sql__query = mysqli_query($conn, "SELECT `idCart` FROM `cart` WHERE `idUser` = $id;");
        $sql__array = mysqli_fetch_array($sql__query);

        if ($sql__array) {
            // echo "Tem id do carrinho";
        } else {
            $sql = "INSERT INTO `cart` (`idCart`, `idUser`, `createdDate`) VALUES (NULL, '$id', current_timestamp());";
            if ($sqlQuery = mysqli_query($conn, $sql)) {
                // Query was successful
                $_SESSION['idCart'] = mysqli_insert_id($conn);
                $idCart = $_SESSION['idCart'];
            } else {
                // Handle error
                echo "Error: " . mysqli_error($conn);
            }
        }

        if (isset($_SESSION['idCart'])) {

            $sql = "SELECT * FROM `cart_items` WHERE `idCart` = $idCart";

            $sqlQuery = mysqli_query($conn, $sql);
            $sqlArray = mysqli_fetch_array($sqlQuery);
        } else {
            if (isset($_SESSION['idUser'])) {
                if ($sql__array == null) {
                    $sqlInsertIdCart = "INSERT INTO `cart` (`idCart`, `idUser`, `createdDate`) VALUES (NULL, '$id', current_timestamp());";
                    mysqli_query($conn, $sqlInsertIdCart);
                }
                @$idCart = $sql__array['idCart'];

                $_SESSION['idCart'] = $idCart;
            }
        }


        $idCart = $_SESSION['idCart'];

        // echo "--> carrinho " . $idCart;

        if (isset($_GET['productId'])) {
            $idProduct = $_GET['productId'];
            $quantity = 1;
        } else {
            $idProduct = $_SESSION['idProduct'];
        }






        $sqlDoubleProduct = "SELECT `idProduct` FROM `cart_items` WHERE `idProduct` = '$idProduct' AND `idCart` = '$idCart'";

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

            $sqlInsertInto = "INSERT INTO `cart_items` (`idCartItem`, `idCart`, `idProduct`, `quantity`, `addedDate`)

VALUES (NULL, '$_SESSION[idCart]', '$idProduct', '$quantity', current_timestamp());";

            $sqlInsertIntoQuery = mysqli_query($conn, $sqlInsertInto);

            header('Location:/php_programs/Wutai/Wutai/website/user/cart/cart.php?product=true');

            mysqli_close($conn);
        }
    }
}
