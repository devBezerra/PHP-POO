<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'ContaBanco.php';
    echo "<h1> Conta 1 </h1>";
    $c1 = new ContaBanco(01, 'Mateus');
    $c1->abrirConta("CC");
    $c1->depositar(102);
    $c1->sacar(140);
    $c1->pagarMensalidade();
    $c1->fecharConta();

    echo "<hr>";

    echo "<h1> Conta 2 </h1>"; 
    
    $c2 = new ContaBanco(2, "Jurema");
    $c2->abrirConta("CP");
    $c2->sacar(200);
    $c2->sacar(150);
    $c2->pagarMensalidade();
    echo $c2->getSaldo(),"<br>";
    $c2->fecharConta();
    $c2->depositar(20);
    $c2->fecharConta();
    $c2->sacar(200);
    $c2->depositar(20);

    ?>
    </pre>
</body>
 </html>