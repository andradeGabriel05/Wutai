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
    ?>

    <div class="container__rating">
        <aside class="rating__product">
            <h3>Avaliação dos clientes</h3>
            <div class="rating__star__container">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="rating__users">
                <?php
                $productRatingQuery = mysqli_query($conn, "SELECT AVG(`userRating`) AS averageRating FROM `product_rating` WHERE `idProduct` = '$_GET[productId]'");
                if (mysqli_num_rows($productRatingQuery) != 0) {

                    $productRatingArr = mysqli_fetch_array($productRatingQuery);
                    $averageRating = $productRatingArr['averageRating'];


                    $userRatingQuery = mysqli_query($conn, "SELECT * FROM `product_rating` WHERE `idProduct` = '$_GET[productId]'");
                    $numRatings = mysqli_num_rows($userRatingQuery);

                    echo "<p>Total de avaliações: " . $numRatings . "</p>";
                } else {
                    echo "<p>Avaliação média: 0</p>";
                    echo "<p>Total de avaliações: 0</p>";
                }

                ?>
            </div>
            <div class="rating__page">
                <h4>Avalie este produto</h4>
                <p>Compartilhe sua opinião com outros clientes</p>
                <div class="rating__page__route">
                    <?php echo "<a href='ratePage.php?productId=$_GET[productId]'>Escreva uma avialiação</a>"; ?>
                </div>
            </div>
        </aside>

        <div class="comments__wrapper">
            <div class="comments">
                <ul>
                    <?php

                    $commentsQuery = mysqli_query($conn, "SELECT * FROM `product_rating` WHERE `idProduct` = '$_GET[productId]'");

                    while ($comment = mysqli_fetch_assoc($commentsQuery)) {
                        // $commentsUser = mysqli_query($conn, "SELECT * FROM `user` WHERE `idUser` = '$comment[idUser]'");
                        // $commentsUserArr = mysqli_fetch_array($commentsUser);
                        echo "<li>";
                        echo "<div class='comments__user'>";
                        echo "<img src='/php_programs/Wutai/Wutai/assets/user-icon.png' alt='user-icon'>";
                        echo "<p> $comment[userName] </p>";
                        echo "</div>";
                        echo "<div class='comments__user__rating'>";
                        for ($i = 0; $i < $comment['userRating']; $i++) {
                            echo "<i class='fa fa-star star__user__rate'></i>";
                        }
                        echo "<span>$comment[title]</span>";
                        echo "<p class='date__message__p'>Avaliado em $comment[ratingDate]</p>";
                        echo "<p class='user__message__p'>" . $comment['userMessage'] . "</p>";
                        echo "</div>";

                        echo "<div class='comments__user__likes'>";
                        echo "<a href='ratePage.act.php?ref=likeButton&like=$comment[ratingLikes]&rate=$comment[idRating]&productId=$_GET[productId]' class='comments__user__likes__a__tag'>Útil</a>";
                        if ($comment['ratingLikes'] != 0 && $comment['ratingLikes'] != 1) {
                            echo "<p>$comment[ratingLikes] pessoas acharam esse comentário útil</p>";
                        } 
                        if($comment['ratingLikes'] == 1) {
                            echo "<p>$comment[ratingLikes] pessoa achou esse comentário útil</p>";

                        }
                        echo "</div>";

                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include('../footer/footer.php') ?>