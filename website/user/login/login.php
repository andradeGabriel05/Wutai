<?php
require('../../../website/connect.php');

extract($_POST);
extract($_GET);
session_start();
$login = true;



if (isset($_POST['email']) || isset($_POST['password'])) {
    if (strlen($_POST['email']) < 1 || strlen($_POST['password']) < 1) {
        $login = false;
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        $sql__code = "SELECT * FROM  `user` WHERE `email` = '$email'";
        $sql__query = $conn->query($sql__code) or die("Falhou" . $conn->error);

        $user = $sql__query->fetch_assoc();


        if ($user && $_SESSION['contadorLogin'] != null) {
            if (password_verify(@$password, @$user['password']) && @$user['email'] == @$email) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['idUser'] = $user['idUser'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['surname'] = $user['surname'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['birthdate'] = $user['birthdate'];;


                if ($_GET['ref'] == 'buyNow') {
                    header('Location:../../products/buyNow.act.php?ref=buyNow&productId=' . $_GET['productId']);
                } else {
                    header('Location:../../index.php');
                }
                exit();
            } else {
                $login = false;
            }
        } else {
            $login = false;
        }
    }
}



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Wutai</title>
    <link rel="stylesheet" href="../../../styles/user/login/user.css">

</head>

<body>
    <div class="wrapper__page">
        <div class="concept">
            <img src="../../../assets/login5.png" alt="concept" id="conceptImg">
        </div>

        <section id="join">
            <div class="form__wrapper" id="formWrapperId">
                <a href="/php_programs/Wutai/Wutai/website/index.php"><img src="../../../public/img/logo2.png" alt=""></a>

                <h1>Fazer login</h1>
                <form method="post">

                    <?php
                    if (isset($login)) {
                        if ($login == false) {
                            if (mysqli_num_rows($sql__query) == 0) {
                                echo 
                                "<div class='alert'>
                                    <p>Usuário não encontrado!</p>
                                </div>";
                            } else {

                                echo
                                "<div class='alert'>
                                    <p>Email ou senha incorretos</p>
                                </div>";
                            }
                        }
                    }




                    $_SESSION['contadorLogin'] = 1;

                    ?>

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">

                    <?php
                    @$email = $_POST['email'];
                    if (isset($email)) {
                        if (strlen($email) < 1) {
                            echo
                            "<div class='alert'>
                                <p>Digite o seu email</p>
                            </div>";
                        }
                    }


                    ?>

                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha">


                    <?php
                    @$senha = $_POST['password'];

                    if (isset($senha)) {
                        if (strlen($senha) < 1) {
                            echo
                            "<div class='alert'>
                                    <p>Digite a sua senha</p>
                                </div>";
                        }
                    }


                    ?>

                    <input type="submit" value="Entrar">
                </form>

                <div class="after__form">
                    <!-- <span class="">Esqueceu a senha?</span> -->
                    <span class="before__after__span">Novo na Wutai?</span>
                    <a href="../register/register.php">Crie sua conta</a>
                </div>
            </div>
        </section>
    </div>

    <?php
    unset($_POST['email']);
    unset($senha);
    ?>
</body>

</html>