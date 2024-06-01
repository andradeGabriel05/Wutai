<?php
require('../../connect.php');
$idAddress = $_GET['idAddress'];


if (isset($_GET['idAddress'])) {
    echo $_GET['idAddress'];
} else {
    echo "idAddress is not set";
}