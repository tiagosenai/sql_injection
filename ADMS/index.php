<?php
    if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])):
        header("Location:login.php");
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
</head>
<body>
    <h1>Painel Administrativo</h1>    
    <a href="../index.php">Página Inicial</a>
</body>
</html>