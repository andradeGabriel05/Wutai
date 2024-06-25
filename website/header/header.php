<?php

@session_start();
@define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
require_once(BASE_PATH . DIRECTORY_SEPARATOR . 'connect.php');

@$id = $_SESSION['idUser'];

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = "Entrar/Registar";
}


$userQueryPanelSeller = mysqli_query($conn, "SELECT * FROM `seller` WHERE `idUser` = '$id'");
$seller = mysqli_fetch_assoc($userQueryPanelSeller);
if ($seller) {
    $idSeller = $seller['idSeller'];
    $_SESSION['idSeller'] = $idSeller;
}

$userQueryCart = mysqli_query($conn, "SELECT idCart FROM `cart` WHERE `idUser` = '$id'");
$cart = mysqli_fetch_assoc($userQueryCart);

if ($cart) {
    $idCart = $cart['idCart'];
    $_SESSION['idCart'] = $idCart;
}

if (isset($_SESSION['idCart'])) {
    $idCart = $_SESSION['idCart'];
}
?>

<header>
    <a href="/php_programs/Wutai/Wutai/website/index.php"><img src="/php_programs/Wutai/Wutai/public/img/logo2.png" alt=""></a>
    <div class="search__box">
        <!-- <div class="dropdown"> -->
        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> -->
        <!-- </div> -->
        <form action="/php_programs/Wutai/Wutai/website/products/searchBar.php" method="POST">
            <input type="text" name="searchInput" id="searchInput" placeholder="">
            <button type="submit" id="searchButton" aria-label="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="header__wrapper">
        <div class="language">
            <i class="fa-solid fa-globe"></i>
            <a href="/php_programs/Wutai/Wutai/website/language.php" id="languagePage"></a>
        </div>

        <div class="user">
            <i class="fa-solid fa-user"></i>

            <?php
            if ($name != "Entrar/Registar") {
                echo "<a href='/php_programs/Wutai/Wutai/website/user/homepage/homepage.php' id='menu'><p class='menu__hello' style='margin: 0'></p>, $name!</a>
                    <div class='user__panel'>
                        <a href='/php_programs/Wutai/Wutai/website/user/homepage/homepage.php?user=$id' id='profile'></a>
                        <a href='/php_programs/Wutai/Wutai/website/user/orders/orders.php?user=$id' id='ordered'></a>
                        <a href='/php_programs/Wutai/Wutai/website/user/address/address.php?user=$id' id='address'></a>
                        <a href='/php_programs/Wutai/Wutai/website/user/settings/settings.php?user=$id' id='config'></a>";
                if (isset($idSeller)) {
                    echo "<a href='/php_programs/Wutai/Wutai/website/seller/sellerPanel.php?user=$idSeller' id='affiliate'></a>";
                }
                echo "<a href='/php_programs/Wutai/Wutai/website/user/login/logout.php' id='logout'></a>
                    </div>
                ";
            } else {
                echo "<a href='/php_programs/Wutai/Wutai/website/user/login/login.php' class='login'></a>
                <div class='user__panel'>
                <a href='/php_programs/Wutai/Wutai/website/user/register/register.php' id='register'></a>
                <a href='/php_programs/Wutai/Wutai/website/user/login/login.php' class='login'></a>";
                if (isset($idSeller)) {
                    echo "<a href='/php_programs/Wutai/Wutai/website/seller/sellerPanel.php?user=$idSeller'></a>";
                }
                echo "</div>";
            }
            ?>
        </div>

        <div class="cart__shopping">
            <?php
            if (isset($_SESSION['idCart'])) {
                @$sqlCount = "SELECT COUNT(idCart) FROM `cart_items` WHERE `idCart` = $idCart";
                @$sqlQueryCount = mysqli_query($conn, $sqlCount);
                @$count = mysqli_fetch_array($sqlQueryCount);

                echo "<i class='fa-solid fa-cart-shopping'><span> $count[0]</span></i>";
                if (isset($_SESSION['idUser'])) {
                    echo "<a href='/php_programs/Wutai/Wutai/website/user/cart/cart.php?user=$id'  id='cartHeader'></a>";
                } else {
                    echo "<a href='/php_programs/Wutai/Wutai/website/user/cart/cart.php'  id='cartHeader'></a>";
                }
            } else {


                echo "<i class='fa-solid fa-cart-shopping'><span></span></i>";
                if (isset($_SESSION['idUser'])) {
                    echo "<a href='/php_programs/Wutai/Wutai/website/user/cart/cart.php?user=$id'  id='cartHeader'></a>";
                } else {
                    echo "<a href='/php_programs/Wutai/Wutai/website/user/cart/cart.php'  id='cartHeader'></a>";
                }
            }
            ?>
        </div>
    </div>
</header>

<nav>

    <ul>
        <li><a href="/php_programs/Wutai/Wutai/website/index.php">Início</a></li>
        <li><a href="/php_programs/Wutai/Wutai/website/seller/sellerRegister/sellerRegister.php?auth=<?php echo isset($_SESSION['idUser']) ? 'true' : 'false'; ?>&seller=<?php echo isset($_SESSION['idSeller']) ? 'true' : 'false'; ?> " class="text-white">Venda na Wutai</a></li>
        <li><a href="/php_programs/Wutai/Wutai/website/support/contact.php">Atendimento ao cliente</a></li>
        <li><a href="/php_programs/Wutai/Wutai/website/products/searchBar.php?ref=book">Livros</a></li>
        <li><a href="/php_programs/Wutai/Wutai/website/products/searchBar.php?ref=electronic">Eletrônicos</a></li>

    </ul>
</nav>