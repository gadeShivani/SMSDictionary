<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
$body = $_REQUEST['Body'];


}
if( $body == 'Consider' ){
    $response->message('Consider: deem to be!');
}else if( $body == 'Minute'){	
    $response->message('Minute: infinitely or immeasurably small');
}
else if( $body == 'Accord' ){	
    $response->message('Accord: Concurrence of opinion');
}
else if( $body == 'Evident' ){	
    $response->message('Evident: Clearly revealed to the mind or the senses or judgment');
}
else if( $body == 'Practice' ){	
    $response->message('Practice: A customary way of operation or behavior');
}
else if( $body == 'Intend' ){	
    $response->message('Intend: Have in mind as a purpose');
}
else if( $body == 'Concern' ){	
    $response->message('Concern: something that interests you because it is important');
}
else if( $body == 'Commit' ){	
    $response->message('Commit: perform an act, usually with a negative connotation');
}
else if( $body == 'Issue' ){	
    $response->message('issue: some situation or event that is thought about');
}
else if( $body == 'Approach:' ){	
    $response->message('Approach: Move towards');
}
else if( $body == 'Establish' ){	
    $response->message('Establish: Set up or found');
}
else if( $body == 'Utter' ){	
    $response->message('Utter: Without qualification');
}
else if( $body == 'Conduct' ){	
    $response->message('Conduct: direct the course of; manage or control');
}
else if( $body == 'Engange' ){	
    $response->message('Engage: Consume all of one's attention or time');
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
    $response->message('Fancy: imagine; conceive of; see in one's mind');
}
else if( $body == 'Concept' ){	
    $response->message('Concept: an abstract or general idea inferred from specific instances');
}
else
{
	$response->message(‘Please Enter A Valid Word’);

}
print $response;


?>
