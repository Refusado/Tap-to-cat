<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tap to Cat</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      user-select: none;
    }
    body {
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    img {
      max-width: 100vw;
      max-height: 100vh;
    }
    a {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      cursor: default;
    }
    .disclaimer {
      display: none;
    }
  </style>
</head>
<body>
<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, [
    CURLOPT_URL             => "https://api.thecatapi.com/v1/images/search",
    CURLOPT_CUSTOMREQUEST   => "GET",
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_SSL_VERIFYPEER  => true,
  ]);
  
  $img = json_decode(curl_exec($curl))[0]->url;
  curl_close($curl);

  echo "<img src='$img'>";
?>
<a href="./"></a>
</body>
</html>