<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
$user = UserService::getCurrentUser();

if (isset($user)) {
  echo sprintf('Hello, %s! (<a href="%s">sign out</a>)',
               $user->getNickname(),
               UserService::createLogoutUrl('/'));
  echo sprintf('<html><head><title>Home Page</title></head><body bgcolor="Skyblue"><center>
		<h1 face="Comic sans MS" size="5">Play With Text</h1> 
      		<form align="right" method="post" action=urlfetch.php>
		<button type="submit" value= "View Help Page" formmethod="post" formaction="urlfetch.php">View Help Page </button>
		</form>
                <form align="centre" method="post" action=default.php>
		<strong> Enter the text:</strong>
		<p align="bottom"><textarea name="input" cols="60" rows="12" align="bottom" required></textarea></p>
                <button type="submit" value= "Text Statistics" formmethod= "post" formaction="textstatistics.php">Text Statistics</button>
		<button type="submit" value= "encrypt" formmethod= "post" formaction="encrypt.php">Encrypt </button>
                <button type="submit" value= "decrypt" formmethod="post" formaction="decrypt.php"> Decrypt </button>
		<button type="submit" value= "Check Palindrome" formmethod="post" formaction="palin.php">Check Palindrome </button>
	        <button type="submit" value= "Perform SHA1 Hashing" formmethod="post" formaction="hashing.php">Perform SHA1 Hashing</button><br><br>
                <strong>Enter the word to find occurrence</strong>
		<input type="text" name= "word1" ><br><br>
		<strong>Enter the word to find occurrence</strong>
		<input type="text" name= "word2" ><br><br>
		<strong>Enter the word to find occurrence</strong>
		<input type="text" name= "word3" ><br><br>
                <button align="centre" type="submit" value= "Submit" formmethod= "post" formaction="text1.php" >Find Word Occurrences </button>
	</form>
</center>
</body>
</html>');

} 
else {
  echo sprintf('<html><head><title>Login Page</title></head><body bgcolor="Skyblue" ><center><h1> Play With Text</h1><br><a href="%s">Sign in or register</a></center></body></html>',
               UserService::createLoginUrl('/'));
}
?>

