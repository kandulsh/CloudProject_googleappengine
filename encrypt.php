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
function encrypt($string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);

    return $output;
}
$plain_txt = $_POST["input"];
$encrypted_txt = encrypt($plain_txt);

try{
     $message = new Message();
     $message->setSender($user->getEmail());
     $message->addTo($user->getEmail());
     $message->setSubject("Encrypted text");
     $message->setTextBody($encrypted_txt);
     $message->send();
     echo "Encrypted text is sent to the email :".$user->getEmail().'<br>';
} 
catch (InvalidArgumentException $e){
  echo "Error sending email";
}
?>
</p>
</center>
</body>
</html>
