<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/spectre.min.css">
    <title>Dupla autenticação</title>
</head>
<body>

    <?php
        function generateID() {
            return uniqid();
        }

        $codigo = generateID();
    ?>

    <?php 
        echo
            "<form action='token.php' method='POST'>
                    
                 <label class='form-label' for='email'>Email</label>
                 <input 
                     class='form-input' 
                     type='email' 
                     name='email' 
                     id='email'>
                    
                     <label class='form-label' for='senha'>Senha:</label>
                 <input 
                     class='form-input' 
                     type='password' 
                     name='senha' 
                     id='senha'>
                    
                 <p id='paragraf_token'>Token de acesso: (copie esse código para validar o acesso)</p> 
                    
                 <input 
                     class='form-input' 
                     type='text' 
                     name='codigo' 
                     readonly value='" . $codigo . "'>
                            
                 <button class='btn btn-primary' type='submit'>
                     Autenticar
                 </button>

             </form>";
        ?>
    
</body>
</html>