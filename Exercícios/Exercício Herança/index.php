<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Herança</title>
</head>
<body>
<pre>
<?php 
    require_once 'Pessoa2.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa2(); 
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Cláudio");
    $p4->setNome("Fabiana");

    
    $p2->setCurso("Informática");
    $p3->setSalario(2500.5);
    $p4->setSetor("Estoque");
    
    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
?>
</pre>
</body>
</html>