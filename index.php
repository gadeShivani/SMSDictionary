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
 
 echo $json;
echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');
print $response;

?>
