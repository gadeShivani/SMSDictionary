<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
if(isset($_POST['Body']))
{
$word = $_POST['Body'];


$json = <<< JSON
{
    "John":"56",
    "Jennifer":"45",
    "James":"44"
}
JSON;

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);


foreach ($jsonIterator as $key => $val) {

   if( $word == $key ){

    $response->message($val);
    echo $response;

}

}

}
?>
