<?php 
session_start();

if(@$_SESSION['id'] == NULL){
    // não logou
}else{
    // logou
    header('Location:sellerRegister/sellerRegister.php?auth=true&id='.$_SESSION['id']);
}


?>
<?php include('sellerHeader.php '); ?>

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
                <a href="/php_programs/Wutai/Wutai/website/user/register/register.php">Começar</a>
            </div>

            <div class="affiliate__concept__image">
                <img src="../../assets/affiliate-concept2.png" alt="Afiliado">
            </div>

        </div>

    </main>
</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>