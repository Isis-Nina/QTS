<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen">
        <script type="text/javascript" src="assets/js/calc.js"></script>
        <title>Resultado</title>
    </head>
    <body>  
        <h1>Confira seus dados</h1>
        <p name="nome" >Nome: <?php echo($_GET['nome']);?> </p> 
        <p name="cpf" >CPF: <?php echo($_GET['cpf']);?> </p> 
        <p name="rendimento" >Rendimento: R$ <?php echo($_GET['rendimento']);?></p> 
        <p name="aliquota" >Alíquota: <?php echo($_GET['aliquota']);?>%</p> 
        <p name="imposto" >Termos de Imposto: R$ <?php echo($_GET['imposto']);?></p><br>

        <a href="../view/index.php">Voltar ao Início</a>
        
    </body>
</html>