<?php
function randomProduct()
{
    require('connect.php');
    $min = 28;
    $max = 42;

    $randomInt = random_int($min, $max);
    $productInt = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");

    $productRand = mysqli_fetch_assoc($productInt);

    if (!$productRand) {
        echo "No product found."; // Or handle this case as needed
    } else {
        echo
        '
        
                <a href="products/products_page.php?productId=' . $productRand['idProduct'] . '">
                <div class="card">
                <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $productRand['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
                <div class="card-body">
                <h5 class="card-title">' . $productRand['productName'] . '</h5>
                <div class="price">
                <span class="currency" style="font-size: 20px;">R$</span>
                <span style="font-size: 30px;">' . $productRand['price'] . '</span>
                <span style="font-size: 20px;"></span>
                <span style="font-size: 20px;"></span>
                </div>
                </div>
                </div>
                </a>
                <div class="add__to__cart">
                <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $productRand['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>';
    }
}

?>

<section class="container text-center">
    <div class="row gx-0 container__grid bg-body">
        <?php
        $product = mysqli_query($conn, "SELECT * FROM `product`");

        while ($products = mysqli_fetch_assoc($product)) {
            echo
            '
            <div class="col">
            <a href="products/products_page.php?productId=' . $products['idProduct'] . '">
            <div class="card">
            <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $products['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
            <div class="card-body">
            <h5 class="card-title">' . $products['productName'] . '</h5>
            <div class="price">
            <span class="currency" style="font-size: 20px;">R$</span>
            <span style="font-size: 30px;">' . $products['price'] . '</span>
            <span style="font-size: 20px;"></span>
            <span style="font-size: 20px;"></span>
            </div>
            </div>
            </div>
            </a>
            <div class="add__to__cart">
            <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $products['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            </div>';
        }
        ?>


    </div>


    <div class="container text-center">

        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards__wrapper d-flex ">
                                <div class="card-deck">
                                    <?php


                                    randomProduct()
                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards__wrapper d-flex">
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="cards__wrapper d-flex">
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>


                                <div class="card-deck">
                                    <?php
                                    randomProduct()

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col container__grid p-0">
                <div class="card-deck">
                    <?php
                    randomProduct()

                    ?>
                </div>
            </div>
        </div>



        <div class="row flex-nowrap">
            <div class="col-6 w-50">
                <div class="card-deck">
                    <?php
                    randomProduct()

                    ?>
                </div>
            </div>
            <div class="col-6 w-50">
                <div class="card-deck" style="margin-right: 7px;">
                    <?php
                    randomProduct()

                    ?>
                </div>
            </div>
        </div>
</section>