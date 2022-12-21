<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    $method = 'GET';
    $url = "https://api.steampowered.com/ISteamApps/GetAppList/v2";
    function alpha(Array $data, $url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_POST, true);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
    }
    ?>
  </body>
</html>