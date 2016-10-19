<html>
<head>
<title>Hashing</title>	
</head>
<body bgcolor="Skyblue">
<center>
<form align="bottom" method="post" action="index.php">
<input type="submit" value= "Home">
</form>	
<?php
$value1 = $_POST['input'];	
echo "<b>After Performing SHA1 Hashing</b><br>";
echo "The original string: ".$value1."<br>";
echo "Raw 20 character binary format: ".sha1($value1, TRUE)."<br>";
echo " 40 character hex number: ".sha1($value1)."<br>";
?>
</center>
</body>
</html>	
