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
}
?>
