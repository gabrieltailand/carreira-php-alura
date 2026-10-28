<?php

// strings numéricas

$anoNascimento = ('1987');

$idade = 2026 - $anoNascimento;

echo 'Idade: ' . $idade . PHP_EOL;

if ($anoNascimento == 1987) {
    echo 'Sim' . PHP_EOL;
} else {
    echo 'Não' . PHP_EOL;
}
