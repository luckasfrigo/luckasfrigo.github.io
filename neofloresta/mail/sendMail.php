<?php
if  (!empty($_POST['send'])) {
    $to = "contato@neofloresta.com.br";
    $subject = "[Site] {$_POST['assunto']}";
    $txt = "<b>Nome: </b>{$_POST['nome']}\r\n";
    $txt .= "<b>E-mail: </b>{$_POST['email']}\r\n";
    $txt .= "<b>Telefone: </b>{$_POST['telefone']}\r\n";
    if (!empty($_POST['lattes'])) {
        $txt .= "<b>URL do Lattes: </b><a href=\"{$_POST['lattes']}\">Currículo Lattes</a>\r\n";
    } else {
        $txt .= "<b>Empresa: </b>{$_POST['empresa']}\r\n";
    }
    $headers = "From: {$_POST['nome']}<{$_POST['email']}>";

    if (mail($to,$subject,$txt,$headers)) {
        header("HTTP/1.1 200 OK");
        exit;
    }
}

header("HTTP/1.1 404 Not Found");