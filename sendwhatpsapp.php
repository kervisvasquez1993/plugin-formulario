
<?php require_once './vendor/autoload.php';

use Twilio\Rest\Client;
$rutaWhatsap = __FILE__ ; 
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Your Account Sid and Auth Token from twilio.com/console
$sid    = getenv("ACa07cee86f5c2c29b08c541e6aafa0b48");
$token  = getenv("4992ea482620cc3cb81400ada9d1bc1f");
$twilio = new Client($sid, $token);

$codes = 'hla';

$message = $twilio->messages
   ->create("whatsapp:".getenv("MY_WHATSAPP_NUMBER"),
       [
           "body" => "Your ice-cream code is ".$codes,
           "from" => "whatsapp:".getenv("TWILIO_WHATSAPP_NUMBER")
       ]
   );


   if($codes != ""){ 
      return ($message->sid);
   }