<?php
namespace priscille-q/pigLatinTranslator/Tests;

use priscille-q/pigLatinTranslator/Model;

class LatinAlphabetTest extends PHPUnit_Framework_testCase
{
	public function testConstructor()
	{
		new LatinAlphabet();
	}

	/**
	 *
	 */
	public function testNoParamaterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant();
		$this->assertEquals($result, false);
	}

	public function testNumberAsParameterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant(42);
		$this->assertEquals($result, false);
	}

	public function testSpecialCharacterAsParameterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('/');
		$this->assertEquals($result, false);
	}

	public function testSpaceAsParameterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant(' ');
		$this->assertEquals($result, false);
	}

	public function testWordAsParameterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('Test');
		$this->assertEquals($result, false);
	}

	public function testEmptyStringAsParameterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('');
		$this->assertEquals($result, false);
	}

	public function testNullAsParameterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant(null);
		$this->assertEquals($result, false);
	}

	public function testUpperCaseConsonantLetterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('R');
		$this->assertEquals($result, true);
	}
	public function testLowerCaseConsonantLetterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('r');
		$this->assertEquals($result, true);
	}

	public function testUpperCaseVowelLetterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('I');
		$this->assertEquals($result, false);
	}
	public function testLowerCaseVowelLetterForIsConsonant()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('a');
		$this->assertEquals($result, false);
	}

	public function testNoParamaterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant();
		$this->assertEquals($result, false);
	}
	public function testNumberAsParameterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant(42);
		$this->assertEquals($result, false);
	}

	public function testSpecialCharacterAsParameterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('/');
		$this->assertEquals($result, false);
	}

	public function testSpaceAsParameterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant(' ');
		$this->assertEquals($result, false);
	}

	public function testWordAsParameterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('Test');
		$this->assertEquals($result, false);
	}

	public function testEmptyStringAsParameterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('');
		$this->assertEquals($result, false);
	}

	public function testNullAsParameterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant(null);
		$this->assertEquals($result, false);
	}

	public function testUpperCaseConsonantLetterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('R');
		$this->assertEquals($result, false);
	}

	public function testLowerCaseConsonantLetterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('r');
		$this->assertEquals($result, false);
	}

	public function testUpperCaseVowelLetterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('I');
		$this->assertEquals($result, true);
	}

	public function testLowerCaseVowelLetterForIsVowel()
	{
		$latinAlphabet = new LatinAlphabet();
		$result = $latinAlphabet->isConsonant('a');
		$this->assertEquals($result, true);
	}



	public function testReturnTypeForGetConsonantList();
	// {
	// 	$witness = '';
	// 	$latinAlphabet = new LatinAlphabet();
	// 	$result = $latinAlphabet->GetConsonantList();
	// 	$this->assertEquals($result, $witness);
	// }
	public function testReturnValueForGetConsonantList();

	public function testReturnTypeForGetVowelList();
	// {
	// 	$witness = 'aeiou';
	// 	$latinAlphabet = new LatinAlphabet();
	// 	$result = $latinAlphabet->GetVowelList();
	// 	$this->assertEquals($result, $witness);
	// }
	public function testReturnValueForGetVowelList();

}
