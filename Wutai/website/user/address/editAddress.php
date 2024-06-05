<?php
require('../../connect.php');
session_start();
$idAddress = $_GET['address'];

$idVerification = $_SESSION['selectedAddress'];

//usuario tentou burlar
if (!isset($_SESSION['idUser']) || !isset($_SESSION['idAddress'])) {
    echo "Você não tem permissão para acessar essa página";
    exit;
}

$userAddresses = mysqli_query($conn, "SELECT * FROM `address` WHERE `idUser` = '{$_SESSION['idUser']}' AND `idAddress` = '$idAddress'");

$addressUser = mysqli_num_rows($userAddresses) > 0;

//usuario tentou burlar
if (!$addressUser) {
    header("Location: editAddress.php?address={$_SESSION['selectedAddress']}");
    exit;
}

//usuario tentou burlar
if (!isset($_SESSION['selectedAddress']) || $_SESSION['selectedAddress'] !== $_GET['address']) {
    header("Location: editAddress.php?address={$_SESSION['selectedAddress']}");
    exit;
}


$_SESSION['selectedAddress'] = $_GET['address'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar endereço | Wutai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/header.css">
    <link rel="stylesheet" href="../../../styles/user/address/newAddress.css">

</head>

<body>

    <?php include('../../header/header.php'); ?>
    <section id="newAddress">

        <form action="editAddress.act.php" method="POST" class="row g-3 form-inline">
            <div class="col-12">

                <label for="country" class="form-label">País</label>
                <select class="form-select" aria-label="Default select example" name="country" id="country">
                    <?php

                    $sql = "SELECT * FROM address WHERE idAddress = $idAddress";

                    $result = mysqli_query($conn, $sql);

                    $address = mysqli_fetch_assoc($result);

                    $arrayCountry = array(
                        'Brasil',
                        'Argentina',
                        'Chile',
                        'Colômbia',
                        'México',
                        'Peru',
                        'Uruguai',
                        'Venezuela',
                        'Ecuador',
                        'Bolívia',
                        'Paraguai',
                        'Guiana',
                        'Suriname',
                        'Panamá',
                        'Guatemala'
                    );

                    echo "<option value= {$address['country']}> {$address['country']}</option>";

                    foreach ($arrayCountry as $arrayCountry) {
                        if ($arrayCountry != $address['country']) {
                            echo "<option value='$arrayCountry'>$arrayCountry</option>";
                        }
                    }

                    ?>
                </select>
            </div>

            <div class="col-12">
                <label for="completeName" class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="completeName" id="completeName" value="<?php echo $address['completeName'] ?>">
            </div>

            <div class="col-12">
                <label for="phoneNumber" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" value="<?php echo $address['phoneNumber'] ?>">
            </div>

            <div class="col-md-6">
                <label for="address" class="form-label">Linha de endereço</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo $address['address'] ?>">
            </div>
            <div class="col-md-4">
                <label for="zipcode" class="form-label">Complemento</label>
                <input type="text" class="form-control" name="complement" id="complement" value="<?php echo $address['complement'] ?>">
            </div>
            <div class="col-md-2">
                <label for="zipcode" class="form-label">Número</label>
                <input type="text" class="form-control" name="number" id="number" value="<?php echo $address['houseNumber'] ?>">
            </div>
            <div class="col-12">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="<?php echo $address['neighborhood'] ?>">
            </div>

            <div class="col__last__input">

                <div class="col-md-6">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $address['city'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">Estado</label>
                    <select class="form-select" name="state" id="state" value="<?php echo $address['state'] ?>">
                        <?php

                        $statesSql = array(
                            'acre' => "Acre",
                            'alagoas' => "Alagoas",
                            'amapa' => "Amapá",
                            'amazonas' => "Amazonas",
                            'bahia' => "Bahia",
                            'ceara' => "Ceará",
                            'distrito_federal' => "Distrito Federal",
                            'espirito_santo' => "Espírito Santo",
                            'goias' => "Goiás",
                            'maranhao' => "Maranhão",
                            'mato_grosso' => "Mato Grosso",
                            'mato_grosso_do_sul' => "Mato Grosso do Sul",
                            'minas_gerais' => "Minas Gerais",
                            'para' => "Pará",
                            'paraiba' => "Paraíba",
                            'parana' => "Paraná",
                            'pernambuco' => "Pernambuco",
                            'piaui' => "Piauí",
                            'rio_de_janeiro' => "Rio de Janeiro",
                            'rio_grande_do_norte' => "Rio Grande do Norte",
                            'rio_grande_do_sul' => "Rio Grande do Sul",
                            'rondonia' => "Rondônia",
                            'roraima' => "Roraima",
                            'santa_catarina' => "Santa Catarina",
                            'sao_paulo' => "São Paulo",
                            'sergipe' => "Sergipe",
                            'tocantins' => "Tocantins"
                        );

                        echo "<option value= {$address['state']}> {$address['state']}</option>";

                        foreach ($statesSql as $statesSql) {
                            if ($statesSql != $address['state']) {
                                echo "<option value='$statesSql'>$statesSql</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="zipcode" class="form-label">CEP</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo $address['zipcode'] ?>">
                </div>
            </div>

            <div class="button__class__submit">
                <input type="submit" value="Editar endereço" class="btn btn-primary" style="background-color: #000; padding: 15px; border-radius: 8px;">
            </div>

        </form>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>