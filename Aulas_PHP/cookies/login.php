<?php
//obtém os valores digitados
$email = $_POST["email"];
$senha = $_POST["senha"];

include "conecta_mysql.inc";

//Escapa os caracteres especiais, para evitar ataques de SQL injection
$email = $conexao->real_escape_string($email);
$senha = $conexao->real_escape_string($senha);

//acesso ao banco de dados
$resultado = $conexao->query("SELECT * FROM usuarios WHERE email='$email'");
$linhas = $resultado->num_rows;
if($linhas==0) {//testa se a consulta retornou algum registro
    echo "<html><body>";
    echo "<p align=\"center\">E-mail não encontrado!</p>";
    echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
    echo "</body></html>";
}
{
    $dados = $resultado->fetch-array();
    $senha_banco = $dados["senha"];

    if($senha != $senha_banco)//confere senha
    {
        echo "<html><body>";
        echo "<p align=\"center\">A senha está incorreta!</p>";
        echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
        echo "</body></html>";
        }
        else//usuario e senha corretos. Vamos criar os cookies
        {
        setcookie("email_usuario", $email);
        setcookie("senha_usuario", $senha)
        //direciona para a pagina inicial dos usuarios cadastrados
        header ("Location: index.php");
        }
    }
    $conexao->close();
    ?>