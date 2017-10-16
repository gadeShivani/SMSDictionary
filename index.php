<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
$key = $_REQUEST['Body'];

$json = <<< JSON
{
    "John": {
        "status":"Wait"
    },
    "Jennifer": {
        "status":"Active"
    },
    "James": {
        "status":"Active",
        "age":56,
        "count":10,
        "progress":0.0029857,
        "bad":0
    }
}
JSON;

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
		$response->message($val);
    } else {
        echo "$key => $val\n";
		$response->message($val);
    }
}
print $response;

?>
