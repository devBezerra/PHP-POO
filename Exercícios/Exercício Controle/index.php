<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Controle Remoto</h1>
<pre>
<?php
require_once 'ControleRemoto.php';

$c1 = new ControleRemoto();
$c1->ligar();
$c1->abrirMenu();
$c1->maisVolume();
?>
</pre>    
</body>
</html>