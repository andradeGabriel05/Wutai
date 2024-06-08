<?php
session_start();
extract($_POST);

@define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));

require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

$product = mysqli_query($conn, "SELECT * FROM `product`");

while ($usuario = mysqli_fetch_assoc($product)) {
    echo '<div class="col">';
    echo '<div class="card-deck">';
    echo '<div class="card">';
    echo '<a href="products/products_page.php?productId=' . $usuario['idProduct'] . '">';
    echo '<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $usuario['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $usuario['productName'] . '</h5>';
    echo '</a>';
    echo '<div class="price">';
    echo '<span style="font-size: 20px;">R$</span>';
    echo '<span style="font-size: 30px;">' . $usuario['price'] . '</span>';
    echo '<span style="font-size: 20px;"></span>';
    echo '<span style="font-size: 20px;"></span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>

</body>

</html>