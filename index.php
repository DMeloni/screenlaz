<?php
    require_once('config.php');
    global $channelFile, $idsfile;
    $channelsId = json_decode(file_get_contents($channelFile), true);

?><!DOCTYPE html>
<html>
  <head>
    <title>Screenlaz : Les chaînes de la flemme</title>
    <meta charset="utf-8"/>  
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <meta name="description" content="">
    <meta name="author" content="DMeloni">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <link rel="apple-touch-icon" href="favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" href="favicon.ico">    
  </head>
  <body>
    <div id="logo-container">
        <a href="channels.php"><img alt="logo" id="logo" width="100" height="100" src="img/logo.svg" /></a>
    </div>
    <div class="clear" style="clear:both"></div>
  </body>
</html>