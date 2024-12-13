<?php 

    $salario = 10000;

    $tempo = 12;

    if($salario < 100000){
        
        if($tempo>= 12){
            print 'promoção';
        }        
    
    }else{
        print'sem promoção';
    }
    
    $valor_venda = 100;

    if($valor_venda > 100){
        $resultado = 'muito caro';
    }else{
        $resultado = 'pode comprar';
    }
    var_dump($resultado);

    $resultado = ($valor_venda > 100)? 'muito caro': 'pode comprar';

    var_dump($resultado);

    $contador = 1;

    while($contador < 5){

        print $contador;
        $contador++;

    }

    for($contador = 1; $contador < 50; $contador++){
        print $contador . '<br>';
    }

    $tipo = 'pdf';

    switch($tipo){
        case 'pdf':
            print 'pdf';
            break;
        case 'doc':
            print 'doc';
            break;
        default:
            print 'arquivo default';    
    }

    echo '<br>';

    $lista = ['maçã' , 'laranja', 'banana'];

    foreach ($lista as $fruta){
        print $fruta . ' ';
    }


?>