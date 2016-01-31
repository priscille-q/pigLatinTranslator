<?php
namespace priscille_q\pigLatinTranslator\Model;

class EnglishToPigLatinTranslator implements TranslatorInterface
{
	const SUFFIX = 'ay';
	protected $parser;

	public function __construct(ParserInterface $parser)
	{
		$this->parser = $parser;
	}

	public function translate($word)
	{
		if (!$this->checkWord($word))
		{
			return '';
		}
		//verifier le debut du mot vior si il y a quelque chose avant la permiere lettre
		if ($this->parser->isBeginByVowel($word))
		{
			return $this->wordBeginingByVowelTranslation($word);
		}
		elseif ($this->parser->isBeginByConsonant($word))
		{
			return $this->wordBeginingByConsonantTranslation($word);
		}

		return $word;
	}

	protected function wordBeginingByVowelTranslation($word)
	{
		return strtolower($word . self::SUFFIX);
	}

	protected function wordBeginingByConsonantTranslation($word)
	{
		$vowelPosition = $this->parser->getPositionFirstVowel($word);
		return strtolower(substr($word, $vowelPosition) . substr($word, 0, $vowelPosition) . self::SUFFIX);
	}

	protected function checkWord(&$word)
	{
		if (!isset($word))
		{
			return false;
		}
		$word = trim($word);
		if (empty($word))
		{
			return false;
		}

		return true;
	}
}
