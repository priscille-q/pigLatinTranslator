<?php
namespace priscille_q\pigLatinTranslator;

use priscille_q\pigLatinTranslator\Model\Parameter;
use priscille_q\pigLatinTranslator\Model\Parser;
use priscille_q\pigLatinTranslator\Model\EnglishToPigLatinTranslator;

class Bootstrap
{
	public function run($parameter)
	{
		$sentences = Parameter::getParameter($parameter);
		$parser = new Parser();
		$translator = new EnglishToPigLatinTranslator($parser);
		foreach ($sentences as $sentence)
		{
			$words = $parser->explode($sentence);
			$numberOfWord = count($words);

			for ($counter = 0; $counter < $numberOfWord; $counter++) {
				$words[$counter] = $translator->translate($words[$counter]);
			}
			$translatedSentence = implode(' ', $words);
			echo $translatedSentence . "\n";
		}
	}
}
