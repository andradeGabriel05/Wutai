<?php
session_start();
@define('BASE_PATH', realpath(dirname(__FILE__) . '/../..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

$sellerNameResult = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idSeller` = '$_SESSION[idSeller]'");
$seller = mysqli_fetch_array($sellerNameResult);


@$idProduct = $_GET['productId'];

$_SESSION['idProduct'] = $idProduct;

$product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = '$idProduct'");

$product = mysqli_fetch_array($product);


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
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/panel/editProduct.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php //include('../header/header.php'); ?>
    <div class="affiliate__wrapper">

        <?php include('../productCRUD/aside/aside.php'); ?>


                <?php
                if (!isset($_GET['productId'])) {


                    echo "<div class='products'>
                    <h1>Seus produtos</h1>
        
                    <div class='container'>";
                    echo "<div class='wrapper__products'>";

                    $sqlProducts = "SELECT * FROM `product` WHERE `idSeller` = '$_SESSION[idSeller]'";

                    $products = mysqli_query($conn, $sqlProducts);

                    while ($product = mysqli_fetch_assoc($products)) {

                        $idProduct = $product['idProduct'];
                        $productName = $product['productName'];
                        $productImage = $product['productImage'];
                        $productPrice = $product['price'];


                ?>

                        <div class="container__products">
                            <a href="/php_programs/Wutai/Wutai/website/products/products_page.php?productId=<?php echo $idProduct; ?>">
                                <img src="<?php echo $productImage; ?>" alt="">
                                <div class="container__products__details">

                                    <span><?php echo $productName ?></span>
                                    <span>R$ <?php echo $productPrice ?></span>

                            </a>
                            <div class="container__products__alter">
                                <a href="/php_programs/Wutai/Wutai/website/seller/productCRUD/editProduct.php?productId=<?php echo $idProduct; ?>">Editar produto</a>
                            </div>
                        </div>
                        <!-- <span>Alterar produto</span> -->
            </div>
        <?php
                    }

                    echo "</div>
                    </div>
                    </div>

                    ";
                } else {
        ?>



        <section id="addProduct">
            <form action="/php_programs/Wutai/Wutai/website/seller/productCRUD/editProduct.act.php" method="POST" enctype="multipart/form-data">
                <div class="form-group" id="productName">
                    <label for="productName">Nome do produto</label>
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Nome do produto" value="<?php echo $product['productName'] ?>">
                </div>

                <label for="price">Preço</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="money">R$</span>
                    </div>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço" aria-describedby="money" value="<?php echo $product['price'] ?>" required>
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
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantidade" value="<?php echo $product['quantity'] ?>">
                </div>

                <div class="form-group">
                    <label for="productDescription">Descrição do produto</label>
                    <textarea class="form-control" id="productDescription" name="productDescription" rows="5" placeholder="Descrição do produto"><?php echo $product['productDescription'] ?></textarea>
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
                    <input type="file" class="form-control" id="productImageInput" name="productImage" value="<?php echo $product['productImage'] ?>" onchange="imagePreview(this)">
                </div>

                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" class="form-control" id="submit" name="submit">
                </div>
            </form>
        </section>

        <section id="productImage">
            <img src='<?php echo $product['productImage'] ?>' alt='' id="previewImg">
        </section>
        
        <?php
            }
        ?>
    </div>

    <script>
        function imagePreview(input) {
            let file = input.files[0];

            if(file) {
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