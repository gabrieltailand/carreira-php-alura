<?php

// O quê, pelo quê e onde

$texto = 'Texto com qualquer com o CPF mostrado';

echo str_replace('mostrado','***', $texto) . PHP_EOL;

echo strtr($texto, 'monstrando', '***');
echo strtr($texto, ['mostrando' => '***']) . PHP_EOL;