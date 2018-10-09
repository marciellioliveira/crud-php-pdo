<?php

//Constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ultimatephp_artigos');

//Habilita todas as exibições de erro
ini_set('display_errors', true);
error_reporting(E_ALL);

//data_default_timezone_set('America/Sao_Paulo');

//Inclui o arquivo de funções
require_once 'functions.php';

?>