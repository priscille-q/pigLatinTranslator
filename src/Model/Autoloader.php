<?php
namespace priscille_q\pigLatinTranslator;
require_once __DIR__ .'/AutoloaderInterface.php';

use priscille_q\pigLatinTranslator\AutoloaderInterface;

class Autoloader implements AutoloaderInterface
{
	public static function autoloadRegister()
	{
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	public static function autoload($modelName)
	{
		if (strpos($modelName, __NAMESPACE__ . '\\') === 0)
		{
			$modelName = str_replace(__NAMESPACE__ . '\\', '', $modelName);
			require 'Model/' . $modelName . 'php';
		}
	}
}
