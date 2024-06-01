<?php
    session_start();

    if(@$_GET['seller'] == "true"){
        // logado como vendedor
        if(!isset($_SESSION['idSeller'])) {
            header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePage.php?auth=true&seller=false');
        }
    } else {
        if(isset($_SESSION['idSeller'])) {
            header('Location:/php_programs/Wutai/Wutai/website/seller/affiliatePanel.php?seller=true');
        }
    }

?>