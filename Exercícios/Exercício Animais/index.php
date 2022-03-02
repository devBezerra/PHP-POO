<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Animais</title>
    </head>
    <body>
        <pre>
        <?php

use LDAP\Result;

            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';

            $m = new Mamifero();
            $m->setPeso(33.5);
            $m->locomover();

            $a = new Ave();
            $a->locomover();

            $r = new Reptil();
            $r->locomover();

            $t = new Tartaruga();
            $t->emitirSom();
            $t->locomover();

            $c = new Cobra();
            $c->locomover();
        ?>
        </pre>   
    </body>
</html>