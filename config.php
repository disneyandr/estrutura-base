<?php 
// error_reporting(0);
	require __DIR__ . '/vendor/autoload.php';

/*CONSTANTES*/
	$pasta_instalacao = 'estrutura_basica';
	$dominio = $_SERVER['SERVER_NAME'];
	$protocolo = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
	$url_principal = $protocolo . $dominio;
	$caminho_dominio = $url_principal . '/' . $pasta_instalacao;
	
	define("CAMINHO_DOMNIO",$caminho_dominio);
	define('JQUERY','<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>');
/*MAILER*/
	define('MAIL_HOST','...');
	define('MAIL_USER_NAME','...');
	define('MAIL_PASS','...');
	define('MAIL_FROM','...');
	define('MAIL_FROM_NAME','...');
	define('MAIL_SUBJECT','...');

	$banco = 'local';

	switch ($banco) {
		case 'local':
			define('HOST','localhost');
			define('DB_NAME','ws');
			define('USER_NAME','root');
			define('PASSWORD','');
			session_start();
			break;
		
		case 'homologacao':
			// define('HOST','NANANAN');
			// define('DB_NAME','NANANAN');
			// define('USER_NAME','NANANAN');
			// define('PASSWORD','NANANAN');
			session_start();
			break;

		case 'producao':
			// define('HOST','NANANAN');
			// define('DB_NAME','NANANAN');
			// define('USER_NAME','NANANAN');
			// define('PASSWORD','NANANAN');
			session_start();
			break;
	}
 ?>