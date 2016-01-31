<?php
use priscille_q\pigLatinTranslator\Model\Autoloader;
use priscille_q\pigLatinTranslator\Model\Parser;
require_once __DIR__ .'/../src/Model/Autoloader.php';

Autoloader::autoloadregister();

class ParserTest extends PHPUnit_Framework_TestCase
{
	public function testConstructor()
	{
		new Parser();
	}

	public function testNumberAsParameterForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel(42);
		$this->assertEquals($result, false);
	}

	public function testSpecialCharacterAsParameterForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('^&*');
		$this->assertEquals($result, false);
	}

	public function testSpaceAsParameterForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('  ');
		$this->assertEquals($result, false);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testEmptyStringAsParameterForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('');
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testNullAsParameterForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel(null);
	}

	public function testVowelUpperCaseForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('Used');
		$this->assertEquals($result, true);
	}

	public function testVowelLowerCaseForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('used');
		$this->assertEquals($result, true);
	}

	public function testNoVowelUpperCaseForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('Beast');
		$this->assertEquals($result, false);
	}

	public function testNoVowelLowerCaseForIsBeginByVowel()
	{
		$parser = new Parser();
		$result = $parser->isBeginByVowel('beast');
		$this->assertEquals($result, false);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testNumberAsParameterForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$result = $parser->getPositionFirstVowel(42);
	}

	public function testSpecialCharacterAsParameterForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$word = '^&*';
		$result = $parser->getPositionFirstVowel($word);
		$this->assertEquals($result, strlen($word));
	}

	public function testSpaceAsParameterForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$word = ' ';
		$result = $parser->getPositionFirstVowel($word);
		$this->assertEquals($result, strlen($word));
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testEmptyStringAsParameterForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$result = $parser->getPositionFirstVowel('');
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testNullAsParameterForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$result = $parser->getPositionFirstVowel(null);
		$this->assertEquals($result, false);
	}

	public function testVowelUpperCaseForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$result = $parser->getPositionFirstVowel('BEAST');
		$this->assertEquals($result, 1);
	}

	public function testVowelLowerCaseForGetPositionFirstVowel()
	{
		$parser = new Parser();
		$result = $parser->getPositionFirstVowel('beast');
		$this->assertEquals($result, 1);
	}
}
