<?php
namespace priscille_q\pigLatinTranslator;

interface AutoloaderInterface
{
	public static function autoloadRegister();

	public static function autoload($modelName);
}
