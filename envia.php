<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "luiz.augusto.andrade25@gmail.com";
    $assunto = "Coleta de dados - Agência LAAS";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: luiz.augusto.andrade25@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)) {
        echo("E-mail enviado com sucesso!");
    }
    else {
        echo("Não foi possível enviar o e-mail.");
    }

?>