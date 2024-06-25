<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));

require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
extract($_POST);
session_start();

$productImage = $_FILES['productImage'];

$idProduct = $_SESSION['idProduct'];

$sqlQuery = "SELECT * FROM product WHERE idProduct = '$idProduct'";

$sqlQueryProduct = mysqli_query($conn, $sqlQuery);

$sqlArray = mysqli_fetch_array($sqlQueryProduct);

if ($productImage['tmp_name']) {
    $path = "productImages/" . md5(time()) . ".jpg";
    move_uploaded_file($productImage['tmp_name'], $path);

    if (file_exists($sqlArray['productImage'])) {
        unlink($sqlArray['productImage']);
    }

} else {
    $path = $sqlArray['productImage'];
}
$sqlUpdate = "UPDATE product SET 
        productName = '$productName',
        category = '$category',
        quantity = '$quantity',
        productDescription = '$productDescription',
        productImage = '$path',
        price = '$price',
        deliver = '$deliver'
        WHERE idProduct = '$idProduct'";

$sqlUpdateQuery = mysqli_query($conn, $sqlUpdate);

header('Location:../sellerPanel.php');