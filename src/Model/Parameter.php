<?php
namespace priscille_q\pigLatinTranslator\Model;

class Parameter
{
	/**
	* parse option parameter
	* @param array
	* @return array
	*/
	static public function getParameter($parameter)
	{
		$array = array_shift($parameter);
		if (!isset($parameter['0']))
		{
			throw new \Exception("Usage: php index.php 'Sentence to translate' 'Another sentence to translate' ...");
		}
		return $parameter;
	}
}
