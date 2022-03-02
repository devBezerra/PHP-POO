<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Herança 2</title>
</head>
<pre>
<body>
<?php 
    require_once 'Visitante.php';
    require_once 'Aluno2.php';
    require_once 'Bolsista.php';

    //$p1 = new Pessoa3();
    $v1 = new Visitante();
    $v1->setNome("Mateus");
    $v1->setIdade(22);
    $v1->setSexo("M");
    print_r($v1);
    echo "<hr>";

    $a1 = new Aluno2();
    $a1->setMatricula(1);
    $a1->setNome("Jurema");
    $a1->setIdade(19);
    $a1->setSexo("F");
    $a1->setCurso("Jornalismo");
    print_r($a1);
    $a1->pagarMensalidade();
    echo "<hr>";

    $b1 = new Bolsista();
    $b1->setMatricula(2);
    $b1->setNome("Johnatan");
    $b1->setIdade(25);
    $b1->setSexo("M");
    $b1->setBolsa(15.5);
    $b1->setCurso("Direito");
    print_r($b1);
    $b1->renovarBolsa();
    $b1->pagarMensalidade();
?>    
</body>
</pre>
</html>