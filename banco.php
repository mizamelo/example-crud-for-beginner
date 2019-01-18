<?php

$strHost = "172.27.0.97";           // Host Servidor
$strUser = "app_sjccchamados";      // Usuario Banco            
$strPass = "app_sjccchamados@123";  // Senha  
$strBase = "SJCC_Chamados";         // Banco de dados
$strType = "sqlsrv";                // Drive do banco

// Monta a conexao
$strDSN  = "{$strType}:Database={$strBase};Server={$strHost}";

// Bloco de conexao
try {
    
    // Realiza a conexao
    $objPDO = new PDO(@$strDSN, @$strUser, @$strPass);

    // Habilita as exceções
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $objPDO->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);

    // Select
    $SA1 = $objPDO->query('SELECT * FROM SA1010');
    $dados = $SA1->fetchAll();
}
catch(Exception $ex) {
    // Imprime a mensagem de erro caso nao seja possivel conectar ao banco de dados
    echo '<pre>'; 
    print_r($ex->getMessage());
    exit;
}
