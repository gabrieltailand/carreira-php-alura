<?php

function geraEmail(string $nome): void
{
    $conteudoEmail = <<<EMAIL
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}
    
    {assinatura}
    
    EMAIL;

    echo $conteudoEmail;

}

geraEmail('Gabriel Lopes');
