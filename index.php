<?php
/**
 * Autoload que responsável em carregar todos os arquivos.
 */
spl_autoload_register(function($class)
{

	if(strpos($class, 'Controller') > -1) 
	{
		if(file_exists('controllers/'.$class.'.php')) {
			require_once 'controllers/'.$class.'.php';
		} 
	} elseif(file_exists('core/'.$class.'.php')){
		require_once 'core/'.$class.'.php';
	}
	
});

$core = new Core();
$core->run();
