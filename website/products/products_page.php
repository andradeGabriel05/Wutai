<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

extract($_POST);
$productNameQuery = mysqli_query($conn, "SELECT `productName` FROM `product` WHERE `idProduct` = '$_GET[productId]'");
$productNameArr = mysqli_fetch_array($productNameQuery);
$productName = $productNameArr['productName'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $productName ?> | Wutai</title>


    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/productPage.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <?php include('../header/header.php');

    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = '$_GET[productId]'");

    $idSellerResult = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = '$_GET[productId]'");
    $idSeller = mysqli_fetch_array($idSellerResult);

    if ($idSeller) {
        $sellerNameResult = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idSeller` = '$idSeller[idSeller]'");
        $seller = mysqli_fetch_array($sellerNameResult);
    }

    while ($usuario = mysqli_fetch_assoc($product)) {
        $_SESSION['idProduct'] = $usuario['idProduct'];
    ?>
        <div class="product__container">
            <div class="product__image__container">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="product__image"><img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/<?php echo $usuario['productImage'] ?>" alt=""></div>
            </div>
            <div class="product__title">
                <span id="titleProduct"><?php echo $usuario['productName']; ?></span>

                <div class="priceProduct">
                    <p class="currency">R$</p>
                    <p class="price__product"><?php echo $usuario['price']; ?></p>
                </div>

                <span class="product__details"><?php echo $usuario['productDescription']; ?></span>
            </div>
            <div class="product__price">
                <div class="priceProduct price__span" style="display: flex;">
                    <p class="currency">R$</p>
                    <p class="price__product"><?php echo $usuario['price']; ?></p>
                </div>
                <span>Entrega GRÁTIS: Segunda-feira, 3 de Junho no seu primeiro pedido</span>
                <form method="POST" action="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php">
                    <select class="form-select" aria-label="Default select example" style="margin-top: 10px;" name="quantity">
                        <?php
                        $quantity = $usuario['quantity'];

                        for ($i = 1; $i <= $quantity; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" value="Adicionar ao carrinho" style="width: 100%;" class="product__price__add__product">
                </form>
                <form action="buyNow.act.php" method="POST">
                    <input type="submit" value="Comprar agora" style="width: 100%;" class="product__price__buy__now">
                </form>
                <div class="product__price__details__seller">

                    <div class="product__price__div__send" style="display: flex;">
                        <p class="span__seller product__price__send"></p>
                        <p>&nbsp;<?php echo $usuario['deliver']; ?></p>
                    </div>
                    <div class="product__price__div__seller" style="display: flex;">
                        <p class="span__seller product__price__seller">Vendido por:</p>
                        <p>&nbsp;<?php echo $seller['enterpriseName']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    include('../footer/footer.php')
    ?>