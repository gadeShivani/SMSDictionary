<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
require_once 'vendor/autoload.php';
use Twilio\Twiml;



$response = new Twiml;
if(isset($_POST['Body']))
{
$word = $_POST['Body'];

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

    $urban_response = Unirest\Request::get("https://mashape-community-urban-dictionary.p.mashape.com/define?term=".$word,
      array(
        "X-Mashape-Key" => "iDPOerKXEemshKTvdIucGG5ZD8jEp1jqxw8jsnXDAKBp40usEK",
        "Accept" => "text/plain"
      )
    );
    print_r($urban_response);

    echo $response;

}

}

}
?>
