<html>
<body bgcolor="Skyblue">
<center>
<form align="bottom" method="post" action="index.php">
<input type="submit" value= "Home">
</form>
<p>
<?php
use \google\appengine\api\mail\Message;
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
$user = UserService::getCurrentUser();
function decrypt($string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16); 
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);

    return $output;
}
$plain_txt = $_POST["input"];

$decrypted_txt = decrypt($plain_txt);

try{
     $message = new Message();
     $message->setSender($user->getEmail());
     $message->addTo($user->getEmail());
     $message->setSubject("Decrypted text");
     $message->setTextBody($decrypted_txt);
     $message->send();
     echo "Decrypted text is sent to the email :".$user->getEmail().'<br>';
} 
catch (InvalidArgumentException $e){
  echo "Error in sending email. Enter the encrypted text to decrypt.";
}
?>
</p>
</center>
</body>
</html>
