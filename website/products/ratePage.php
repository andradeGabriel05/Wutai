<?php
session_start();
if (isset($_SESSION['idUser'])) {
} else {
    header('Location: /php_programs/Wutai/Wutai/website/user/login/login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar produto | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/productPage.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include('../header/header.php'); ?>
    <form action="ratePage.act.php?productId=<?php echo $_GET['productId'] ?>" method="POST">
        <div class='product__container__ratePage'>
            <div class="product__info__wrapper">
                <h4>Deixe uma avaliação</h4>
                <?php
                if (isset($_GET['productId'])) {
                    $sqlSelect = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = '$_GET[productId]'");

                    $product = mysqli_fetch_assoc($sqlSelect);

                    echo "
                    <div class='product__name__img'>
                        <a href='products/products_page.php?productId=$_GET[productId]'>
                            <img src='../seller/productCRUD/$product[productImage]' class='product__rate__image'>
                            <p>$product[productName]</p>
                        </a>
                    </div>
                    ";
                }
                ?>
            </div>

            <div class="rate__user__wrapper">
                <h4>Classificação do produto</h4>

                <div class="rate__stars">
                    <i class="fa fa-star-o" data-value='1'></i>
                    <i class=" fa fa-star-o" data-value='2'></i>
                    <i class="fa fa-star-o" data-value='3'></i>
                    <i class="fa fa-star-o" data-value='4'></i>
                    <i class="fa fa-star-o" data-value='5'></i>

                    <span class="color__span__ratePage" id="cleanStars">
                        Limpar
                    </span>

                    <?php
                    if (isset($_GET['rating'])) {
                        $rating = $_GET['rating'];
                        $_SESSION['rating'] = $rating;
                    } else {
                        $rating = 0;
                    }


                    ?>
                </div>


            </div>

            <div class="title__ratePage">
                <h4><label for="title">Título da avaliação</label></h4>
                <input type="text" name="title" id="title" placeholder="O que é mais importante na sua avaliação?">
            </div>

            <div class="image__product__ratePage">
                <h4>Deseja adicionar alguma imagem?</h4>
                <p>Fotos ou vídeos podem ser importante para outros clientes</p>
                <label for="imageRatePage" class="custom-file-upload">
                    <input type="file" name="imageRatePage" id="imageRatePage">
                </label>
            </div>

            <div class="textarea__rate__ratePage">
                <h4>Deixe sua avaliação</h4>
                <textarea name="textareaRatePage" id="textareaRatePage" cols="30" rows="10" placeholder="Do que você gostou ou não gostou do produto? Escreva a sua opinião."></textarea>

            </div>

            <div class="input__submit__ratePage">
                <input type="submit" name="submitRatePage" id="submitRatePage" value="Enviar avaliação">
            </div>
    </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rate__stars .fa').on('click', function() {
                const rating = $(this).data('value'); // aramzena valor do data no html

                $(this).prevAll().addClass('fa-star').removeClass('fa-star-o');
                $(this).addClass('fa-star').removeClass('fa-star-o');
                $(this).nextAll().addClass('fa-star-o').removeClass('fa-star');

                $('#cleanStars').show();



                $.ajax({
                    url: 'ratePage.php', // url do arquivo PHP
                    method: 'GET', // mandando
                    data: { // valor do data no html
                        'rating': rating
                    },
                    success: function(response) {
                        var rating = response;
                        console.log('Avaliação enviada com sucesso: ' + response);
                    },
                    error: function(xhr, status, error) {
                        console.log('Erro ao enviar avaliação:');
                        console.log('Status: ' + status);
                        console.log('Erro: ' + error);
                        console.log('Resposta do servidor: ' + xhr.responseText);
                    }
                });
            });

            $('#cleanStars').on('click', () => {
                $('.rate__stars .fa').removeClass('fa-star').addClass('fa-star-o');
                $('#cleanStars').hide();
            })

        });
    </script>
    <?php include('../footer/footer.php'); ?>