<html>
<head>
    <title> Word Occurrences</title>  
</head>
</body>
<p>
<?php
$s=$_POST["input"];
$word1= $_POST["word1"];
$word2= $_POST["word2"];
$word3= $_POST["word3"];
$arr = array();
$wordcount=str_word_count($s);

$l=strlen($s);

$i=0;
$m=0;

while($i<$l){
    $str='';
    while(($s[$i]>='a' & $s[$i]<='z') || ($s[$i]>='A' & $s[$i]<='Z'))
    {
        $str=$str."".$s[$i];
        $i++;
    }
    if($str != "")
    {
        $arr[$m]=$str;
        $m++;
    }
    else
          $i++;
}

$count1=0;
$count2=0;
$count3=0;
/*
$st1=str_replace('.','',$s);
$st2=str_replace(',','',$st1);
$st3=str_replace('?','',$st2);
$st=str_replace('!','',$st3);
$words= explode(" ",$st);
$arrlen= count($words);
for($i=0;$i<$arrlen;$i++){
  if(strcasecmp($words[$i],$word1)==0)
     $count1=$count1+1;
  if(strcasecmp($words[$i],$word2)==0)
     $count2=$count2+1;
  if(strcasecmp($words[$i],$word3)==0)
     $count3=$count3+1;
}
*/
for($m=0;$m<$wordcount;$m++){
    if(strtolower($arr[$m])==strtolower($word1))
        $count1=$count1+1;
    if(strtolower($arr[$m])==strtolower($word2))
        $count2=$count2+1;
    if(strtolower($arr[$m])==strtolower($word3))
        $count3=$count3+1;
}
if($word1!="")
echo "The occurence of  '".$word1."' in the text is: ".$count1." times<br><br>";   
if($word2!="")
echo "The occurence of  '".$word2."' in the text is: ".$count2." times<br><br>";       
if($word3!="")
echo "The occurence of  '".$word3."' in the text is: ".$count3." times<br><br>";     
?>
</p>
</body>
</html>
