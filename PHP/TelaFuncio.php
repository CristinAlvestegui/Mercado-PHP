<?php
    require_once('Address.php');
    require_once('Humano.php');
    require_once('Funcionario.php');

    $endeUm = new Address("Rua Eco", "3C", "casa 3", "09845168", "Vila Neve", "Tucuruvi", "São Paulo", "SP" );
    $humanUm = new Humano("Cris", "11", "15/06/2000", "15644786466", $endeUm);
    $emploUm = new Funcionario($humanUm, 1, "Femenino", "Caixa", "1500");

    echo $emploUm;
?>