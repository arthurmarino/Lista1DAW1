

<?php

/*Exercicio 1*/
/*
if (isset($_POST['enviar'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];
    $n9 = $_POST['n9'];
    $n10 = $_POST['n10'];
    $media = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10) / 10;

    echo "A sua media é:". $media. "<br>";
*/
    


/*Exercicio 2*/
/*

if (isset($_GET['enviar'])){

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];
    $n4 = $_GET['n4'];
    $n5 = $_GET['n5'];

    $numbers = array ($_GET['n1'], $_GET['n2'], $_GET['n3'], $_GET['n4'], $_GET['n5']);
    sort($numbers);
    echo "O maior numero é: ".$numbers[4]."<br>";


}
*/

/*Exercicio 3*/
/*
if (isset($_GET['enviar'])){

    $i1 = $_GET['i1'];
    $i2 = $_GET['i2'];
    $i3 = $_GET['i3'];
    $i4 = $_GET['i4'];
    $i5 = $_GET['i5'];

    $ages = array ($_GET['i1'], $_GET['i2'], $_GET['i3'], $_GET['i4'], $_GET['i5']);

    $arrayLenght = count ($ages);
    $maior = 0;
    $menor = 0;

    for ($i = 0; $i < $arrayLenght; $i++) {
        if ($ages[$i] > 18){
            $maior++;
        }
        else{
            $menor++;
        }
    }

    echo "Maiores de 18: ". $maior." <br>";
    echo "Menores de 18: ". $menor;



}
*/

/*Exercicio 4*/
    $i1 = $_GET['num1'];
    $i2 = $_GET['num2'];
    $i3 = $_GET['num3'];
    $i4 = $_GET['num4'];
    $i5 = $_GET['num5'];

    $names = array ($i1, $i2, $i3, $i4, $i5);
 

    foreach ($names as $value) {
        echo "Antes de desordenar: $value <br>";
    }
    echo "<br>";
    rsort($names);

    foreach ($names as &$value) {
        echo "Depois de desordenar: $value <br>";
    }


?>