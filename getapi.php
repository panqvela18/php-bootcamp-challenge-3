<?php include_once "./connect.php" ?>
<?php
$Api_Url='http://hp-api.herokuapp.com/api/characters';
$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_URL, $Api_Url);

$resultphp = curl_exec($ch);
$resourse = json_decode($resultphp, true);

curl_close($ch);
 ?>