<?php

if ( isset($_GET['nome']) && !empty($_GET['nome']) ) {

    try {

    } catch(\Exception $e) {
        $SA1 = $objPDO->query('SELECT * FROM SA1010 WHERE A1_NOME = ' . $_GET['nome']);
    }

    var_dump($SA1);
}