<?php

$nome = 'Gabriel Lopes Vieira';

// Quero verificar se uma string estar dentro de outra string

$ehDaMinhaFamilia = str_contains($nome, 'Lopes');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}