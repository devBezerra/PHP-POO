<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio UEC</title>
</head>

<pre>
<body>
<?php
    require_once 'Lutador.php';
    require_once 'Luta.php';

    $L = array();
    $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 7);
    $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $L[3] = new Lutador("DeadCod", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

    $UEC = array();
    // $UEC[0] = new Luta();
    // $UEC[0]->marcarLuta($L[0], $L[1]);
    // $UEC[0]->lutar();

    $UEC[1] = new Luta();
    $UEC[1]->marcarLuta($L[0], $L[0]);
    $UEC[1]->lutar();


?>    
</body>
</pre>
</html>