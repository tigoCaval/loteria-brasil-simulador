<?php
/**
 * Testando aplicação
**/
require_once __DIR__ . '../vendor/autoload.php';
use loteria\Loteria;

$loteria = new Loteria();
$megaSena = $loteria::megaSena()->create(2);

echo "<br>--------Mega-Sena-------<br>";
foreach($megaSena as $key => $value)
{
    foreach($value as $item)
    {
       echo "Cartela: ".$key.": Valor: ".$item."<br>";
    }
    echo "<br><br>";
}











     