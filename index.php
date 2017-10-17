<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;
$response = new Twiml;
$body = $_REQUEST['Body'];

if( $body == 'Hello' ){
    $response->message('Hi!');
}else if( $body == 'bye' ){	
    $response->message('Goodbye');
}
else if( $body == 'Concept' ){	
    $response->message('Concept: an abstract or general idea inferred from specific instances');
}
else{
	
	  $response->message('Please Enter A Valid Word');
	
}
print $response;
?>
