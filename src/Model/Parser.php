<?php
namespace priscille_q\pigLatinTranslator\Model;

class Parser implements ParserInterface
{
	const VOWEL = 'aeiou';

	public function isBeginByVowel($word)
	{
		if (!isset($word) || empty($word))
		{
			throw new \InvalidArgumentException('Missing argument, waiting for a string');
		}
		return preg_match('/^['. self::VOWEL .']{1}/i', $word);
	}

	public function getPositionFirstVowel($word)
	{
		if (!isset($word) || empty($word) || !is_string($word))
		{
			throw new \InvalidArgumentException('Invalid word, it must be a string, got :' . var_export($word, true));
		}
		return strcspn(strtolower($word), self::VOWEL);
	}

	public function isBeginByConsonant($word)
	{
		if (!isset($word) || empty($word))
		{
			throw new \InvalidArgumentException('Missing argument, waiting for a string');
		}
		return preg_match('/^['. self::VOWEL .']{0}/i', $word);
	}
}
