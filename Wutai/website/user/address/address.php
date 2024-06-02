<?php
session_start();
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));

require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

$id = $_SESSION['idUser'];

$userQueryPanel = mysqli_query($conn, "SELECT * FROM `user` WHERE `idUser` = '$id'");


if (isset($_SESSION['idUser'])) {
    $id = $_SESSION['idUser'];
} else {
    header('Location: /php_programs/Wutai/Wutai/website/user/login/login.php');
}

if($_GET['user'] != $id) {
    header('Location: /php_programs/Wutai/Wutai/website/user/address/address.php?user='.$id);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus endereços | Wutai</title>
    <link rel="stylesheet" href="../../../styles/header.css">
    <link rel="stylesheet" href="../../../styles/user/address.css">
    <link rel="stylesheet" href="../../../styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <?php include('../../header/header.php'); ?>


    <h1>Seus endereços</h1>
    <section class="addresses">
        <a href='newAddress.php?user=<?php echo $id ?>'>
            <div class="new__address">
                <i class="fas fa-plus"></i>
                <h2>Adicionar novo endereço</h2>
            </div>
        </a>

        <?php

        $user = mysqli_query($conn, "SELECT * FROM `address` WHERE `idUser` = '$id'");

        while($usuario = mysqli_fetch_assoc($user)) {
        echo '<div class="user__address">';
            
                echo "<h3>{$usuario['completeName']}</h3>";
                echo "<p>{$usuario['address']}, ";
                echo "{$usuario['houseNumber']}</p>";
                echo "<p>{$usuario['neighborhood']}</p>";
                echo "<p>{$usuario['city']}, ";
                echo "{$usuario['state']} ";
                echo "{$usuario['zipcode']}</p>";
                echo "<p>{$usuario['country']}</p>";
                echo "<p>{$usuario['phoneNumber']}</p>";
                // echo "<p>{$usuario['complement']}</p>";
                echo "<div class='update__address'>";
                    echo "<a href='editAddress.php?address={$usuario['idAddress']}'>Editar</a>";
                    echo "<a href='deleteAddress.php?address={$usuario['idAddress']}'>Apagar</a>";
                echo '</div>';
            echo '</div>';
        }
    ?>
    </section>
    
    <?php include('../../footer/footer.php'); ?>
