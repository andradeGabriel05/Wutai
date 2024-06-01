<?php
session_start();

if (@$_GET['seller'] == "true") {
    // logado como vendedor
    if (!isset($_SESSION['idSeller'])) {
        header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePage.php?auth=true&seller=false');
    }
} else {
    if (isset($_SESSION['idSeller'])) {
        header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePanel.php?seller=true');
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/panel/affiliatePanel.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include('../header/header.php'); ?>

    <div class="affiliate__wrapper">
        <aside>
            <a href="">Início</a>
            <a href="">Suas vendas</a>
            <a href="addProduct">Adicionar produtos</a>
            <a href="">Editar produtos</a>
            <a href="">Deletar produtos</a>
            <a href="">Métricas</a>
            <a href="">Sua receita</a>
        </aside>

        <!-- <section id="productsSelled">
            <div class="product__information">
                <div class="block1">a preparar</div>
                <div class="block1">pronto para enviar</div>
                <div class="block1">em transito</div>
                <div class="block1">concluido</div>
            </div>
        </section> -->

        <section id="addProduct">
            <form action="/php_programs/Wutai/Wutai/website/seller/productCRUD/addProduct.act.php" method="POST">
                <div class="form-group" id="productName">
                    <label for="productName">Nome do produto</label>
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Nome do produto">
                </div>

                <div class="form-group">
                    <label for="price">Preço do produto</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço do produto">
                </div>

                <div class="form-group">
                    <label for="category">Categoria</label>
                    <select class="form-control" name="category" id="category">
                        <option value="food">Comida</option>
                        <option value="drink">Bebida</option>
                        <option value="hygiene">Higiene</option>
                        <option value="cleaning">Limpeza</option>
                        <option value="perfumery">Perfumaria</option>
                        <option value="clothing">Roupas</option>
                        <option value="health">Saúde</option>
                        <option value="apparel">Vestuário</option>
                        <option value="book">Livro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantidade</label>
                    <select class="form-control" id="quantity" name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="productDescription">Descrição do produto</label>
                    <textarea class="form-control" id="productDescription" name="productDescription" rows="5" placeholder="Descrição do produto"></textarea>
                </div>

                <div class="form-group">
                    <label for="productImage">Imagem do produto</label>
                    <input type="file" class="form-control" id="productImage" name="productImage" onchange="previewFile(this)">
                </div>

                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" class="form-control" id="submit" name="submit" value="Enviar">
                </div>
            </form>
        </section>

        <section id="productImage">
            <img src='https://img.freepik.com/free-vector/think-outside-box-concept-illustration_114360-15734.jpg' alt='' id="previewImg">
        </section>

    </div>

    <script>
        function previewFile(input) {
            $("#previewImg").fadeOut(100);
            $("#imagemAtual").css("filter", "blur(5px)");
            $("#previewImg").css("filter", "blur(0px)");
            var file = $("input[type=file]").get(0).files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                };

                reader.readAsDataURL(file);
            }
            $("#previewImg").fadeIn(800);
        }
    </script>
    <?php include('../footer/footer.php'); ?>