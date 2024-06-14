<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Wutai</title>
    <link rel="stylesheet" href="../../../styles/user/login/user.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body>
    <div class="wrapper__page">
        <div class="concept">
            <img src="../../../assets/login5.png" alt="concept" id="conceptImg">
        </div>

        <section id="createAccount">
            <div class="form__wrapper">
            <a href="/php_programs/Wutai/Wutai/website/index.php"><img src="../../../public/img/logo2.png" alt=""></a>

                <h1>Criar conta</h1>
                <form action="register.act.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nome" id="name" name="name" aria-label="Nome">
                            <input type="text" class="form-control" placeholder="Sobrenome" id="surname" name="surname" aria-label="Sobrenome">

                        </div>
                    </div>

                    <label for="email"></label>
                    <input type="text" name="email" id="email" placeholder="Email">

                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Senha">

                    <label for="birthdate"></label>
                    <input type="text" name="birthdate" id="birthdate" placeholder="Data de nascimento">
                    <input type="submit" value="Criar conta">
                </form>

                
                <div class="after__form">
                    <!-- <span class="">Esqueceu a senha?</span> -->
                    <span class="before__after__span">Já tem uma conta?</span>
                    <a href="../login/login.php">Entre na sua conta</a>
                </div>
            </div>
        </section>
</body>
<script src="../../../js/user.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
</html>