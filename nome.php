<?php

$nome = 'guilherme';
$idade = 18;
$idade2 = '18';
$lista = ['banana', 'uva', 'maca'];

echo $nome .'<br>';
echo $idade .'<br>';
// echo $lista .'<br>'; não mostra arrays

if($idade === $idade2) {
    echo "sim <br>";
} else {
    echo "não <br>";
}

var_dump($nome);
echo '<br>';
var_dump($idade);
echo '<br>';
var_dump($lista);
echo '<br>';

?>