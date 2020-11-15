<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.4.5/spectre.min.css">
    <title>Dupla autenticação</title>
</head>
<body>

    <?php

        function generateID() {
            return uniqid();
        }

        $codigo = generateID();

    ?>

    <div class="container">
        <h1>Cadastrar</h1>

        <div class=" form-group formulario">



        <?php 
            echo

                "<form action='token.php' method='POST'>
                    <label class='form-label' for='email'>Email</label>
                    <input class='form-input' type='email' name='email' id='email'>
                    <label class='form-label' for='senha'>Senha:</label>
                    <input class='form-input' type='password' name='senha' id='senha'>
                                  
                    <br> 
                    
                    <p>Token de acesso: (copie esse código para validar o acesso)</p> 
                    <input class='form-input' type='text' name='codigo' 
                    readonly value='" . $codigo . "'>
                            
                    <br>
                            
                    <button class='btn btn-primary' type='submit'>
                        Autenticar
                    </button>

                </form>";
        ?>
        
        </div>
    </div>
    
</body>
</html>