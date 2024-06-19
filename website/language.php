<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma | Wutai</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/language.css">

</head>

<body>
    <?php include('header/header.php') ?>

    <div class="languages__page">
        <h3 class="languages__page__title">Configuração de idioma</h3>
        <p class="languages__page__description">Selecione o idioma de sua preferência para navegação, compras e comunicação.</p>

        <form method="post" onsubmit="event.preventDefault(languageFunc())">
            <div class="inp__languages">
                <div class="form-check">
                    <input class="form-check-input radioLang" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="pt_BR">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Português | BR
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radioLang" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="en_US">
                    <label class="form-check-label" for="flexRadioDefault1">
                        English | US
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radioLang" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="fr_FR">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Français | FR
                    </label>
                </div>

                <input type="submit" value="Salvar alterações" class="submit__input">
            </div>

        </form>

    </div>

    <?php include("footer/footer.php") ?>