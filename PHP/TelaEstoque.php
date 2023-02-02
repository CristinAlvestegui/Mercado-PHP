<?php
    require_once('Produtos.php');
    require_once('Estoque.php');

    $biscoi = new Produtos("Nestle", "Salgados", 126);
    $estoUm = new Estoque($biscoi, 20, 1.36);

    echo $biscoi;
    echo $estoUm;
?>