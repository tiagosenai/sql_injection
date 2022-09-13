<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Página de Login</h1>
    <form action="validar.php" method="POST">
        <label>Usuário: <input type="text" name="usuario" required></label><br><br>
        <label>Senha: <input type="password" name="senha" required></label><br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <a href="validar.php?nome=Tiago&sobrenome=Caceraghi&email=caceraghi@gmail.com">Enviar Dados</a>
</body>
</html>