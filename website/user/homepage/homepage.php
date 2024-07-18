<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu perfil | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="../../../styles/footer.css">
    <link rel="stylesheet" href="../../../styles/user/aside/aside.css">
    <link rel="stylesheet" href="../../../styles/user/homepage/homepage.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include('../../header/header.php'); ?>
    <div class="container__homepage">
        <div class="profile__wrapper">
            <h1>Suas avaliações</h1>

            <?php

            $sql = "SELECT * FROM product_rating WHERE idUser = " . $_SESSION['idUser'];

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $sqlProduct = "SELECT * FROM product WHERE idProduct = " . $row['idProduct'];
                $resultProduct = mysqli_query($conn, $sqlProduct);
                $rowProduct = mysqli_fetch_assoc($resultProduct);

                echo "<div class='rate__product'>";
                echo "<div class='product__card'>";
                echo "<img src='../../seller/productCRUD/" . $rowProduct['productImage'] . "' alt='" . $rowProduct['productName'] . "'>";

                echo "<div class='product__detail__rate'>";
                echo "<h3>" . $rowProduct['productName'] . "</h3>";

                echo "<div class='product__rating'>";
                echo "<h4>" . $row['title'] . "</h4>";
                for ($i = 0; $i < $row['userRating']; $i++) {
                    echo "<i class='fas fa-star'></i>";
                }
                echo "<p>" . $row['userMessage'] . "</p>";
                echo "</div>";
                echo "</div>";

                echo "</div>";


                echo "</div>";
            }

            ?>
        </div>
    </div>
    <?php include('../../footer/footer.php'); ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>