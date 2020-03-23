<?php 

	namespace App\Controller;
	/**
	 * 
	 */
	class Rotas
	{
		
		/**
		*@var array que recebe os parametros da url
		*/
		public static function getPagina()
		{
			$barra = DIRECTORY_SEPARATOR;
			if(!isset($_GET['pag'])):
				/*aqui é configurado o primeiro conteúdo que queres exibir*/
				include 'App/pagina/home.php';
			else:
				$pag = explode('/',$_GET['pag']);
				$pagina = 'App' . $barra . 'pagina' . $barra . $pag[0] . '.php';
				if(file_exists($pagina)):
					include $pagina;
				else:
					include 'App/pagina/404.php';
				endif;
			endif;
		}
	}

 ?>