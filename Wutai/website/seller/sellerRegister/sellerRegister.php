<?php 
require('../../connect.php');
session_start();

if(@$_GET['auth'] == "false"){
    // não logou
    header('Location:../affiliatePage.php?auth=false');
    
} else {
    if(!isset($_SESSION['idUser'])){
        // não logou
        header('Location:../affiliatePage.php?auth=false');
    }
}

if(@$_GET['seller'] == "true"){
    // logado como vendedor

    header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePanel.php?seller=true');
} else {

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/register/sellerRegister.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/sellerHeader.css">

</head>

<?php include('../header/sellerHeader.php'); ?>


<h2>Bem vindo ao Programa de afiliados Wutai, <?php echo $_SESSION['name']?>!</h2>
    <!-- create account -->
    <section id="createAccount">
        <form action="sellerRegister.act.php" method="post">

            <div class="name">
            <label for="enterpriseName"></label>
            <input type="text" name="enterpriseName" id="enterpriseName" placeholder="Nome da empresa">

            <input type="submit" value="Afiliar-se">
        </form>
    </section>

</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>