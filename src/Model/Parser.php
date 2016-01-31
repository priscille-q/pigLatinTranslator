<?php
namespace priscille_q\pigLatinTranslator\Model;

class Parser implements ParserInterface
{
	const VOWEL = 'aeiou';

	public function isBeginByVowel($word)
	{
		if (!isset($word) || empty($word))
		{
			return false;
		}
		return preg_match('/^['. self::VOWEL .']{1}/i', $word);
	}

	public function getPositionFirstVowel($word)
	{
		if (!isset($word) || empty($word) || !is_string($word))
		{
			return false;
		}
		return strcspn(strtolower($word), self::VOWEL);
	}

	public function isBeginByConsonant($word)
	{
		if (!isset($word) || empty($word))
		{
			return false;
		}
		return preg_match('/^['. self::VOWEL .']{0}/i', $word);
	}
}
