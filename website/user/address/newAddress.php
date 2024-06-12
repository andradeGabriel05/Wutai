<?php
session_start();

$idUser = $_SESSION['idUser'];

$idPage = $_GET['user'];

if ($idPage != $idUser) {
    header('Location:/php_programs/Wutai/Wutai/website/user/address/newAddress.php?user=' . $idUser);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus endereços | Wutai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/header.css">
    <link rel="stylesheet" href="../../../styles/user/address/newAddress.css">

</head>

<body>

    <?php include ('../../header/header.php'); ?>
    <section id="newAddress">

        <form action="newAddress.act.php" method="POST" class="row g-3 form-inline">

            <div class="col-12">
                <label for="completeName" class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="completeName" id="completeName">
            </div>

            <div class="col-12">
                <label for="phoneNumber" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
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

                    foreach ($arrayCountry as $arrayCountry) {
                        echo "<option value='$arrayCountry'>$arrayCountry</option>";
                    }

                    ?>
                </select>
            </div>

                <div class="col-md-6">
                    <label for="zipcode" class="form-label">CEP</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode">
                </div>

                <div class="col-md-4">
                <label for="zipcode" class="form-label">Complemento</label>
                <input type="text" class="form-control" name="complement" id="complement">
            </div>
            <div class="col-md-2">
                <label for="zipcode" class="form-label">Número</label>
                <input type="text" class="form-control" name="number" id="number">
            </div>

                    <!-- <select class="form-select" name="state" id="state">
                        <?php

                        // $statesSql = array(
                        //     'acre' => "Acre",
                        //     'alagoas' => "Alagoas",
                        //     'amapa' => "Amapá",
                        //     'amazonas' => "Amazonas",
                        //     'bahia' => "Bahia",
                        //     'ceara' => "Ceará",
                        //     'distrito_federal' => "Distrito Federal",
                        //     'espirito_santo' => "Espírito Santo",
                        //     'goias' => "Goiás",
                        //     'maranhao' => "Maranhão",
                        //     'mato_grosso' => "Mato Grosso",
                        //     'mato_grosso_do_sul' => "Mato Grosso do Sul",
                        //     'minas_gerais' => "Minas Gerais",
                        //     'para' => "Pará",
                        //     'paraiba' => "Paraíba",
                        //     'parana' => "Paraná",
                        //     'pernambuco' => "Pernambuco",
                        //     'piaui' => "Piauí",
                        //     'rio_de_janeiro' => "Rio de Janeiro",
                        //     'rio_grande_do_norte' => "Rio Grande do Norte",
                        //     'rio_grande_do_sul' => "Rio Grande do Sul",
                        //     'rondonia' => "Rondônia",
                        //     'roraima' => "Roraima",
                        //     'santa_catarina' => "Santa Catarina",
                        //     'sao_paulo' => "São Paulo",
                        //     'sergipe' => "Sergipe",
                        //     'tocantins' => "Tocantins"
                        // );
                        
                        // foreach ($statesSql as $statesSql) {
                        //     if ($statesSql != $address['state']) {
                        //         echo "<option value='$statesSql'>$statesSql</option>";
                        //     }
                        // }
                        ?>
                    </select> -->

                <!-- 
            <label for="completeName"></label>
            <input type="text" name="completeName" id="completeName" placeholder="Nome completo"> -->

            <!-- <label for="phoneNumber"></label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Telefone">
 -->


            <!-- <div class="seller__address"> -->
            <!-- <label for="zipcode"></label>
                <input type="text" name="zipcode" id="zipcode" placeholder="CEP/Código postal"> -->

            <!-- <label for="address"></label>
                <input type="text" name="address" id="address" placeholder="Linha de endereço"> -->
            <!-- 
                <label for="number"></label>
                <input type="text" name="number" id="number" placeholder="Número"> -->
            <!-- 
                <label for="complement"></label>
                <input type="text" name="complement" id="complement" placeholder="Complemento"> -->
            <!-- 
                <label for="neighborhood"></label>
                <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro">

                <label for="state"></label>
                <input type="text" name="state" id="state" placeholder="Estado">

                <label for="city"></label>
                <input type="text" name="city" id="city" placeholder="Cidade"> -->

            <div class="col-md-6">
                <label for="address" class="form-label">Linha de endereço</label>
                <input type="text" class="form-control" name="address" id="address" readonly>
            </div>


            
            <div class="col-md-4">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="city" id="city" readonly>
                </div>
                <div class="col-md-2">
                    <label for="state" class="form-label">Estado</label>
                    <input type="text" name="state" id="state" class="form-control" readonly>
                </div>

            <div class="col-12">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="neighborhood" id="neighborhood" readonly>
            </div>



            <div class="button__class__submit">
                <input type="submit" value="Adicionar endereço" class="btn btn-primary"
                    style="background-color: #000; padding: 15px; border-radius: 8px;">
            </div>

        </form>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
<script src="/php_programs/Wutai/Wutai/js/address/newAddress.js" defer></script>

</html>