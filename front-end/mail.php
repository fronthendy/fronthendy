<?php
if (isset($_POST['contato'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $email_remetente = "oi@fronthendy.com.br"; // deve ser uma conta de email do seu dominio 
    $email_destinatario = "oi@fronthendy.com.br"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email";
    $email_assunto = "Contato - $nome"; // Este será o assunto da mensagem
    
    $email_conteudo = "<h1>Olá, alguém entrou em contato através do site!</h1> \n\n\n";
    $email_conteudo .= "<p>Nome: $nome </p>";
    $email_conteudo .= "<p>Email: $email </p>";
    $email_conteudo .= "<p>Mensagem: $mensagem </p>";
    $email_conteudo .= "<br><p><b>fronthendy.com.br</b></p>";

    $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

    if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {
        header('Location: index.php?email=ok');
    } else {
        header('Location: index.php?email=erro');
    }
}
