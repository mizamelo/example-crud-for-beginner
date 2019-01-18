<?php

// Carrega conexao 
require_once './banco.php';

// Rotas
if ( isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] === '/editar')  
{
    require_once 'editar.php';
    
} else {
    // Carrega a pagina
    require_once './pagina.php';
}

