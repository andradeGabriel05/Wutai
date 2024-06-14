<?php
session_start();
extract($_POST);

@define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));

require_once (BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $searchInput ?> | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/products.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php

    include ('../header/header.php');
    ?>

    <section class="container text-center">
        <div class="row gx-0 container__grid">
            <?php
            $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `productName` LIKE '%$searchInput%'");

            while ($usuario = mysqli_fetch_assoc($product)) {
                echo
                    '
                <div class="col">
                <a href="products/products_page.php?productId=' . $usuario['idProduct'] . '">
                <div class="card">
                <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $usuario['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
                <div class="card-body">
                <h5 class="card-title">' . $usuario['productName'] . '</h5>
                <div class="price">
                <span style="font-size: 20px;">R$</span>
                <span style="font-size: 30px;">' . $usuario['price'] . '</span>
                <span style="font-size: 20px;"></span>
                <span style="font-size: 20px;"></span>
                </div>
                </div>
                </div>
                </a>
                <div class="add__to__cart">
                <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $usuario['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                </div>
                ';
            }
            ?>
        </div>
    </section>

    <?php
    include ('../footer/footer.php');
    ?>
</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</html>