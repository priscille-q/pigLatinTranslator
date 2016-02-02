<?php
namespace priscille_q\pigLatinTranslator\Model;

class Parser implements ParserInterface
{
	const VOWEL = 'aeiou';
	const CONSONANT = 'bcdfghjklmnpqrstvwxyz';
	const PUNCTUATION = '.,;?!:';

	public function isBeginByVowel($word)
	{
		if (empty($word))
		{
			throw new \InvalidArgumentException(__FILE__.':'.__LINE__.': Missing argument, waiting for a string');
		}
		return preg_match('/^['. self::VOWEL .']{1}/i', $word);
	}

	public function getPositionFirstVowel($word)
	{
		if (empty($word) || !is_string($word))
		{
			throw new \InvalidArgumentException(__FILE__.':'.__LINE__.': Invalid word, it must be a string, got :' . var_export($word, true));
		}
		return strcspn(strtolower($word), self::VOWEL);
	}

	public function isBeginByConsonant($word)
	{
		if (empty($word))
		{
			throw new \InvalidArgumentException(__FILE__.':'.__LINE__.': Missing argument, waiting for a string');
		}
		return preg_match('/^['. self::CONSONANT .']{1}/i', $word);
	}

	public function explode($sentence)
	{
		$sentence = trim($sentence);
		$sentence = preg_replace('/\s+/', ' ', $sentence);
		$words = explode(' ', $sentence);
		return $words;
	}
}
