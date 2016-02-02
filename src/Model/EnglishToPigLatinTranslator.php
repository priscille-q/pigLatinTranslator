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
		$punctuation = '';
		if(preg_match('/[' . Parser::PUNCTUATION . ']{1}$/', $word))
		{
			$size = strlen($word);
			$punctuation = substr($word, $size - 1, $size);
			$word = substr($word, 0, $size - 1);
		}
		if(empty($word))
		{
			$punctuation;
		}
		if ($this->parser->isBeginByVowel($word))
		{
			$word = $this->wordBeginingByVowelTranslation($word);
		}
		elseif ($this->parser->isBeginByConsonant($word))
		{
			$word = $this->wordBeginingByConsonantTranslation($word);
		}

		return $word . $punctuation;
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
		$word = trim($word);
		if (empty($word))
		{
			return false;
		}

		return true;
	}
}
