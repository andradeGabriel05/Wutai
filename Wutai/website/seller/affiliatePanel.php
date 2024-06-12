<?php
session_start();
@define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');


if (@$_GET['seller'] == "true") {
    // logado como vendedor
    if (!isset($_SESSION['idSeller'])) {
        header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePage.php?auth=true&seller=false');
    }
} else {
    if (isset($_SESSION['idSeller'])) {
        header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePanel.php?seller=true&panel=panel');
    }
}

$idSeller = $_SESSION['idSeller'];

$sellerNameResult = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idSeller` = '$idSeller'");
$seller = mysqli_fetch_array($sellerNameResult);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/aside/aside.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/panel/panel.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php //include('../header/header.php'); 
    ?>
    <div class="affiliate__wrapper">

        <?php include('../seller/productCRUD/aside/aside.php'); ?>

        <div class="products">
            <h1>Seus produtos</h1>

            <div class="container">
                <?php
                $products = mysqli_query($conn, "SELECT * FROM `product` WHERE `idSeller` = '$idSeller'");
                while ($product = mysqli_fetch_assoc($products)) {
                    $idProduct = $product['idProduct'];
                    $productName = $product['productName'];
                    $productImage = $product['productImage'];
                    $productPrice = $product['price'];
                ?>

                    <div class="container__products">
                        <a href="/php_programs/Wutai/Wutai/website/products/products_page.php?productId=<?php echo $idProduct; ?>">
                            <img src="productCRUD/<?php echo $productImage; ?>" alt="">
                            <div class="container__products__details">

                                <span><?php echo $productName ?></span>
                                <span>R$ <?php echo $productPrice ?></span>

                        </a>
                        <div class="container__products__alter">
                            <a href="/php_programs/Wutai/Wutai/website/seller/productCRUD/editProduct.php?productId=<?php echo $idProduct; ?>">Editar produto</a>
                        </div>
                    </div>
                    <!-- <span>Alterar produto</span> -->
            </div>


            <?php
                }
            ?>

            </div>
        </div>
    </div>
    <?php include('../footer/footer.php'); ?>