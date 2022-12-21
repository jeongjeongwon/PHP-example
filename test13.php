<?php
$url = "https://api.steampowered.com/ISteamApps/GetAppList/v2";
$data = array('Key1' => 'value1', 'Key2' => 'value2');

$option = array(
  'https' => array(
    'header' => "content-type: application/x-www-form-urlencoded\r\n",
    'method' => 'POST',
    'content' => http_build_query($data)
  )
);

$content = stream_context_create($option);
$result = file_get_contents($url, false, $content);
$data = json_decode($result, true);
?>