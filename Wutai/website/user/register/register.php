<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join | Wutai</title>
    <link rel="stylesheet" href="../../../styles/user.css">
</head>
<body>
    <div class="logo">
        <img src="../../../public/img/logo.png" alt="logo" id="logoImg">
    </div>

    <div class="switch__tab">
        <ul>
            <li><button id="joinBtn">Join</button></li>
            <li><button id="createAccountBtn">Create account</button></li>
        </ul>

    </div>
    <!-- create account -->
    <section id="createAccount">
        <form action="register.act.php" method="post">
            <div class="name">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Name">
            
                <label for="surname"></label>
                <input type="text" name="surname" id="surname" placeholder="Surname">
            </div>

            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Email">

            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Password">

            <label for="birthdate"></label>
            <input type="text" name="birthdate" id="birthdate" placeholder="Birth date">
            <input type="submit" value="Create account">
        </form>
    </section>

    <section id="join">
        <form action="login.act.php" method="post">
            


            <label for="email"></label>
            <input type="text" name="email" id="email">

            <label for="password"></label>
            <input type="text" name="password" id="password">
       
            <input type="submit" value="Entrar">
        </form>
    </section>
</body>
<script src="../../../js/user.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</html>