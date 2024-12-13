<?php 
    declare (strict_types=1);
    $codigo = 5;
    $nome = 'teste';

    var_dump($nome);
    var_dump($codigo);

    var_dump('nome ' . 'sobrenome');

    function calculaImc (float $peso, float $altura): float{
        var_dump($peso, $altura);
        return $peso/($altura * $altura);
    }

    $peso = '75';

    var_dump(calculaImc((float)$peso,1.8));

?>