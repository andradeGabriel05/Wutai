<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Teste | Wutai</title>


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
                <div class="product__image"><img src="https://static.javatpoint.com/tutorial/software-testing/images/beta-testing-logo.png" alt=""></div>
            </div>
            <div class="product__title">
                <span id="titleProduct"><?php echo $usuario['productName']; ?></span>
                <span id="priceProduct">R$ <span><?php echo $usuario['price']; ?></span></span>
                <span class="product__details"><?php echo $usuario['productDescription']; ?></span>
            </div>
            <div class="product__price">
                <span class="price__span">R$<?php echo $usuario['price']; ?></span>
                <span>Entrega GRÁTIS: Segunda-feira, 3 de Junho no seu primeiro pedido</span>
                <form method="POST" action="addProductCart.act.php">
                    <select class="form-select" aria-label="Default select example" style="margin-top: 10px;" name="quantity">
                        <?php
                            $quantity = $usuario['quantity'];

                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <input type="submit" value="Adicionar ao carrinho" style="width: 100%;">
                </form>
                <input type="submit" value="Comprar agora">
                <div class="product__price__details__seller">
                    <span class="span__seller">Enviado por: <?php echo $usuario['deliver']; ?></span></span>
                    <span class="span__seller">Vendido por: <?php echo $seller['enterpriseName']; ?></span></span>
                </div>
            </div>
        </div>
    <?php
    }

    include('../footer/footer.php')
    ?>
</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
<script src="/php_programs/Wutai/Wutai/js/inputAddProduct.js"></script>

</html>