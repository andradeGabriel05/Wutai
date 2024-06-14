<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma | Wutai</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/language.css">

</head>

<body>
    <?php include ('header/header.php') ?>

    <div class="languages__page">
        <h3>Configuraçã de idioma</h3>
        <p>Selecione o idioma de sua preferência para navegação, compras e comunicação.</p>

        <form method="post" onsubmit="languageFunc()">
            <div class="inp__languages">
                <span>
                    <label for="en-US">
                        <input type="radio" name="en_US" id="en_US" style="margin-right: 5px;" class="radioLang" value="en_US">English | US
                    </label>
                </span>
                <span>
                    <label for="pt_BR">

                        <input type="radio" name="pt_BR" id="pt_BR" style="margin-right: 5px;" class="radioLang" value="pt_BR">Português | BR
                    </label>
                </span>
                <span>
                    <label for="fr_FR">
                        <input type="radio" name="fr_FR" id="fr_FR" style="margin-right: 5px;" class="radioLang" value="fr_FR">Français | FR
                    </label>
                </span>

                <input type="submit" value="Salvar alterações" class="submit__input">
            </div>

        </form>

    </div>

    <?php include ("footer/footer.php") ?>