<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="../../../styles/cart.css">

    <link rel="stylesheet" href="../../../styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<div class="modal" id="popUp" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Apagar produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Deseja remover o produto do carrinho de compras?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
      </div>
    </div>
  </div>
</div>


    <?php include ('../../header/header.php'); ?>

    <div class="spanPadText">
        <span>Carrinho de compras </span>
        <p>(x produtos)</p>
    </div>

    <section id="cart">


        <div class="product__information">

            <div class="product__card">
                <div class="product__left__wrapper">
                    <div class="product__image"><img src="https://www.shutterstock.com/image-vector/beta-red-stamp-text-on-260nw-219686944.jpg" alt=""></div>
                    <div class="product__add">
                        <div class="minus">
                            <input type="button" value="-" id="minus">
                        </div>
                        <div class="quantity">
                            <input type="text" name="" id="quantity" value="1">
                        </div>
                        <div class="add">
                            <input type="button" value="+" id="add">
                        </div>
                    </div>

                </div>
                <div class="product__description">
                    <span class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, vero obcaecati
                        minus dicta saepe facere?</span>
                    <span class="title price">R$Preco</span>
                </div>
            </div>
            
        </div>



        <div class="buy__box">
            <span>Total</span>
            <div class="final__price">
                <span>Subtotal: </span>
                <span class="final__price__span">R$Preco</span>
            </div>
            <!-- 
        <div class="frete">
            <span>Calcular frete:</span>
            <input type="text" name="frete" id="freteId">
        </div> -->
            <input type="button" value="Comprar produto" id="buyButton">
        </div>


    </section>






</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>
    <script src="/php_programs/Wutai/Wutai/js/inputAddProduct.js"></script>
</html>