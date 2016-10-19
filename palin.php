<html>
<head>
<title>Palindrome</title>
</head>
<body bgcolor="Skyblue">
<center>
<form align="bottom" method="post" action="index.php">
<input type="submit" value= "Home">
</form>
<?php
function checkPalindrome( $string )   
{

$memcache = new Memcache;
  $data = $memcache->get($string);

  
  if ($data == false) {
   
    
      $string = str_replace( ' ', '', $string );
     $data= (strcasecmp($string,strrev($string)));
      $memcache->set($string, $data);
  
}
 
return $data;
    
}  



$string=$_POST["input"];
$startTime = microtime(true);
if( checkPalindrome( $string ) == false )
{
    // if function returns true
    
    echo '"'.$string.'" is a palindrome<br>';
}
else
{
    // if function returns false
    echo $string.' is not a palindrome<br>';
}
 echo "Elapsed time is: ". (microtime(true) - $startTime) ." seconds <br>";
?>
</center>
<body>
</html>
