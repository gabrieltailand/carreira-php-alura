<?php

// Buscar a posição de uma string com `strpos'

$nome = 'Gabriel Lopes Vieira';
$email = ' gabriel.vieira@gmail.com ';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL; // Letra maiúscula usando string multibyte (mb)
echo mb_strtolower($usuario) . PHP_EOL; // Letra minúscula usando string multibyte (mb)
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL; // o substring pega um pedaço da string

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

echo trim($email) . PHP_EOL;



