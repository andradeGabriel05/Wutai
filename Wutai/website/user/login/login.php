<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Wutai</title>
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

</html>