#!/usr/bin/php
<?php
use priscille_q\pigLatinTranslator\Model\Autoloader;
use priscille_q\pigLatinTranslator\Model\Parameter;
use priscille_q\pigLatinTranslator\Model\Parser;
use priscille_q\pigLatinTranslator\Model\EnglishToPigLatinTranslator;

require_once 'Model/Autoloader.php';

Autoloader::autoloadregister();

try{
	$sentences = Parameter::getParameter($argv);
}
catch (Exception $e)
{
	echo 'Caught exception: ',  $e->getMessage(), "\n";
	exit(0);
}
if (empty($sentences))
{
	exit(0);
}
$translator = new EnglishToPigLatinTranslator(new Parser());

foreach ($sentences as $sentence) {
	$words = explode(' ', $sentence);
	$numberOfWord = count($words);

	for ($counter = 0; $counter < $numberOfWord; $counter++) {
		$words[$counter] = $translator->translate($words[$counter]);
	}
	$translatedSentence = implode(' ', $words);
	echo $translatedSentence . "\n";
}
 ?>
