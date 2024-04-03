<?php 

// 2 Faça um programa que imprima na tela apenas
// os números ímpares entre 1 e 50. 

echo "<h1> Exercicio 02 <h1>";

function executar(){
    for ($i = 1; $i <= 50; $i += 2){
        echo $i;
        echo "<br>";


    }
}

echo "Teste<br>";
executar();

/* 3 faça um programa que receba dois números inteiros
e gere os números inteiros que estão no intervalo
compreendido por eles */

function GerarDoisNumeros(){

    for ($i = 5; $i <= 10; $i++){

        echo $i;
        echo "<br>";

    }


}

echo "Números inteiros<br>";
GerarDoisNumeros();



?>