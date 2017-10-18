<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
require_once 'vendor/autoload.php';
use Twilio\Twiml;



$response = new Twiml;
if(isset($_POST['Body']))
{
$word = $_POST['Body'];



$oxford_response = Unirest\Request::get("https://joughtred-oxford-dictionaries-v1.p.mashape.com/domains/{en}",
  array(
    "X-Mashape-Key" => "iDPOerKXEemshKTvdIucGG5ZD8jEp1jqxw8jsnXDAKBp40usEK"
  )
);
//print_r($urban_response);
//https://github.com/Kong/unirest-php/issues/104
//$obj=json_encode($urban_response->body,TRUE);

//$meaning = $oxford_response->body;
//$defines = $meaning->list;
//foreach ($defines as $define){
//  $definition = $define->definition;
//  break;
//}
//$response->message($definition);
 print_r($oxford_response);

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
