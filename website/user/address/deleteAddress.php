<?php
require('../../connect.php');
session_start();
$idAddress = $_GET['address'];


if($_GET['user'] != $_SESSION['idUser']) {
    header('Location: /php_programs/Wutai/Wutai/website/user/address/address.php?user='.$id);
}

$sql = "DELETE FROM `address` WHERE `idAddress` = '$idAddress'";

if (mysqli_query($conn, $sql)) {
    echo "Address deleted successfully";
    header('Location:address.php');
} else {
    echo "Error deleting address: " . mysqli_error($conn);
}

mysqli_close($conn);