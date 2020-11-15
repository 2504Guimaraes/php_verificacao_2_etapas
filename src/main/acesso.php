<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/spectre.min.css">
  <title>Acesso</title>
</head>
<body>
  
  <?php


    $token = $_POST['token'];
    $codigo = $_POST['codigo'];

    $conEmail = $_POST['conemail'];
    $conSenha = $_POST['consenha'];

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($codigo === $token && $conEmail === $email && $conSenha === $senha){
        
        echo "<div class='toast toast-success'>
                Acesso permitido, bem vindo $email
              </div>";
    }else{

        echo "<div class='toast toast-error'>
                Acesso negado, um ou mais dados estão incorretos
            </div>";
    }


    //echo $codigo;
  ?>

</body>
</html>

