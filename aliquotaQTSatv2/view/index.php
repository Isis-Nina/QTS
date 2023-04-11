<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen">
        <title>Formulário</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    </head>
    <body>  
        <h1>Insira seus dados</h1>
            <form method="get" action="../controller/UsuarioController.php">
                <div class="campo">
                    <input type="text" placeholder="Nome" name="nome" id="nome" required><br>
        
                    <input type="text" placeholder="CPF" name="cpf" id="cpf" required><br>
                    <script> 
                        $(document).ready(function() {
                            $('#cpf').inputmask('999.999.999-99', {placeholder: '___.___.___-__'});
                        });
                        </script>
                        
                    <input type="number" placeholder="Rendimento" name="rendimento" id="rendimento" required><br><br>
                        
                    <input class="button" type="submit" value="Concluído" > 
                </div>         
            </form>
    </body>
</html>


