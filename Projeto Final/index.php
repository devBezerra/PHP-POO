<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto Final</title>
</head>
<body>
<pre>
<?php 
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';

    $v[0] = new Video('Aula 1 de POO');
    $v[1] = new Video('Aula 2 de PHP');
    $v[2] = new Video('Aula 15 de HTML5');

    $g[0] = new Gafanhoto("Mateus", 22, "M", "Mr Bezerra");

    $vis[0] = new Visualizacao($g[0], $v[2]);
    $vis[1] = new Visualizacao($g[0], $v[1]);
    print_r($vis);

?>
</pre>
</body>
</html>