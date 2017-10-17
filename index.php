<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
$body = $_REQUEST['Body'];

$json = <<< JSON
{
   
	"John": "56",
	"Mary": "40"

}
JSON;

$json=json_decode($json, TRUE));
$contents = utf8_encode($json);
 $results = json_decode($contents); 
 
 if(array_key_exists($body,$results)){
	 
	 $firstName = $jsonArray[$body];
	 $response->message($firstName);
 }

print $response;

?>
