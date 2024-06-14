<aside>
    <div class="logo">
        <a href="/php_programs/Wutai/Wutai/website/index.php"><img src="/php_programs/Wutai/Wutai/public/img/logo2.png" alt=""></a>
    </div>
    <div class="affiliate__pages__aside">
        <a href="/php_programs/Wutai/Wutai/website/seller/affiliatePanel.php?seller=true&panel=panel" id="panelAside"><i class="fas fa-home"></i> Início</a>
        <a href=""><i class="fas fa-chart-line"></i> Suas vendas</a>
        <a href="/php_programs/Wutai/Wutai/website/seller/productCRUD/addProduct.php?panel=add" id="addProductAside"><i class="fas fa-plus"></i> Adicionar produtos</a>
        <a href="/php_programs/Wutai/Wutai/website/seller/productCRUD/editProduct.php?panel=edit" id="editProductAside"><i class="fas fa-edit"></i> Editar produtos</a>
        <a href="/php_programs/Wutai/Wutai/website/seller/productCRUD/deleteProduct.php?panel=del" id="delProductAside"><i class="fas fa-trash"></i> Deletar produtos</a>
        <a href=""><i class="fas fa-chart-bar"></i> Métricas</a>
        <a href=""><i class="fas fa-money-bill"></i> Sua receita</a>

    </div>
</aside>

<?php
if (isset($_GET['panel'])) {
    if ($_GET['panel'] == 'add') {
        echo "<style>
                #addProductAside {
                    background-color: #eaeaea;
                }
            </style>";
    } elseif ($_GET['panel'] == 'edit') {
        echo "<style>
                #editProductAside {
                    background-color: #eaeaea;
                }
            </style>";
    } elseif ($_GET['panel'] == 'panel') {
        echo "<style>
                #panelAside {
                    background-color: #eaeaea;
                }
            </style>";
    } elseif ($_GET['panel'] == 'del') {
        echo "<style>
                #delProductAside {
                    background-color: #eaeaea;
                }
            </style>";
    }
} else if (isset($_GET['edit'])) {
}
?>