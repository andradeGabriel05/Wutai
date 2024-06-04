<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus endereços | Wutai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/header.css">
    <link rel="stylesheet" href="../../../styles/user/address/newAddress.css">

</head>

<body>

    <?php include('../../header/header.php'); ?>
    <section id="newAddress">

        <form action="newAddress.act.php" method="POST" class="row g-3 form-inline">
        <div class="col-12">

            <label for="country" class="form-label">País</label>
            <select class="form-select" aria-label="Default select example" name="country" id="country">
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
</div>


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

            <div class="col-12">
                <label for="completeName" class="form-label">Nome completo</label>
                <input type="text" class="form-control" name="completeName" id="completeName">
            </div>

            <div class="col-12">
                <label for="phoneNumber" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
            </div>

                <div class="col-md-6">
                    <label for="address" class="form-label">Linha de endereço</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="col-md-4">
                    <label for="zipcode" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complement" id="complement">
                </div>
                <div class="col-md-2">
                    <label for="zipcode" class="form-label">Número</label>
                    <input type="text" class="form-control" name="number" id="number">
                </div>
            <div class="col-12">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="neighborhood" id="neighborhood">
            </div>


            <div class="col-md-6">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="city" id="city">
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" name="state" id="state">
                    <option value="acre">Acre</option>
                    <option value="alagoas">Alagoas</option>
                    <option value="amapa">Amapá</option>
                    <option value="amazonas">Amazonas</option>
                    <option value="bahia">Bahia</option>
                    <option value="ceara">Ceará</option>
                    <option value="distrito_federal">Distrito Federal</option>
                    <option value="espirito_santo">Espírito Santo</option>
                    <option value="goias">Goiás</option>
                    <option value="maranhao">Maranhão</option>
                    <option value="mato_grosso">Mato Grosso</option>
                    <option value="mato_grosso_do_sul">Mato Grosso do Sul</option>
                    <option value="minas_gerais">Minas Gerais</option>
                    <option value="para">Pará</option>
                    <option value="paraiba">Paraíba</option>
                    <option value="parana">Paraná</option>
                    <option value="pernambuco">Pernambuco</option>
                    <option value="piaui">Piauí</option>
                    <option value="rio_de_janeiro">Rio de Janeiro</option>
                    <option value="rio_grande_do_norte">Rio Grande do Norte</option>
                    <option value="rio_grande_do_sul">Rio Grande do Sul</option>
                    <option value="rondonia">Rondônia</option>
                    <option value="roraima">Roraima</option>
                    <option value="santa_catarina">Santa Catarina</option>
                    <option value="sao_paulo">São Paulo</option>
                    <option value="sergipe">Sergipe</option>
                    <option value="tocantins">Tocantins</option>

                    
                </select>
            </div>
            <div class="col-md-2">
                <label for="zipcode" class="form-label">CEP</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode">
            </div>

            <div class="button__class__submit">
                <input type="submit" value="Adicionar endereço" class="btn btn-primary" style="background-color: #000; padding: 15px; border-radius: 8px;">
            </div>

        </form>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>