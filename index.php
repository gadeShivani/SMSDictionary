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

foreach ($jsonIterator as $key => $val) {
    if($body == is_array($key)) {
        echo "$key:\n";
		$response->message($val);
		$message = $response->message();
$message->body($val);
    } 
}
header("content-type: text/xml");
echo $response;
print $response;

?>
