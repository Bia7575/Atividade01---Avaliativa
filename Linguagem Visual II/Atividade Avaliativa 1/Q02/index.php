<?php
include 'Empregado.php';

$empregado1 = new Empregado("João", "Silva", 3000);
$empregado2 = new Empregado("Maria", "Santos", 3500);

echo "Salário anual de {$empregado1->getNome()} {$empregado1->getSobrenome()}: $" . $empregado1->salarioAnual() . PHP_EOL;
echo "Salário anual de {$empregado2->getNome()} {$empregado2->getSobrenome()}: $" . $empregado2->salarioAnual() . PHP_EOL;

$empregado1->aumentarSalario(10);
$empregado2->a
