<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $token = $_POST['codigo'];

    //var_dump($email,$senha,$token);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.4.5/spectre.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
        <h1>Confirmar</h1>
            <div class="formulario form-group">
            
                <form action="acesso.php" method="POST">

                    <label for="email" class="form-label">Confirme seu Email</label>
                    <input 
                        type="email" 
                        name="conemail" 
                        class="form-input">

                    <label for="email"  class="form-label">Confirme sua senha</label>
                    <input 
                        type="password" 
                        name="consenha" 
                        class="form-input">

                    <label class="form-label" for="codigo">Digite o token gerado para autenticar</label>
                    <input 
                        class="form-input" 
                        type="text" 
                        id="codigo" 
                        name="codigo">

                    <input 
                        type="hidden" 
                        id="token" 
                        name="token" 
                        value="<?php echo $token; ?>">
                    
                    <input 
                        type="hidden" 
                        id="token" 
                        name="email" 
                        value="<?php echo $email; ?>">
                    
                    <input 
                        type="hidden" 
                        id="token" 
                        name="senha" 
                        value="<?php echo $senha; ?>">
                
                    <button class="btn btn-primary">Acessar</button>
                </form>

            </div>
        </div>
    

</body>
</html>