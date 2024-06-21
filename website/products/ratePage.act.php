<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

extract($_POST);
$id = $_SESSION['idUser'];

if ($_GET['ref'] == "likeButton") {
    $sqlUpdate = "UPDATE `product_rating` SET `ratingLikes` = '$_GET[like]' + 1 WHERE `idRating` = '$_GET[rate]'";
    $sqlUpdateQuery = mysqli_query($conn, $sqlUpdate);
    header('Location: /php_programs/Wutai/Wutai/website/products/products_page.php?productId='. $_GET['productId']);
} else {


    $sqlUser = "SELECT * FROM `user` WHERE `idUser` = '$id'";

    $sqlQuery = mysqli_query($conn, $sqlUser);

    $sqlFetch = mysqli_fetch_assoc($sqlQuery);

    $userName = $sqlFetch['name'];
    $rating = $_SESSION['rating'];

    echo $rating;

    $sqlInsert = "INSERT INTO `product_rating` (`idRating`, `userRating`, `title`, `ratingImage`, `userName`, `userMessage`, `ratingDate`, `ratingLikes`, `idUser`, `idProduct`) 
VALUES (NULL, '$rating', '$title', NULL, '$userName', '$textareaRatePage', current_timestamp(), NULL, $id, '$_GET[productId]');";

    $sqlInsertQuery = mysqli_query($conn, $sqlInsert);
}
