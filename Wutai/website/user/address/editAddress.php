<?php
require('../../connect.php');
session_start();
$idAddress = $_SESSION['idAddress'];

echo $idAddress;

//usuario tentou burlar
if($idAddress != $_GET['address']) {
    header('Location: /php_programs/Wutai/Wutai/website/user/address/editAddress.php?address='.$idAddress);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar endereço | Wutai</title>
</head>
<body>
    
</body>
</html>