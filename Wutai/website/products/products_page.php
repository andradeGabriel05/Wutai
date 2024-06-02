<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Teste | Wutai</title>

    
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/productPage.css">
</head>
<body>


<?php include ('../header/header.php'); 



$product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = '$_GET[productId]'");

$idSellerResult = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = '$_GET[productId]'");
$idSeller = mysqli_fetch_array($idSellerResult);

if ($idSeller) {
    $sellerNameResult = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idSeller` = '$idSeller[idSeller]'");
    $seller = mysqli_fetch_array($sellerNameResult);

}

while ($usuario = mysqli_fetch_assoc($product)) {
echo '<div class="product__container">';
    echo '<div class="product__image__container">';
        echo '<ul>';
            echo '<li></li>';
            echo '<li></li>';
            echo '<li></li>';
            echo '<li></li>';
            echo '<li></li>';
            echo '<li></li>';
        echo '</ul>';

        echo '<div class="product__image"><img src="https://static.javatpoint.com/tutorial/software-testing/images/beta-testing-logo.png" alt=""></div>';

    echo '</div>';

    echo '<div class="product__title">';

        echo '<span id="titleProduct">'.$usuario['productName'] . '</span>';
        echo '<span id="priceProduct">R$ <span>'.$usuario['price'] . '</span></span>';
        echo '<span id="quantity">Quantidade disponível: '.$usuario['quantity'] . ' </span>';
        echo '<span class="product__details">'.$usuario['productDescription'] . ' </span>';
    
    echo '</div>';

    echo '<div class="product__price">';
        echo '<span class="price__span">R$'.$usuario['price'] . '</span>';
        echo '<span>Entrega GRÁTIS: Segunda-feira, 3 de Junho no seu primeiro pedido</span>';
        echo '<span>Lorem ipsum dolor sit.</span>';
        echo '<div class="product__add">';
                        echo '<div class="minus">';
                            echo '<input type="button" value="-" id="minus">';
                        echo '</div>';
                        echo '<div class="quantity">';
                            echo '<input type="text" name="" id="quantity" value="1">';
                        echo '</div>';
                        echo '<div class="add">';
                            echo '<input type="button" value="+" id="add">';
                        echo '</div>';
                    echo '</div>';
        echo '<input type="submit" value="Adicionar ao carrinho">';
        echo '<input type="submit" value="Comprar agora">';
        echo '<div class="product__price__details__seller">';
            echo '<span class="span__seller">Enviado por: '.$usuario['deliver'] . '</span></span>';
            echo '<span class="span__seller">Vendido por: '.$seller['enterpriseName'] . '</span></span>';
        echo '</div>';


        
    echo '</div>';
echo '</div>';
}
?>
</body>
<script src="/php_programs/Wutai/Wutai/js/inputAddProduct.js"></script>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>