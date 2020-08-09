<?php
$suma= $_REQUEST['valor1']+$_REQUEST['valor2'];
echo 'La suma es: '.$suma;
echo '<br>';
$resta= $_REQUEST['valor1']-$_REQUEST['valor2'];
echo 'La resta es: '.$resta;
echo '<br>';
$multi= $_REQUEST['valor1']*$_REQUEST['valor2'];
echo 'La multiplicación es: '.$multi;
echo '<br>';
$divi= $_REQUEST['valor1']/$_REQUEST['valor2'];
echo 'La división es: '.$divi;

?>