<?php
namespace priscille_q\pigLatinTranslator\Model;

interface ParserInterface
{
	public function isBeginByVowel($word);
	public function getPositionFirstVowel($word);
	public function isBeginByConsonant($word);
	public function explode($sentence);
}
