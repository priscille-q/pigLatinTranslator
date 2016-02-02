<?php
require_once __DIR__ . '/vendor/autoload.php';

use priscille_q\pigLatinTranslator;
use priscille_q\pigLatinTranslator\Bootstrap;
use priscille_q\pigLatinTranslator\Model;

try
{
	(new Bootstrap)->run($argv);
}
catch (Exception $e)
{
	echo 'Caught exception: ',  $e->getMessage(), "\n";
	exit(0);
}
catch (InvalidArgumentException $e)
{
	echo 'Caught exception: ',  $e->getMessage(), "\n";
	exit(0);
}
