<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta("BIC", "Azul", 1.0);
        print_r($c1);
    ?>
    </pre>
</body>
</html>