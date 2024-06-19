<?php
define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');
session_start();
extract($_POST);

if ($_SESSION['idUser']) {
    $id = $_SESSION['idUser'];
} else {
    header('Location: /php_programs/Wutai/Wutai/website/user/login/login.php');
}

$sql = "SELECT * FROM user WHERE idUser = '$id'";
$sqlQuery = mysqli_query($conn, $sql);

$sqlFetch = mysqli_fetch_array($sqlQuery);

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    @$email = $_POST['email'];



    $sqlEmail = "UPDATE `user` SET `email` = '$email' WHERE `idUser` = $id;";
    $sqlQueryEmail = mysqli_query($conn, $sqlEmail);

    if ($sqlQueryEmail) {
        header('Location: /php_programs/Wutai/Wutai/website/user/userdata/userdata.php');
    }
}

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
            <h1>Altere o seu email</h1>
            <div class="form__container__text__form">

                <p class="form__container__text">Digite o novo endereço de e-mail que você deseja associar à sua conta abaixo.
                    Lembre-se de clicar no botão Salvar alterações quando tiver concluído.</p>
                <form action="" method="post">
                    <div class="row">

                        <div class="col">
                            <label for="email">Novo email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $sqlFetch['email'] ?>">
                        </div>

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