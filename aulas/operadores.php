<?php 

    $valor = 100;
    $a = 10;
    $a++;
    $b = 10;
    $valor = $valor + 5;

    var_dump($valor);
    var_dump($a);
    var_dump(++$a);

    $b -=150;
    var_dump($b);

    $d = 2;

    $f = 4;

    echo ($d+3)*4+(5*$f);

    // < > <= >= == === != !==

    $salario = 3000;
    $cargo = 'gerente';

    if($salario > 800 and $cargo == 'gerente'){
        echo 'ok';
    }
?>