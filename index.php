<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
$body = $_REQUEST['Body'];
function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}

function getSynonims($body)
{
    $url = 'http://googledictionary.freecollocation.com/meaning?word='.$body;
    
    $data = file_get_contents($url);
    
    return $data;
}
if( $body == 'hello' ){
    $response->message('Hi!');
}else if( $body == 'bye' ){	
    $response->message('Goodbye');
}else{
	
	 $response->getSynonims($body);
	
}
print $response;


?>