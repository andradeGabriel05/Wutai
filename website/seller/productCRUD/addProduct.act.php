<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));

require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

session_start();
$idSeller = $_SESSION['idSeller'];
extract($_POST);

$productImage = $_FILES['productImage'];

$path = "productImages/" . md5(time()) . ".jpg";

move_uploaded_file($productImage['tmp_name'], $path);

$sql = "INSERT INTO `product` (`idProduct`, `productName`, `category`, `quantity`, `productDescription`, `productImage`, `price`, `deliver`, `idSeller`) VALUES 
    (null, '$productName', '$category', '$quantity', '$productDescription', '$path', '$price', '$deliver', '$idSeller');";

    
$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['productName'] = $productName;
    $_SESSION['category'] = $category;
    $_SESSION['quantity'] = $quantity;
    $_SESSION['productDescription'] = $productDescription;
    $_SESSION['productImage'] = $productImage;
    $_SESSION['price'] = $price;
    header('Location:../../index.php');
} else {
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>