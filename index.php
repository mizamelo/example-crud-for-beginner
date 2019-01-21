<?php

// Carrega conexao 
require_once './banco.php';

// Instancia do banco
$conn = new Banco;

// Rotas
if ( isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] === '/editar')  
{
    $dados = $conn->editar();
    $pagina = 'pagina-editar.php';

} 
else if (isset($_GET['action']) && !empty($_GET['action']) )
{
    switch ($_GET['action']) {
        case 'add':
            $conn->adicionar();
            break;
        case 'edit':
            $conn->editar();
            break;
        case 'excluir':
            $conn->excluir();
            break;
    }
}
else {
    $dados = $conn->listar();
    // Carrega a pagina com a varialvel $dados
    $pagina = 'pagina-listar.php';
}

// Carrega o template
require_once './template.php';
