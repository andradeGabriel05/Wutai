<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

extract($_POST);
$id = $_SESSION['idUser'];

if ($_GET['ref'] == "likeButton") {

    if (!isset($_SESSION['idUser'])) {
        header('Location: /php_programs/Wutai/Wutai/website/user/login/login.php?ref=likeButton&rate=' . $_GET['rate'] . '&like=' . $_GET['like'] . '&productId=' . $_GET['productId']);
    } else {

        $sqlSelect = "SELECT * FROM `product_rating` WHERE `idUser` = '$id' AND `idProduct` = '$_GET[productId]'";
        $sqlSelectQuery = mysqli_query($conn, $sqlSelect);
        $sqlSelectFetch = mysqli_fetch_assoc($sqlSelectQuery);

        $sqlRatingLike = "SELECT * FROM `rating_like` WHERE `idUser` = '$id' AND `idRating` = '$_GET[rate]'";
        $sqlRatingLikeQuery = mysqli_query($conn, $sqlRatingLike);
        while ($sqlRatingLikeFetch = mysqli_fetch_assoc($sqlRatingLikeQuery)) {
        
            if (!$sqlRatingLikeFetch['idUser'] == $id) {
                $sqlInsertUser = "INSERT INTO `rating_like` (`IdLike`, `idRating`, `idUser`, `date`) VALUES (NULL, '$_GET[rate]', $id, current_timestamp());";
                $sqlInsertUserQuery = mysqli_query($conn, $sqlInsertUser);
                $sqlInsertUserFetch = mysqli_fetch_assoc($sqlInsertUserQuery);

            }
        }


        if($id != $_GET['user']) {	
            $sqlUpdate = "UPDATE `product_rating` SET `ratingLikes` = '$_GET[like]' + 1 WHERE `idRating` = '$_GET[rate]'";
            $sqlUpdateQuery = mysqli_query($conn, $sqlUpdate);
            header('Location: /php_programs/Wutai/Wutai/website/products/products_page.php?productId=' . $_GET['productId']);
        } else {
            header('Location: /php_programs/Wutai/Wutai/website/products/products_page.php?productId='. $_GET['productId']);
        }
    }
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
