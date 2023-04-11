<?php
//chama o model usuario
require_once('../model/usuario.php');

//dados do contrutor
$user = new usuario($_GET['nome'], $_GET['cpf'], $_GET['rendimento']);


//informacoes do usuario

header("Location: ../view/result.php?".
        "nome=".$user->getNome().
        "&cpf=".$user->getCpf().
        "&rendimento=".$user->getRendimento().
        "&aliquota=".$user->getAliquota().
        "&imposto=".$user->getImposto()
    );

    
?>