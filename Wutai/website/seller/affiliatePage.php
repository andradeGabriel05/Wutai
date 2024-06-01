<?php 
session_start();
//se não foi logado
if($_GET['auth'] == "false"){
    //verificando se o usuario burlou o sistema
    if(isset($_SESSION['idUser'])) {
        header('Location:sellerRegister/sellerRegister.php?auth=true&seller=false');
    }

}else{
    // logou
    header('Location:sellerRegister/sellerRegister.php?auth=true&seller=false');
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/sellerHeader.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/affiliatePage.css">
</head>

<body>
<?php include('header/sellerHeader.php'); ?>

    <main>
        <div class="affiliate__wrapper">

            <div class="affiliate__panel">
                <h1>Programa de Afiliados</h1>
                <p>Ganhe comissão a partir de pedidos que você traz para a Wutai
                    ao se juntar ao Programa de Afiliados da Wutai.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates accusamus,
                    natus voluptas perspiciatis, aliquid asperiores architecto error molestias nam saepe sapiente. Eum expedita doloribus distinctio!</p>

                <p>Sua conta de afiliado fica vinculada a sua conta de comprador. 
                    Caso já tenha uma conta na Wutai, faça o login antes de realizar a inscrição no programa.</p>
                <a href="/php_programs/Wutai/Wutai/website/user/login/login.php">Começar</a>
            </div>

            <div class="affiliate__concept__image">
                <img src="../../assets/affiliate-concept2.png" alt="Afiliado">
            </div>

        </div>

    </main>
</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>