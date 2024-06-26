<?php
session_start();
@define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');


if (@$_GET['seller'] == "true") {
    // logado como vendedor
    if (!isset($_SESSION['idSeller'])) {
        header('Location:/php_programs/Wutai/Wutai/website/seller/sellerPage.php?auth=true&seller=false');
    }
} else {
    if (isset($_SESSION['idSeller'])) {
        header('Location:/php_programs/Wutai/Wutai/website/seller/productCRUD/addProduct.php?seller=true&panel=add');
    }
}

$sellerNameResult = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idSeller` = '$_SESSION[idSeller]'");
$seller = mysqli_fetch_array($sellerNameResult);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/aside/aside.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/panel/addProduct.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php //include('../header/header.php'); 
    ?>
    <div class="affiliate__wrapper">

        <?php include('../productCRUD/aside/aside.php'); ?>


        <!-- <section id="productsSelled">
            <div class="product__information">
                <div class="block1">a preparar</div>
                <div class="block1">pronto para enviar</div>
                <div class="block1">em transito</div>
                <div class="block1">concluido</div>
            </div>
        </section> -->


        <section id="addProduct">
            <form action="/php_programs/Wutai/Wutai/website/seller/productCRUD/addProduct.act.php" method="POST" enctype="multipart/form-data">
                <div class="form-group" id="productName">
                    <label for="productName">Nome do produto</label>
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Nome do produto">
                </div>

                <label for="price">Preço</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="money">R$</span>
                    </div>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço" aria-describedby="money" required>
                </div>

                <div class="form-group">
                    <label for="category">Categoria</label>
                    <select class="form-control" name="category" id="category">
                        <option value="food">Comida</option>
                        <option value="drink">Bebida</option>
                        <option value="hygiene">Higiene</option>
                        <option value="cleaning">Limpeza</option>
                        <option value="perfumery">Perfumaria</option>
                        <option value="house">Casa</option>
                        <option value="garden">Jardim</option>
                        <option value="clothing">Roupas</option>
                        <option value="health">Saúde</option>
                        <option value="apparel">Vestuário</option>
                        <option value="electronic">Eletrônico</option>
                        <option value="book">Livro</option>
                    </select>
                </div>

                <div class="form-group" id="quantity">
                    <label for="quantity">Quantidade</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantidade">
                </div>

                <div class="form-group">
                    <label for="productDescription">Descrição do produto</label>
                    <textarea class="form-control" id="productDescription" name="productDescription" rows="5" placeholder="Descrição do produto"></textarea>
                </div>

                <div class="form-check">
                    <label class="form-check-label" for="deliverWutai">
                        <input class="form-check-input" type="radio" name="deliver" id="deliverWutai" value="Wutai" checked>
                        A Wutai entregará o produto
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label" for="deliverSeller">
                        <input class="form-check-input" type="radio" name="deliver" id="deliverSeller" value="<?php echo $seller['enterpriseName'] ?>">
                        Eu mesmo entregarei este produto
                    </label>
                </div>


                <div class="form-group">
                    <label for="productImageInput" class="custom-file-upload">Imagem do produto</label>
                    <input type="file" class="form-control" id="productImageInput" name="productImage" onchange="imagePreview(this)">
                </div>

                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" class="form-control" id="submit" name="submit" value="Enviar">
                </div>
            </form>
        </section>

        <section id="productImage">
            <label for="productImageInput">
                <img src='/php_programs/Wutai/Wutai/public/img/waiting-for-image.png' style="cursor: pointer;" alt='' id="previewImg">
            </label>
        </section>

    </div>

    <script>
        function imagePreview(input) {
            let file = input.files[0];

            if (file) {
                let reader = new FileReader();

                reader.onload = () => {
                    $('#previewImg').attr("src", reader.result)
                }

                reader.readAsDataURL(file);
            }
            console.log(reader.result)
        }
    </script>

    <?php include('../../footer/footer.php'); ?>