<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

extract($_POST);



if (isset($_SESSION['idUser'])) {
    $id = $_SESSION['idUser'];
} else {

    if ($_GET['auth'] === false) {
        header('Location: /php_programs/Wutai/Wutai/website/user/cart/cart.php?auth=false');
    } else {
        if (!isset($_GET['auth']) || $_GET['auth'] !== 'false') {
            header('Location: /php_programs/Wutai/Wutai/website/user/cart/cart.php?auth=false');
            exit();
        }
    }
}

if (isset($id)) {
    if ($_GET['user'] == $id) {
        if (isset($_SESSION['idCart'])) {
            $idCart = $_SESSION['idCart'];

            $sql = "SELECT * FROM `cart_items` WHERE `idCart` = $idCart";

            $sqlQuery = mysqli_query($conn, $sql);
            $sqlArray = mysqli_fetch_array($sqlQuery);
        } else {
            if (isset($_SESSION['idUser'])) {
                $sql__query = mysqli_query($conn, "SELECT `idCart` FROM `cart` WHERE `idUser` = $id;");
                $sql__array = mysqli_fetch_array($sql__query);

                if ($sql__array == null) {
                    $sqlInsertIdCart = "INSERT INTO `cart` (`idCart`, `idUser`, `createdDate`) VALUES (NULL, '$id', current_timestamp());";
                    mysqli_query($conn, $sqlInsertIdCart);
                }
                @$idCart = $sql__array['idCart'];

                $_SESSION['idCart'] = $idCart;
            }
        }
    } else {
        header('Location: /php_programs/Wutai/Wutai/website/user/cart/cart.php?user=' . $id);
    }
}
// print_r($sqlArray);


// echo "carrinho ->".$idProduct;


// $sqlCountDoubleProduct = "SELECT idProduct, COUNT(*) as quantidade
// FROM cart_items
// WHERE idCart = $idCart
// GROUP BY idProduct
// HAVING COUNT(*) > 1";

// $sqlQueryIdDoubleProduct = mysqli_query($conn, $sqlCountDoubleProduct);

// while($row = mysqli_fetch_assoc($sqlQueryIdDoubleProduct)) {
//     if($row['quantidade'] > 1) {

//         $sqlUpdateDoubleProduct = "UPDATE cart_items SET quantity = quantity + 1 WHERE idProduct = $row[idProduct] AND idCart = $idCart";
//         $sqlQueryUpdateDoubleProduct = mysqli_query($conn, $sqlUpdateDoubleProduct);


//     }
// }





?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Wutai</title>

    <link rel="stylesheet" href="../../../styles/cart.css">

    <link rel="stylesheet" href="../../../styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="modal" id="popUp" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apagar produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deseja remover o produto do carrinho de compras?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sim</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="noOption">Não</button>
                </div>
            </div>
        </div>
    </div>


    <?php include('../../header/header.php'); ?>

    <div <?php
            if (!isset($idCart)) {
                echo "class='spanPadTextAuth'>";
            } else {
                echo "class='spanPadText'>";
            }
            ?> <span class="cart__title">Carrinho de compras</span>
        <p><?php
            if (isset($idCart)) {
                $sqlProduct = "SELECT * FROM `cart_items` WHERE `idCart` = '$idCart'";
                $sqlQueryProduct = mysqli_query($conn, $sqlProduct);
                $product = mysqli_fetch_assoc($sqlQueryProduct);

                $sqlSum = "SELECT SUM(quantity) FROM `cart_items` WHERE `idCart` = '$idCart'";
                $sqlQuerySum = mysqli_query($conn, $sqlSum);
                $sum = mysqli_fetch_array($sqlQuerySum);

                if ($sum[0] == 0) {
                    echo "";
                } elseif ($sum[0] == 1) {
                    echo "<p style='margin-left: 10px;'>(<p id='productsSpanId' style='margin-right: 5px;' class='quantityInputSpan'>" . $sum[0] . "  </p> <p id='productsSpanTextId'> produto)</p>";
                } else {
                    echo "<p style='margin-left: 10px;'>(<p id='productsSpanId' style='margin-right: 5px;' class='quantityInputSpan'>" . $sum[0] . " </p> <p id='productsSpanTextId'> produtos)</p></p> ";
                }
            ?></p>
    </div>

    <section id="cart">
        <div class="product__wrapper">

            <?php

                $sqlCount = "SELECT COUNT(idCart) FROM `cart_items` WHERE `idCart` = $idCart";
                $sqlQueryCount = mysqli_query($conn, $sqlCount);
                $count = mysqli_fetch_array($sqlQueryCount);

                $sqlProduct = "SELECT * FROM `cart_items` WHERE `idCart` = '$idCart'"; // para o while
                $sqlQueryProduct = mysqli_query($conn, $sqlProduct); // para o while

                if ($count[0] == 0) {

                    echo "<div class='empty__cart' id='emptyCart'>
                <p class='cart__empty'></p>
                <p>Continue suas compras na <a href='/php_programs/Wutai/Wutai/website/index.php'>página inicial da Wutai.com</a></p>
                </div>";
                } else {

                    while ($product = mysqli_fetch_assoc($sqlQueryProduct)) {

                        $sqlProduct = "SELECT * FROM `product` WHERE `idProduct` = '$product[idProduct]'";
                        $sqlQueryIdProduct = mysqli_query($conn, $sqlProduct);
                        $sqlArray = mysqli_fetch_array($sqlQueryIdProduct);

                        $idProduct = $product['idProduct'];
                        $idCartItem = $product['idCartItem'];
                        $quantity = $product['quantity'];
                        $productImage = $sqlArray['productImage'];
                        $idCart = $product['idCart'];
                        $_SESSION['idProduct'] = $product['idProduct'];
                        $_SESSION['idCartItem'] = $product['idCartItem'];



            ?>
                    <form action="" method="post">
                        <div class="product__information">


                            <div class="product__card">
                                <div class="product__left__wrapper">
                                    <a href="../../products/products_page.php?productId=<?php echo $idProduct ?>">
                                        <div class="product__image"><img src="../../seller/productCRUD/<?php echo $productImage ?>" alt=""></div>
                                    </a>
                                    <div class="product__add">
                                        <div class="minus">
                                            <input type="button" value="-" name="minus" id="minus">
                                        </div>
                                        <div class="quantity">
                                            <input type="text" name="quantity" id="quantity" class="quantityInputSpan" value="<?php echo $quantity ?>">
                                        </div>
                                        <div class="add">
                                            <input type="button" value="+" name="add" id="add" class="inputAdd">
                                        </div>
                                    </div>

                                </div>
                                <div class="product__description">
                                    <div class="title">
                                        <a href="../../products/products_page.php?productId=<?php echo $idProduct ?>"> <span><?php echo $sqlArray['productName'] ?></span></a>

                                        <a href="deleteProduct.act.php?idProduct=<?php echo $idCartItem; ?>">Excluir</a>
                                    </div>
                                    <div class="priceProduct" style="display: flex;">
                                        <p class="currency" style="font-size: 20px;">R$</p>
                                        <span class="title price" style="padding-left: 0;"><?php echo $sqlArray['price'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        <?php
                    }
                }
            } else {

                echo "<section id='cart' style='padding: 0; width: 100%;'>
                <div class='product__wrapper' style='padding: 34px 0;'>
                <div class='empty__cart__auth' id='emptyCartAuth'>

            <p style='margin-bottom: 1rem;'>Parece que você ainda não entrou em sua conta...</p>
            <p style='margin-bottom: 1rem;'><a href='/php_programs/Wutai/Wutai/website/user/login/login.php'>Faça login</a> para continuar suas compras na página inicial da <a href='/php_programs/Wutai/Wutai/website/index.php'>Wutai.com</a></p>
            </div>";
            }
        ?>

        </div>


        <?php if (isset($idCart) && isset($idProduct)) { ?>
            <div class="buy__box" id="buyBox">
                <span class="buy__box__total">Total</span>
                <div class="final__price">
                    <span>Subtotal: </span>
                    <div class="priceProduct" style="display: flex;">
                        <p class="currency" style="margin-bottom: 0; display: flex; align-items: center; justify-content: center; font-size: 20px;">R$</p>
                        <span class="final__price__span">
                            <?php
                            $total = 0;



                            @$sqlProduct = "SELECT * FROM `cart_items` WHERE `idCart` = '$idCart'";
                            $sqlQueryProduct = mysqli_query($conn, $sqlProduct);



                            while ($product = mysqli_fetch_assoc($sqlQueryProduct)) {

                                $sqlProductidProduct = "SELECT * FROM `product` WHERE `idProduct` = '{$product['idProduct']}'";
                                $sqlQueryIdProduct = mysqli_query($conn, $sqlProductidProduct);
                                $sqlArrayidProduct = mysqli_fetch_assoc($sqlQueryIdProduct);

                                $price = $sqlArrayidProduct['price'];

                                $quantity = $product['quantity'];

                                $totalProduct = $price * $quantity;

                                $total += $totalProduct;
                            }

                            echo $total;
                            ?></span>
                    </div>
                </div>

                <!-- 
        <div class="frete">
            <span>Calcular frete:</span>
            <input type="text" name="frete" id="freteId">
        </div> -->
                <input type="submit" value="" class="cart__checkout" id="buyButton">
            </div>

        <?php

        }
        ?>
    </section>

</body>

<script src="../../../js/language.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
<script src="/php_programs/Wutai/Wutai/js/cart.js"></script>

</html>