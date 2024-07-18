
<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

$id = isset($_SESSION['idUser']) ? $_SESSION['idUser'] : null;
$productId = isset($_GET['productId']) ? $_GET['productId'] : null;

if ($_GET['ref'] == "post") {

    $sqlUser = "SELECT name FROM user WHERE idUser = '$id'";
    $sqlQuery = mysqli_query($conn, $sqlUser);
    $sqlFetch = mysqli_fetch_assoc($sqlQuery);

    $userName = $sqlFetch['name'];
    $rating = $_SESSION['rating'];


    $sqlInsert = "INSERT INTO `product_rating` (`idRating`, `userRating`, `title`, `ratingImage`, `userName`, `userMessage`, `ratingDate`, `ratingLikes`, `idUser`, `idProduct`) 
  VALUES (NULL, '$rating', '$title', NULL, '$userName', '$textareaRatePage', current_timestamp(), NULL, $id, '$_GET[productId]');";

    $sqlInsertQuery = mysqli_query($conn, $sqlInsert);
} else if ($_GET['ref'] == "likeButton") {

    if (!$id) {
        header('Location: /php_programs/Wutai/Wutai/website/user/login/login.php?ref=likeButton&rate=' . $_GET['rate'] . '&like=' . $_GET['like'] . '&productId=' . $productId);
        exit;
    }

    $sqlSelect = "SELECT * FROM product_rating WHERE idUser = '$id' AND idProduct = '$productId'";
    $sqlSelectQuery = mysqli_query($conn, $sqlSelect);
    $sqlSelectFetch = mysqli_fetch_assoc($sqlSelectQuery);

    $sqlRatingLike = "SELECT * FROM rating_like WHERE idUser = '$id' AND idRating = '$_GET[rate]'";
    $sqlRatingLikeQuery = mysqli_query($conn, $sqlRatingLike);
    $sqlRatingLikeFetch = mysqli_fetch_assoc($sqlRatingLikeQuery);


    if ($sqlRatingLikeFetch['idUser'] != $id) {
        $sqlInsertUser = "INSERT INTO rating_like (IdLike, idRating, idUser, date) VALUES (NULL, '$_GET[rate]', $id, current_timestamp());";
        mysqli_query($conn, $sqlInsertUser);
    }

    if ($id == $_GET['user']) {
        $sqlUpdate = "UPDATE product_rating SET ratingLikes = ratingLikes + 1 WHERE idRating = '$_GET[rate]'";
        mysqli_query($conn, $sqlUpdate);
    }
}

header('Location: /php_programs/Wutai/Wutai/website/products/products_page.php?productId=' . $productId);
