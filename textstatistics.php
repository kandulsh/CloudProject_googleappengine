<?php
echo sprintf('<html><body><form align="bottom" method="post" action="index.php">
<input type="submit" value= "Home">
</form></body></html>');   
echo "<body style='background-color:#9999ff'>";
 $word=0;$sent=0;$para=0;
 $a=0; $b=0;
  $s=$_POST["input"];
  $l=strlen($s);
 
  for($i=0;$i<$l;$i++)
 {
  $word= str_word_count($s);
  if(substr($s,$i,1)=='.' || (substr($s,$i-1,1)!=' ' & substr($s,$i,1)=='!') || (substr($s,$i-1,1)!=' ' & substr($s,$i,1)=='?'))
  {
     $sent=$sent+1;
}

}
?>

<html>
<center>

<h1> Text Statistics </h1>
<style>
div {
    width: 500px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
</style>
<div>
<?php

echo" Number of words are ".$word."<br><br>";
echo" Number of sentences are ".$sent."<br>";
 echo "<br>";

  $lower_count=0;
   $upper_count=0;
  for( $i='a';$i<'z';$i++)
  {
      $count= substr_count($s,$i);
      $lower_count= $lower_count + $count;
  }
 
 
  if($lower_count==0)
  {
      echo "No lower-case letters!";
  }
  else
echo "Number of lower case letters are ". $lower_count ;
  echo "<br> <br>";

 
   for( $i='A';$i<'Z';$i++)
  {
      $countx= substr_count($s,$i);
      $upper_count= $upper_count + $countx;
  }

 

  if($upper_count==0)
  {
      echo "No upper-case letters!";
  }
else
echo "Number of upper case letters are ". $upper_count ;
  echo "<br><br>";


$num_count=0;
for($i=0; $i<$l;$i++)
{
   $val= ord(substr($s,$i,1));
   
   if( $val>=48 && $val<=57)
   $num_count = $num_count+1;
}
if($num_count==0)
  {
      echo "No digits in text!";
  }
else
echo "Number of digits are ". $num_count ;
  echo "<br><br>";


$special_count=0;
for($i=0; $i<$l;$i++)
{
   $val= ord(substr($s,$i,1));
   
   if( ($val>=33 && $val<=47) || ($val>=58 && $val<=64) || ($val>=91 && $val<=96))
   $special_count = $special_count+1;
}

 

 
 if($special_count==0)
     echo "No special characters!";
  else
 echo "Number of special characters are ". $special_count ;
 
 
 ?>
</div>
</center>
</html>
