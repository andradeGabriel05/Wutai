<section class="container text-center">
    <div class="row gx-0 container__grid bg-body">
        <?php
        $product = mysqli_query($conn, "SELECT * FROM `product`");

        while ($product = mysqli_fetch_assoc($product)) {
            echo
            '
            <div class="col">
            <a href="products/products_page.php?productId=' . $product['idProduct'] . '">
            <div class="card">
            <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
            <div class="card-body">
            <h5 class="card-title">' . $product['productName'] . '</h5>
            <div class="price">
            <span class="currency" style="font-size: 20px;">R$</span>
            <span style="font-size: 30px;">' . $product['price'] . '</span>
            <span style="font-size: 20px;"></span>
            <span style="font-size: 20px;"></span>
            </div>
            </div>
            </div>
            </a>
            <div class="add__to__cart">
            <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
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
                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");

                                    echo
                                    '
                                            <a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                            <div class="card">
                                            <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">' . $product['productName'] . '</h5>
                                            <div class="price">
                                            <span class="currency" style="font-size: 20px;">R$</span>
                                            <span style="font-size: 30px;">' . $product['price'] . '</span>
                                            <span style="font-size: 20px;"></span>
                                            <span style="font-size: 20px;"></span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            <div class="add__to__cart">
                                            <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>';
                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php
                                    echo
                                    '
                                    
                                            <a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                            <div class="card">
                                            <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">' . $product['productName'] . '</h5>
                                            <div class="price">
                                            <span class="currency" style="font-size: 20px;">R$</span>
                                            <span style="font-size: 30px;">' . $product['price'] . '</span>
                                            <span style="font-size: 20px;"></span>
                                            <span style="font-size: 20px;"></span>
                                            </div>
                                            </div>
                                            </div>
                                            </a>
                                            <div class="add__to__cart">
                                            <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>';
                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
    <a href="products/products_page.php?productId=' . $product['idProduct'] . '">
    <div class="card">
    <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
    <div class="card-body">
    <h5 class="card-title">' . $product['productName'] . '</h5>
    <div class="price">
    <span class="currency" style="font-size: 20px;">R$</span>
    <span style="font-size: 30px;">' . $product['price'] . '</span>
    <span style="font-size: 20px;"></span>
    <span style="font-size: 20px;"></span>
    </div>
    </div>
    </div>
    </a>
    <div class="add__to__cart">
    <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
    </div>';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards__wrapper d-flex">
                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                <div class="card">

<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
</a>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>';
                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                <div class="card">

<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
</a>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>';
                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                <div class="card">

<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>
</a>
';
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="cards__wrapper d-flex">
                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                <div class="card">

<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>
</a>
';
                                    ?>
                                </div>
                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                <div class="card">

<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>
</a>
';
                                    ?>
                                </div>


                                <div class="card-deck">
                                    <?php

                                    $randomInt = random_int($min, $max);
                                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                                    $product = mysqli_fetch_assoc($product);

                                    echo
                                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
                                <div class="card">

<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
</a>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>';
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

                    $randomInt = random_int($min, $max);
                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                    $product = mysqli_fetch_assoc($product);

                    echo
                    '
    <a href="products/products_page.php?productId=' . $product['idProduct'] . '">
    <div class="card">
    <img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
    <div class="card-body">
    <h5 class="card-title">' . $product['productName'] . '</h5>
    <div class="price">
    <span class="currency" style="font-size: 20px;">R$</span>
    <span style="font-size: 30px;">' . $product['price'] . '</span>
    <span style="font-size: 20px;"></span>
    <span style="font-size: 20px;"></span>
    </div>
    </div>
    </div>
    </a>
    <div class="add__to__cart">
    <a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
    </div>';
                    ?>
                </div>
            </div>
        </div>



        <div class="row flex-nowrap">
            <div class="col-6 w-50">
                <div class="card-deck">
                    <?php

                    $randomInt = random_int($min, $max);
                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                    $product = mysqli_fetch_assoc($product);

                    echo
                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
<div class="card">
<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
</a>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>';
                    ?>
                </div>
            </div>
            <div class="col-6 w-50">
                <div class="card-deck" style="margin-right: 7px;">
                    <?php

                    $randomInt = random_int($min, $max);
                    $product = mysqli_query($conn, "SELECT * FROM `product` WHERE `idProduct` = $randomInt");


                    $product = mysqli_fetch_assoc($product);

                    echo
                    '
<a href="products/products_page.php?productId=' . $product['idProduct'] . '">
<div class="card">
<img src="/php_programs/Wutai/Wutai/website/seller/productCRUD/' . $product['productImage'] . '" alt="" class="img-thumbnail rounded-0" class="card-img-top" style="width: 19vw; height: 19vw;" alt="...">
<div class="card-body">
<h5 class="card-title">' . $product['productName'] . '</h5>
<div class="price">
<span class="currency" style="font-size: 20px;">R$</span>
<span style="font-size: 30px;">' . $product['price'] . '</span>
<span style="font-size: 20px;"></span>
<span style="font-size: 20px;"></span>
</div>
</div>
</div>
</a>
<div class="add__to__cart">
<a href="/php_programs/Wutai/Wutai/website/user/cart/addProductCart.act.php?productId=' . $product['idProduct'] . '"><i class="fa-solid fa-cart-shopping"></i></a>
</div>';
                    ?>
                </div>
            </div>
        </div>
</section>