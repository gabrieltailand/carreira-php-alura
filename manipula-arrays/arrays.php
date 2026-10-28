<?php

$array = [
    1 => 'Um',
    2 => 'Dois',
    3 => 'Três'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

// para saber o tamanho do array usa-se o count() ou o sizeof()
echo "Total: " . count($array) . PHP_EOL;