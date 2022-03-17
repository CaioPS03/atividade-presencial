<?php

$valor01 = '2';
$valor02 = '10';

function soma($valor01, $valor02) {
    return $valor01+$valor02;
} 

echo soma($valor01, $valor02) . '<br>';

function quadrado($valor01) {
    return $valor01 * $valor01;
}

echo quadrado($valor01);