<?php
require('../../connect.php');
session_start();
$idAddress = $_GET['address'];
$_SESSION['idAddress'] = $idAddress;

// @$idVerification = $_SESSION['selectedAddress'];

//usuario tentou burlar
if (!isset($_SESSION['idUser'])) {
    echo "Você não tem permissão para acessar essa página";
    exit;
}

$userAddresses = mysqli_query($conn, "SELECT * FROM `address` WHERE `idUser` = '{$_SESSION['idUser']}' AND `idAddress` = '$idAddress'");

$addressUser = mysqli_num_rows($userAddresses) > 0;

//usuario tentou burlar
if (!$addressUser) {
    echo "Você não tem permissão para acessar essa página 20";

    // header("Location: editAddress.php?address=$idAddress}");
    exit;
}

//usuario tentou burlar
// if (!isset($_SESSION['selectedAddress']) || $_SESSION['selectedAddress'] !== $_GET['address']) {
//     // header("Location: editAddress.php?address={$_SESSION['selectedAddress']}");
//     exit;
// }


// $_SESSION['selectedAddress'] = $_GET['address'];



$sql = "SELECT * FROM address WHERE idAddress = $idAddress";

$result = mysqli_query($conn, $sql);

$address = mysqli_fetch_assoc($result);

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
                <label for="completeName" class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="completeName" id="completeName" value="<?php echo $address['completeName'] ?>">
            </div>
            <div class="col-12">
                <label for="phoneNumber" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" value="<?php echo $address['phoneNumber'] ?>">
            </div>


            <div class="col-12">

                <label for="country" class="form-label">País</label>
                <select class="form-select" aria-label="Default select example" name="country" id="country">
                    <?php


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



            <div class="col-md-6">
                <label for="zipcode" class="form-label">CEP</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo $address['zipcode'] ?>">
            </div>
            <div class="col-md-4">
                <label for="zipcode" class="form-label">Complemento</label>
                <input type="text" class="form-control" name="complement" id="complement" value="<?php echo $address['complement'] ?>">
            </div>
            <div class="col-md-2">
                <label for="zipcode" class="form-label">Número</label>
                <input type="text" class="form-control" name="number" id="number" value="<?php echo $address['houseNumber'] ?>">
            </div>


            

                <div class="col-md-6">
                    <label for="address" class="form-label">Linha de endereço</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $address['address'] ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $address['city'] ?>" readonly>
                </div>



                <div class="col-md-2">
                    <label for="state" class="form-label">Estado</label>
                    <input type="text" name="state" id="state" class="form-control" value="<?php echo $address['state'] ?>" readonly>
                </div>

                <div class="col-12">
                    <label for="neighborhood" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="<?php echo $address['neighborhood'] ?>" readonly>
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