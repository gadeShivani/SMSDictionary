<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
$body = $_REQUEST['Body'];

$json = <<< JSON
{
    "John":56,
    "Jennifer":45,
    "James":44
}
JSON;

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if($body == $key ) {
        echo "$key:$val";
		$response->redirect("http://www.urbandictionary.com/define.php?term=".$body);
		$response->message("val");
    } else {
        echo "$key => $val\n";
		echo "$body\n";
		$response->redirect("http://www.urbandictionary.com/define.php?term=".$body);
		$response->message("val");
    }
}
print $response;

?>
