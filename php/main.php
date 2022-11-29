<?php
    //America/Sao_Paulo
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
    echo date('Y-m-d H:i');
    $dataHoje = [
        'dia' => date('d'),
        'mes' => date('m'),
        'ano' => date('Y'),
        'diaExt' => strftime('%A',time()),
    ];

    echo "{$dataHoje['diaExt']}, {$dataHoje['dia']}/{$dataHoje['mes']}/{$dataHoje['ano']}";
?>