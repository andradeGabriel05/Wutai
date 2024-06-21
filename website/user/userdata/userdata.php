<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
session_start();
extract($_POST);

$id = $_SESSION['idUser'];
$sql = "SELECT * FROM user WHERE idUser = '$id'";
$sqlQuery = mysqli_query($conn, $sql);
$sqlFetch = mysqli_fetch_array($sqlQuery);

if (@$editName) {
    header('Location: /php_programs/Wutai/Wutai/website/user/userdata/editName.php');
}

if (@$editEmail) {
    header('Location: /php_programs/Wutai/Wutai/website/user/userdata/editEmail.php');
}

if (@$editPass) {
    header('Location: /php_programs/Wutai/Wutai/website/user/userdata/editPass.php');
}

if (isset($yesOptionDeleteAccount)) {
    $sqlDelete = "DELETE FROM `user` WHERE `idUser` = $id";
    $sqlDeleteCart = "DELETE FROM `cart` WHERE `idUser` = $id";

    $sqlQueryDeleteCart = mysqli_query($conn, $sqlDeleteCart);
    $sqlQueryDelete = mysqli_query($conn, $sqlDelete);
    echo "conta deletada";
    if ($sqlQueryDelete) {
        header('Location: /php_programs/Wutai/Wutai/website/user/login/logout.php?ref=deleteAccount');
    }
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do usuário | Wutai</title>

    <link rel="stylesheet" href="../../../styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/footer.css">
    <link rel="stylesheet" href="../../../styles/user/aside/aside.css">
    <link rel="stylesheet" href="../../../styles/user/homepage/userdata/userdata.css">
</head>

<body>

    <?php include("../../header/header.php") ?>
    <div class="settings__wrapper">
        <?php include("../aside/aside.php"); ?>
        <div class="vertical__box">
            <div class="vertical__box__row">

                <div class="vertical__box__row__name">
                    <p>Nome</p>
                    <span><?php echo $sqlFetch['name'] . " " . $sqlFetch['surname'] ?></span>
                </div>

                <form action="" method="post">

                    <div class="vertical__box__row__button__edit">
                        <input type="submit" name="editName" value="Editar"></input>

                    </div>
                </form>
            </div>

            <div class="vertical__box__row">

                <div class="vertical__box__row__name">
                    <p>Email</p>
                    <span><?php echo $sqlFetch['email'] ?></span>
                </div>

                <div class="vertical__box__row__button__edit">
                    <form action="" method="post">
                        <input type="submit" name="editEmail" value="Editar"></input>
                    </form>
                </div>
            </div>

            <div class="vertical__box__row">

                <div class="vertical__box__row__name">
                    <p>Senha</p>
                    <span>********</span>
                </div>

                <form action="" method="post">

                    <div class="vertical__box__row__button__edit">
                        <input type="submit" name="editPass" value="Editar"></input>

                    </div>
                </form>

            </div>

            <div class="vertical__box__row delete__account__div">


                <div class="delete__account__div__text">
                    <span>Deletar a sua conta</span>

                    <div class="vertical__box__row__button__edit">
                        <input type="submit" name="deleteAccount" id="deleteAccount" onclick="event.preventDefault(); deleteAccountFunc();" value="Apagar conta"></input>

                    </div>
                </div>

            </div>


            <!-- pop up (apagar conta)? -->
            <div class="modal" id="popUp" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Apagar conta Wutai?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Você realmente deseja apagar sua conta na Wutai?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" method="post">
                                <button type="submit" class="btn btn-primary" name="yesOptionDeleteAccount" id="yesOptionDeleteAccount">Sim</button>
                            </form>
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal" id="noOption">Não</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <?php include("../../footer/footer.php") ?>