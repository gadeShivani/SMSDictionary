<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;
$response = new Twiml;
$body = $_REQUEST['Body'];
$json = file_get_contents('./dictionary.json');

JSON;
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
foreach ($jsonIterator as $key => $val) {
   if( $body == $key ){
	  
    $response->$val;
	
}else if( $body == 'bye' ){
    $response->message('Goodbye');
}
}
print $response;
?>
