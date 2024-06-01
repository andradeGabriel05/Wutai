<?php 
require('../../connect.php');
session_start();

// if($_SESSION['idUser'] == NULL){
//     // não logou
//     header('Location:../affiliatePage.php');
// }else{
//     // logado
//     // echo "Successfully logged in! " . $_SESSION['name'];
// }

if(@$_GET['auth'] == "false"){
    // não logou
    header('Location:../affiliatePage.php?auth=false');
    
} else {
    if(isset($_SESSION['idUser'])){

    } else {
        // não logou
        header('Location:../affiliatePage.php?auth=false');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/register/sellerRegister.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/sellerHeader.css">

</head>

<?php include('../sellerHeader.php'); ?>


<h2>Bem vindo ao Programa de Afiliados, <?php echo $_SESSION['name'] ." " . $_SESSION['surname']?>!</h2>
    <!-- create account -->
    <section id="createAccount">
        <form action="sellerRegister.act.php" method="post">

            <div class="name">
            <label for="enterpriseName"></label>
            <input type="text" name="enterpriseName" id="enterpriseName" placeholder="Nome da empresa">

            <label for="phoneNumber"></label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Telefone">

            <select name="country" id="country">
                <option value="brasil">Brasil</option>
                <option value="argentina">Argentina</option>
                <option value="chile">Chile</option>
                <option value="colombia">Colômbia</option>
                <option value="mexico">México</option>
                <option value="peru">Peru</option>
                <option value="uruguay">Uruguai</option>
                <option value="venezuela">Venezuela</option>
                <option value="ecuador">Ecuador</option>
                <option value="bolivia">Bolívia</option>
                <option value="paraguay">Paraguai</option>
                <option value="guyana">Guiana</option>
                <option value="suriname">Suriname</option>
                <option value="panama">Panamá</option>
                <option value="guatemala">Guatemala</option>
            </select>


            <div class="seller__address">
                <label for="zipcode"></label>
                <input type="text" name="zipcode" id="zipcode" placeholder="CEP/Código postal">

                <label for="address"></label>
                <input type="text" name="address" id="address" placeholder="Linha de endereço">
                
                <label for="state"></label>
                <input type="text" name="state" id="state" placeholder="Estado">

                <label for="city"></label>
                <input type="text" name="city" id="city" placeholder="Cidade">
            </div>

            <input type="submit" value="Create account">
        </form>
    </section>

</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>