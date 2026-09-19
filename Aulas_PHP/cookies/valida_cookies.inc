<?php
if(IsSet($_COOKIE["email_usuario"]))
    $email_usuario = $_COOKIE["email_usuario"];
if(IsSet($_COOKIE["senha_usuario"]))
    $senha_usuario = $_COOKIE["senha_usuario"];

if(!(empty($email_usuario) OR empty($senha_usuario)))
{ 
    include "conecta_mysql.inc";
    //Escapa os caracteres especiais, evitando ataques de SQL Injection
    $email_usuario = $conexao->real_escape_string($email_usuario);
    $senha_usuario = $conexao->real_escape_string($senha_usuario);

    //Consulta o Banco de Dados

    $resultado = $conexao->query("SELECT * FROM usuarios WHERE email='$email_usuario'
    AND senha='$senha_usuario'");
    if($resultado->num_rows==0)
    {
        setcookie("email_usuario");
        setcookie("senha_usuario");
        echo "VocÊ nao efetuou o login!";
        exit();
    }
}
else
{
    echo "Voce nao efetuou o <a href='login.html'>login</a>!";
    exit();
}
$conexao->close();
?>