<<<<<<< HEAD
<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
require_once 'vendor/autoload.php';
use Twilio\Twiml;
if(isset($_POST['Body']))
{
$word = $_POST['Body'];
$urban_response = Unirest\Request::get("https://twinword-word-graph-dictionary.p.mashape.com/definition/?entry=".$word,
 array(
   "X-Mashape-Key" => "CyTK04aDZimshlJZC3T5HOkTxBYhp12DjZpjsngu4YEAZTswj4",
   "Accept" => "application/json"
 )
);
//print_r($urban_response);
//https://github.com/Kong/unirest-php/issues/104
//$obj=json_encode($urban_response->body,TRUE);
$meaning_result = $urban_response->body;
$meanings = $meaning_result->meaning;

$meanings = json_decode(json_encode($meanings),TRUE);
$meaning_send = '';
foreach ($meanings as $key=>$val){
  if($val != ''){
    $meaning_send = $meaning_send . $val;
  }
}
$response = new Twiml;

$response->message($meaning_send);
echo $response;

/*$meaning = $urban_response->raw_body;
$defines = $meaning->meaning;
$mean = (array) json_encode($meaning);
$meaning_result = '';
$mean_results = $mean[0];
print_r($mean_results);
echo "--";

1 mn
  foreach ($mean_results as $key=>$val){
    print_r($key);
    echo "--2";
    if($val != ''){
      $meaning_result = $meaning_result . $val;
    }
  }
1 mn
ok chk this

print_r( $meaning_result);
//foreach ($defines as $define){

//$definition = $define->definition;

 //break;

//}

//$response->message($meaning);
//echo $response;
/*$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($obj, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
  $meaning = $obj['list'];
  echo $meaning;
foreach ($jsonIterator as $key => $val) {
print_r($key);
print_r($val);
   if( $word == $key ){
    $response->message($val);
    echo $response;
}
}*/
}
?>
=======
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
else if( $body == 'Engage' ){	
    $response->message('Engage: Consume all of ones attention or time');
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
else if( $body == 'Minute'){	
    $response->message('Minute: infinitely or immeasurably small');
}
else if( $body == 'Accord' ){	
    $response->message('Accord: Concurrence of opinion');
}
else if( $body == 'Evident' ){	
    $response->message('Evident: Clearly revealed to the mind or the senses or judgment');
}
else if( $body == 'Consider'){	
    $response->message('Consider: Deem to be');
}
else
{
	  $response->message('Please Enter A Valid Word');
}
print $response;
?>
>>>>>>> 4e833851a46e4204ddd7951f4b52d48055773173
