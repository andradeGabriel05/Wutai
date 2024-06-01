<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));

require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

session_start();

extract($_POST);

$idSeller = $_SESSION['idSeller'];

$sql = "INSERT INTO `product` (`idProduct`, `productName`, `category`, `quantity`, `productDescription`, `productImage`, `price`, `idSeller`) VALUES 
    (null, '$productName', '$category', '$quantity', '$productDescription', '$productImage', '$price', '$idSeller');";

    
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