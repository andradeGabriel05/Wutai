<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
session_start();
extract($_POST);

@$changePassword = $_POST['changePassword'];
@$newPassword = $_POST['newPassword'];

if ($_SESSION['idUser']) {
    $id = $_SESSION['idUser'];
} else {
    header('Location: /php_programs/Wutai/Wutai/website/user/login/login.php');
}


$sql = "SELECT * FROM user WHERE idUser = '$id'";
$sqlQuery = mysqli_query($conn, $sql);

$sqlFetch = mysqli_fetch_array($sqlQuery);

// if (isset($_POST['changePassword']) && isset($_POST['newPassword']) && $_POST['changePassword'] != "" && $_POST['newPassword'] != "") {
if (isset($_POST['changePassword']) && $_POST['changePassword'] != "") {
    if(password_verify($changePassword, $sqlFetch['password'])) {
        echo "Senha correta";

        $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE `user` SET `password` = '$newPassword' WHERE `idUser` = $id;";
        $sqlQuery = mysqli_query($conn, $sql);

    } else {
        echo "Senha incorreta";
    }
}
    // @$changePassword = $_POST['changePassword'];
    // @$newPassword = $_POST['newPassword'];


    // $sqlName = "UPDATE `user` SET `name` = '$name' WHERE `idUser` = $id;";
    // $sqlSurname = "UPDATE `user` SET `surname` = '$surname' WHERE `idUser` = $id;";
    // $sqlQueryName = mysqli_query($conn, $sqlName);
    // $sqlQuerySurname = mysqli_query($conn, $sqlSurname);

    // if ($sqlQueryName && $sqlQuerySurname) {
    //     header('Location: /php_programs/Wutai/Wutai/website/user/userdata/userdata.php');
    // }


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar nome | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="../../../styles/user/aside/aside.css">
    <link rel="stylesheet" href="../../../styles/user/homepage/userdata/userdata.css">
    <link rel="stylesheet" href="../../../styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('../../header/header.php'); ?>

    <div class="settings__wrapper">
        <?php include('../aside/aside.php'); ?>

        <div class="form__container">
            <h1>Altere a sua senha</h1>
            <div class="form__container__text__form">

                <p class="form__container__text"> Use o formulário a seguir para alterar a senha de sua conta Amazon.</p>
                <form action="" method="post">
                        <div class="form-group">
                            <label for="changePassword">Senha atual</label>
                            <input type="password" class="form-control" name="changePassword" id="changePassword">
                        </div>

                        <div class="form-group">
                            <label for="newPassword">Nova senha</label>
                            <input type="password" class="form-control" name="newPassword" id="newPassword">
                        </div>

                    <input type="submit" value="Salvar alterações" class="button__submit">
                </form>
            </div>

        </div>

    </div>
    <?php include('../../footer/footer.php'); ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>