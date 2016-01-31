<?php
use priscille_q\pigLatinTranslator\Autoloader;
use priscille_q\pigLatinTranslator\Model\Parser;
use priscille_q\pigLatinTranslator\Model\EnglishToPigLatinTranslator;

require_once __DIR__ .'/../src/Model/Autoloader.php';

Autoloader::autoloadregister();

class EnglishToPigLatinTranslatorTest extends PHPUnit_Framework_TestCase
{
	public function testConstructor()
	{
		new EnglishToPigLatinTranslator(new Parser());
	}

	public function testEmptyparameterForTranslate()
	{
		$translator = new EnglishToPigLatinTranslator(new Parser());
		$result = $translator->translate('');
		$this->assertEquals($result, '');
	}

	public function testSpaceparameterForTranslate()
	{
		$translator = new EnglishToPigLatinTranslator(new Parser());
		$result = $translator->translate(' ');
		$this->assertEquals($result, '');
	}

	public function testValidLowerConsonantparameterForTranslate()
	{
		$translator = new EnglishToPigLatinTranslator(new Parser());
		$result = $translator->translate('beast');
		$this->assertEquals($result, 'eastbay');
	}

	public function testValidUpperConsonantparameterForTranslate()
	{
		$translator = new EnglishToPigLatinTranslator(new Parser());
		$result = $translator->translate('DOUGH');
		$this->assertEquals($result, 'oughday');
	}

	public function testValidUpperVowelparameterForTranslate()
	{
		$translator = new EnglishToPigLatinTranslator(new Parser());
		$result = $translator->translate('EAGLE');
		$this->assertEquals($result, 'eagleay');
	}



}
