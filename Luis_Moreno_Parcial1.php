<?php

$a = 0;
$b = 0;
$numero = 0;

while ($numero <= 50) {
    if ($numero % 2 == 0) {
        $b += $numero;
    } else {
        $a += $numero;

    }
    echo $numero++ . "\n";


}

for ($i = 0; $i <=11; $i++){
    $Tres= $i * 3 ."\n";

    echo $Tres."\n";
}