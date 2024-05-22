<?php
session_start();
require("./connect.php");
@$id = $_SESSION['id'];

$userQueryPanel = mysqli_query($conn, "SELECT * FROM `user` WHERE `id` = '$id'");
$userPanel = mysqli_fetch_assoc($userQueryPanel);


if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = "Entrar/Registar";
}

?>

<header>
    <a href="../website/index.php"><img src="../public/img/logo2.png" alt=""></a>
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
        <input type="text" name="" id="searchInput" placeholder="Pesquisar">
        <button id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <div class="header__wrapper">
        <div class="language">
            <i class="fa-solid fa-globe"></i>
            <span>Português</span>
        </div>

        <div class="user">
            <i class="fa-solid fa-user"></i>

            <?php
            if ($name != "Entrar/Registar") {
                echo "<button id='menu'>$name</button>";
            } else {
                echo "<a href='../website/user/register/register.php'>Entrar/Registar</a>";  // class='login_link'
            }


            ?>
        </div>

        <div class="cart__shopping">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Carrinho</span>
        </div>
    </div>
</header>
