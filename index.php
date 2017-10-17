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
else if( $body == 'Obtain' ){	
    $response->message('Obtain: Come into possession of');
}
else if( $body == 'Scarce' ){	
    $response->message('Scarce: deficient in quantity or number compared with the demand');
}
else if( $body == 'Policy' ){	
    $response->message('Policy: a plan of action adopted by an individual or social group');
}
else if( $body == 'Straight' ){	
    $response->message('Straight: successive, without a break');
}
else if( $body == 'Concept' ){	
    $response->message('Concept: an abstract or general idea inferred from specific instances');
}
else if( $body == 'Stock' ){	
    $response->message('Stock: capital raised by a corporation through the issue of shares');
}
else if( $body == 'Apparent' ){	
    $response->message('Apparent: clearly revealed to the mind or the senses or judgment');
}
else if( $body == 'Property' ){	
    $response->message('Property: a basic or essential attribute shared by members of a class');
}
else if( $body == 'Fancy' ){	
    $response->message('Fancy: imagine; conceive of; see in ones mind');
}
else{
	
	  $response->message('Please Enter A Valid Word');
	
}
print $response;
?>
