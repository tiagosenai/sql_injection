<?php
    //Exemplo de passagem de parametros com GET na URL
    /*$nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $email = $_GET['email'];

    echo $nome.' '.$sobrenome.' - E-mail: '.$email;*/

    //Passagem de parametros com POST
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //echo $usuario.' - '.sha1($senha);

    //include_once 'conexao.php';

    $conn = mysqli_connect('localhost', 'root', '', 'aula1907');

    $sql = "SELECT * FROM usuario WHERE usuario='".$usuario."' AND senha='".$senha."'";
    $query = mysqli_query($conn, $sql);
    $resultado = mysqli_num_rows($query);
    if($resultado){
        echo '<h1>Login Efetuado Com Sucesso!!!</h1>';
    }else{
        echo '<h1>Falha no Login</h1>';
    }
?>