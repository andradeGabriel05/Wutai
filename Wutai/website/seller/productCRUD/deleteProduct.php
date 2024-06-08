<?php
session_start();
@define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar produto | Wutai</title>

    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/aside/aside.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/panel/addProduct.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/panel/editProduct.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
</head>
<body>
<?php //include('../header/header.php'); 
    ?>
    <div class="affiliate__wrapper">

        <?php include('../productCRUD/aside/aside.php'); ?>


        <div class="products">
            <h1>Seus produtos</h1>

            <div class="container">
                <?php
                    $sellerNameResult = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idSeller` = '$_SESSION[idSeller]'");

                    $seller = mysqli_fetch_array($sellerNameResult);

                    echo "<div class='wrapper__products'>";

                    $sqlProducts = "SELECT * FROM `product` WHERE `idSeller` = '$_SESSION[idSeller]'";

                    $products = mysqli_query($conn, $sqlProducts);

                    while ($product = mysqli_fetch_assoc($products)) {

                        $idProduct = $product['idProduct'];
                        $productName = $product['productName'];
                        $productImage = $product['productImage'];
                        $productPrice = $product['price'];


                ?>

                        <div class="container__products">
                            <a href="/php_programs/Wutai/Wutai/website/products/products_page.php?productId=<?php echo $idProduct; ?>">
                                <img src="<?php echo $productImage; ?>" alt="">
                                <div class="container__products__details">

                                    <span><?php echo $productName ?></span>
                                    <span>R$ <?php echo $productPrice ?></span>

                            </a>
                            <div class="container__products__alter">
                                <a href="/php_programs/Wutai/Wutai/website/seller/productCRUD/deleteProduct.act.php?productId=<?php echo $idProduct; ?>">Deletar produto</a>
                        </div>
                        </div>
                        <!-- <span>Alterar produto</span> -->
            </div>
        <?php
                    }

                    echo "</div>
                    </div>
                    </div>

                    ";
        ?>
</body>
</html>