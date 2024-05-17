<?php 
    session_start();
    require("./connect.php");
    @$id = $_SESSION['id'];
    
    $userQueryPanel = mysqli_query($conn, "SELECT * FROM `user` WHERE `id` = '$id'");
    $userPanel = mysqli_fetch_assoc($userQueryPanel);
    
    
    if(isset($_SESSION['name'])) { 
        $name = $_SESSION['name'];
    } else {
        $name = "Entrar/Registar";
    }

?>

    <header>
        <a href="../../index.php"><img src="../public/img/logo.png" alt=""></a>
        <div class="search__box">
        <div class="dropdown">
            <!-- <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> -->
        </div>
            <input type="text" name="" id="searchInput" placeholder="Pesquisar">
            <button id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        <div class="language">
            <i class="fa-solid fa-globe"></i>
            <span>pt-BR</span>
        </div>

        <div class="user">
            <i class="fa-solid fa-user"></i>
            <span><a href="./user/register/register.php">
                <?php 
                if($name != "Entrar/Registar") {
                    echo "<button id='menu'>$name</button>";
                } else {
                    echo "<a href='../website/user/register/register.php'>Entrar/Registar</a>";  // class='login_link'
                }

                
                ?>
            </a></span>
        </div>

        <div class="cart__shopping">
            <i class="fa-solid fa-cart-shopping"></i>
            <span href="">Carrinho</span>
        </div>
    </header>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

</html>