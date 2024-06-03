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
                <form action="login.act.php" method="post">

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">

                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha">

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
</body>
<script src="../../../js/user.js"></script>

</html>