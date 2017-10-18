<?php
// Get the PHP helper library from twilio.com/docs/php/install
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;



$response = new Twiml;
$body = $_REQUEST['keyword'];

// // $json = './dictionary.json';
// $json = <<< JSON
// {
//     "John":56,
//     "Jennifer":45,
//     "James":44
// }
// JSON;
//
// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);


// foreach ($jsonIterator as $key => $val) {
//   //  if( $body == $key ){
// 	  var_dump($val);
//     die();
//     // $response->message($val);
//
// }
// print $response;
echo 'ji';
?>
