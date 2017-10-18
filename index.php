<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
require_once 'vendor/autoload.php';
use Twilio\Twiml;
$response = new Twiml;
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
$meaning = $urban_response->raw_body;
$defines = $meaning->meaning;
$mean = (array) json_encode($meaning);
$meaning_result = '';
echo $mean;

foreach($mean->entries as $row){
  foreach ($row as $key=>$val){
    if($val != ''){
      $meaning_result = $meaning_result . $val;
    }
  }
}


echo $meaning_result;
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
