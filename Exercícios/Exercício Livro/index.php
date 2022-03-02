<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
</head>
<pre>
<body>
<?php 
    require_once 'Pessoaa.php';
    require_once 'Livro.php';

    $P = array();
    $P[0] = new Pessoa("Mateus", "22", "Masculino");
    $P[1] = new Pessoa("Sabrina", "19", "Feminino");
    
    $L = array();
    $L[0] = new Livro("Morte Súbita", "JK Rowling", 700, $P[1]);
    $L[1] = new Livro("Homem Aranha Azul", "Jeph Loab", 200, $P[0]);

    $L[0]->mostrarDetalhes();
    $L[1]->mostrarDetalhes();

    $L[0]->folhear(235);

    $L[0]->abrir();
    $L[1]->abrir();

    $L[0]->folhear(235);
    $L[1]->avancarPag();

    $L[0]->mostrarDetalhes();
    $L[1]->mostrarDetalhes();

    $L[0]->fechar();
    $L[1]->fechar();
?>
    
</body>
</pre>
</html>