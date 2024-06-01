<?php
require('../../connect.php');
$idAddress = $_GET['address'];

$sql = "DELETE FROM `address` WHERE `idAddress` = '$idAddress'";

if (mysqli_query($conn, $sql)) {
    echo "Address deleted successfully";
    header('Location:address.php');
} else {
    echo "Error deleting address: " . mysqli_error($conn);
}

mysqli_close($conn);