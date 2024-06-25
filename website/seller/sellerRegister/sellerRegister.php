<?php
require('../../connect.php');
session_start();


if (@$_GET['auth'] == "false") {
    // não logou
    header('Location:../sellerPage.php?auth=false');
} else {
    if (!isset($_SESSION['idUser'])) {
        // não logou
        header('Location:../sellerPage.php?auth=false');
    }
}

if (@$_GET['seller'] == "true") {
    // logado como vendedor

    header('Location:/php_programs/Wutai/Wutai/website/seller/sellerPanel.php?seller=true');
} else {
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar afiliado | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/register/sellerRegister.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/seller/sellerHeader.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

</head>

<body>

    <?php include('../header/sellerHeader.php'); ?>

    <h2 class="title__sellerRegister">Bem-vindo ao Programa de Vendedores Wutai, <?php echo $_SESSION['name']; ?>!</h2>

    <section id="createAccount">
        <h3>Crie sua conta de vendedor</h3>
        <form action="sellerRegister.act.php" method="post">
            <div class="name">
                <label for="enterpriseName">Nome da empresa</label>
                <input type="text" name="enterpriseName" id="enterpriseName" placeholder="Nome da empresa" required>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?>" required>
            </div>
            <div class="website">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" placeholder="Website">
            </div>
            <input type="submit" value="Cadastrar-se">
        </form>
    </section>

    <section id="programDetails">
        <h3>Detalhes do Programa de Vendedores</h3>
        <p>Nosso programa de vendedores permite que você ganhe dinheiro vendendo nossos produtos em sua loja ou website. Você terá acesso a recursos exclusivos, suporte dedicado, e muito mais.</p>
        <ul>
            <li>Comissão de 10% em todas as vendas realizadas;</li>
            <li>Pagamentos mensais;</li>
            <li>Acesso a material de marketing exclusivo;</li>
            <li>Suporte prioritário.</li>
        </ul>
    </section>

    <section id="faqs">
        <h3>Perguntas Frequentes</h3>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Como posso me registrar?

                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Preencha o formulário acima com as informações da sua empresa e clique em "Cadastrar-se".


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Como recebo minhas comissões?

                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>As comissões são pagas mensalmente através de transferência bancária ou PayPal.


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Quais são os requisitos para participar?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Você deve ter um site ou blog ativo e conteúdo relacionado ao nosso nicho de mercado.


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h3>Contato</h3>
        <p>Se você tiver alguma dúvida ou precisar de assistência, entre em contato conosco através do email: <a href="mailto:vendedores@wutai.com">vendedores@wutai.com</a>.</p>
    </section>

</body>
<script src="https://kit.fontawesome.com/8aca4bf827.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>