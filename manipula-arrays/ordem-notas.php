<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
];

arsort($notas); // Aqui ordena os valores mantendo as chaves do array
sort($notas); // Aqui ordena só os valores do array em ordem crescente
ksort($notas); // Aqui ordena as chaves do array
krsort($notas); // Aqui ordena as chaves em ordem decrescente

var_dump($notas);

if (gettype($notas) === 'array') {
    echo 'Sim, é um array' . PHP_EOL;
}

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));