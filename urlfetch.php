<?php
echo sprintf('<html><body bgcolor="Skyblue"><form align="bottom" method="post" action="index.php">
<input type="submit" value= "Home">
</form></body></html>');
$data = ['data' => 'this', 'data2' => 'that'];
$data = http_build_query($data);
$context = [
  'http' => [
    'method' => 'GET',
    'header' => "custom-header: custom-value\r\n" .
                "custom-header-two: custom-value-2\r\n",
    'content' => $data
   
  ]
];
$context = stream_context_create($context);
$result = file_get_contents('http://linen-mason-125117.appspot.com', false);
print_r($result);
?>
