<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus endereços | Wutai</title>
</head>
<body>
<section id="createAccount">

        <form action="newAddress.act.php" method="POST">

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


            <label for="completeName"></label>
            <input type="text" name="completeName" id="completeName" placeholder="Nome completo">

            <label for="phoneNumber"></label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Telefone">

 

            <div class="seller__address">
                <label for="zipcode"></label>
                <input type="text" name="zipcode" id="zipcode" placeholder="CEP/Código postal">

                <label for="address"></label>
                <input type="text" name="address" id="address" placeholder="Linha de endereço">
                
                <label for="number"></label>
                <input type="text" name="number" id="number" placeholder="Número">

                <label for="complement"></label>
                <input type="text" name="complement" id="complement" placeholder="Complemento">

                <label for="neighborhood"></label>
                <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro">

                <label for="state"></label>
                <input type="text" name="state" id="state" placeholder="Estado">

                <label for="city"></label>
                <input type="text" name="city" id="city" placeholder="Cidade">
            </div>

            <input type="submit" value="Adicionar endereço">
        </form>
    </section>

</body>
</html>