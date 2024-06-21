<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale conosco | Wutai</title>
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/footer.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/contact.css">
    <link rel="stylesheet" href="/php_programs/Wutai/Wutai/styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('../header/header.php') ?>
    <div class="contact__wrapper">
        <div class="contact__container">
            <div class="contact__form">
                <h1>Fale conosco</h1>
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" class="form-control" id="subject" placeholder="Digite o assunto">
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Digite sua mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>


            </div>
            <div class="contact__info">
                <h1>Informações de contato</h1>
                <p>Telefone: (11) 99999-9999</p>
                <p>Email:
                    <a href="mailto:contato@wutai.com">contato@wutai.com</a>
                </p>
                <p>Endereço:
                    <a href="https://maps.app.goo.gl/c8sktmhcms4otwPP6" target="_blank">R. Virgínia Ferni, 400 - Itaquera, São Paulo - SP, 08253-000</a>
                </p>
                <p>Horário de funcionamento: Segunda a Sexta das 13h30 às 18h</p>
            </div>
        </div>
    </div>


    <?php include('../footer/footer.php') ?>