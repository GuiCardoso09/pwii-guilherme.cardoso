<?php
/** 
 * Formulário de contato em PHP
 * - Validação nos dados do servidor
 * Exibe mensagens de erro/sucesso
 * - Preenche novamente os campos em caso de erro
*/

//variaveis
$erros = [];
$sucesso = false;

//valores padrão (mantém o que o usuário digitou em caso de erro)
$nome = '';
$email = '';
$assunto = '';
$mensagem = '';

if ($_SERVER['REQUEST_METHOD']==='POST'){
//Captura e sanitiza os dados enviados
$nome = trim($_POST['nome']??'');
$email = trim($_POST['nome']??'');
$assunto = trim($_POST['nome']??'');
$mensagem = trim($_POST['nome']??'');

//Validações
if(empty($nome)){
    $erros['nome'] = 'O campo nome é obrigatório.';
}elseif(strlen($nome)< 3){
    $erros['nome'] = 'o campo nome deve ter pelo menos 3 caracteres.';

}

if(empty($email)){
    $erros['email'] = 'O campo e-mail é obrigatório.';
}elseif(!filter_var($email,FILTER_VALIDATE-EMAIL)){
    $erros['email'] = 'Informe um e-mail válido.';

}

if(empty($assunto)){
    $erros['assunto'] = 'O assunto é obrigatório.';
}

if(empty($mensagem)){
    $erros['mensagem'] = 'O campo mensagem é obrigatório.';
}elseif(strlen($mensagem)< 10){
    $erros['mensagem'] = 'A mensagem deve ter pelo menos 10 caracteres.';

}
//Se não houver erros, processe o envio
if(empty($erros)){    

//Sanitiza antes de usar(ex: salvar em banco, enviar e-mail, etc.)
    $nome_limpo     = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
    $email_limpo    = filter_var($email, FILTER_SANITIZE_EMAIL);
    $assunto_limpo  = htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8');
    $mensagem_limpa = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');

    /*
    Exemplo de envio por email(requer servidor configurado com SMTP/email()):

    $destinatario = "seuemail@exemplo.com";
    $cabecalhos   = "From: $email_limpo";
    $corpo        = "Nome : $nome_limpo\n\nMensagem:\n$mensagem_limpa";
    mail($destinatario, $assunto_limpo, $corpo, $cabecalhos);

    Voce tambem pode salvar em um BD usando PDO, por exemplo.
*/
$sucesso = true;

$nome = $mail = $assunto = $mensagem = '';

}

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <style>
        *{box-sizing: border-box;}

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .container{
            background: #fff;
            width: 100%;
            max-width: 480px;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        }
        h1{
            font-size: 22px;
            margin-bottom: @4px;
            color: #222;
            text-align: center;
        }
        label{
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 14px;
        }

    
    
</body>
</html>
