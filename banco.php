<?php

Class Banco {

    const strHost = "172.27.0.97";           // Host Servidor
    const strUser = "app_sjccchamados";      // Usuario Banco            
    const strPass = "app_sjccchamados@123";  // Senha  
    const strBase = "SJCC_Chamados";         // Banco de dados
    const strType = "sqlsrv";                // Drive do banco
    
    public $objPDO;
    
    public function __construct()
    {
        //Monta a conexao
        $strDSN  = self::strType . ':Database='. self::strBase . ';Server=' . self::strHost;

        // Bloco de conexao
        try {
            // Realiza a conexao
            $this->objPDO = new PDO($strDSN, self::strUser, self::strPass);
            
            // Habilita as exceções
            $this->objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->objPDO->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);
        }
        catch(Exception $ex) {
            // Imprime a mensagem de erro caso nao seja possivel conectar ao banco de dados
            echo '<pre>'; 
            print_r($ex->getMessage());
            exit;
        }
    }
    
    public function listar() 
    {
        // Select
         $SA1 = $this->objPDO->query("SELECT * FROM SA1010");
         return $SA1->fetchAll();
    }

    public function adicionar()
    {
        // Adicionar       
        if ( isset($_POST['nome']) && !empty($_POST['nome']) )
        {
            try {
                $recno = rand(0, 1000);
                $RES = $this->objPDO->query("INSERT INTO SA1010 (A1_NOME, A1_NREDUZ, A1_MUN, R_E_C_N_O_) 
                                        VALUES (
                                            '{$_POST['nome']}', 
                                            '{$_POST['nreduz']}', 
                                            '{$_POST['cidade']}', 
                                            {$recno}
                                        )");  
                
                // redireciona
                header("Location: /");
                exit;
    
            } catch (\Exception $e) {
                echo '<pre>';
                var_dump($e);exit;
            }
        }
    
    }

    public function editar()
    {
        // Captura a linha clicada
        if ( isset($_GET['recno']) && !empty($_GET['recno']) )
        {
            $SA1 = $this->objPDO->prepare('SELECT * FROM SA1010 WHERE R_E_C_N_O_ = :recno');
            $SA1->bindValue(':recno', $_GET['recno']);
            $SA1->execute();
            
            return $SA1->fetchAll();
        }
        else if ( isset($_POST['nome']) && !empty($_POST['nome']) )
        {
            $SA1 = $this->objPDO->prepare('UPDATE SA1010 SET A1_NOME = :nome, A1_NREDUZ = :nreduz, A1_MUN = :cidade WHERE R_E_C_N_O_ = :recno');
            $SA1->bindValue(':nome', $_POST['nome']);
            $SA1->bindValue(':nreduz', $_POST['nreduz']);
            $SA1->bindValue(':cidade', $_POST['cidade']);
            $SA1->bindValue(':recno', $_POST['recno']);
            $SA1->execute();
        }
        
        header('Location: /');   
    }

    public function excluir()
    {
        $SA1 = $this->objPDO->prepare('DELETE FROM SA1010 WHERE R_E_C_N_O_ = :recno');
        $SA1->bindValue(':recno', $_GET['id']);
        $SA1->execute();

        header('Location: /');   
    }
}