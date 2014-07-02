<?php
if(isset($_GET['channel']) && (int)$_GET['channel'] >= 0 ){
    require_once('config.php');    
    global $idsfile;
    $channel =  (int)$_GET['channel'];
    if(!is_file(sprintf($idsfile, $channel))){
        header('Location: index.php');
        return;
    }
}else{
    header('Location: index.php');
    return;
}  
?><!DOCTYPE html>
<html>
  <head>
    <title>Screenlaz : Les chaînes de la flemme</title>
    <meta charset="utf-8"/>  
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <meta name="author" content="DMeloni">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <link rel="apple-touch-icon" href="favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" href="favicon.ico">       
  </head>
  <body>
    <h1><a href="channels.php">Screenlaz</a></h1>
    <h2>Les chaînes de la flemme</h2>
  
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
        <div class="wrapper">
		    <div class="h_iframe">
			<!-- a transparent image is preferable -->
			<img class="ratio" src="css/transparent.png"/>
			<div id="player"></div>
		    </div>	
	    </div>	
          
    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var actualCall = null;
      getCurrentVideoId();
      var autoplay = 1;
      var playerLoaded = false;
      var tag = null;
      var firstScriptTag = null;

    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
         if (document.cookie.indexOf("iphone_redirect=false") == -1) {
            autoplay = 0;
         }
    }
    console.log(autoplay);
      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      
      function onYouTubeIframeAPIReady() {
                
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: actualCall.id, 
          playerVars: { 'autoplay': autoplay, "iv_load_policy":3, "start":0,"controls":1, 'rel':0, 'showinfo':0, 'wmode':'transparent'}, 

          //playerVars: 
          //{
          //listType:'playlist',
          //list: 'PLKjQVxra_-3IO6AkgqCwJ2v1eu-700TAE'
          //},
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }


    
      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        //player.loadVideoById(actualCall.id, actualCall.starttime);
      }

    var shuffleFlag = false;
    
      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
      
        if (event.data == YT.PlayerState.PLAYING && !shuffleFlag) {
            //player.seekTo(<?php echo $playVideoAt;?>);
            shuffleFlag = true;
        }
        console.log(event);
        if(event.data === 0){
            // the video is end, do something here.
            getCurrentVideoId(0);
        }

        player.setPlaybackQuality('highres');
        
        // if (event.data == YT.PlayerState.PLAYING && !done) {
        //   setTimeout(stopVideo, 6000);
        //   done = true;
        // }
      }
      function stopVideo() {
        player.stopVideo();
      }
      function startVideo() {
        player.startVideo();
      }      
      
    var ios = false
    function getCurrentVideoId(starttime)
    {
       var data_file = "actual.php?channel=<?php echo $_GET['channel'];?>";
       var http_request = new XMLHttpRequest();
       try{
          // Opera 8.0+, Firefox, Chrome, Safari
          http_request = new XMLHttpRequest();
       }catch (e){
          // Internet Explorer Browsers
          try{
             http_request = new ActiveXObject("Msxml2.XMLHTTP");
          }catch (e) {
             try{
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
             }catch (e){
                // Something went wrong
                console.log("Your browser broke!");
                return false;
             }
          }
       }
       http_request.onreadystatechange  = function(){
          if (http_request.readyState == 4  )
          {
            // Javascript function JSON.parse to parse JSON data
            var jsonObj = JSON.parse(http_request.responseText);
            actualCall = jsonObj;
            if(playerLoaded==false){
              tag = document.createElement('script');
              tag.src = "https://www.youtube.com/iframe_api";
              firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
              playerLoaded = true;
            }
            
            if(starttime==0){
                console.log('retour a zero !');
                player.loadVideoById(actualCall.id, 0);
            }
          }
       }
       http_request.open("GET", data_file, true);
       http_request.send();
    }      
    </script>
    
    <footer>
            <a href="cgu" title="Ce site web n'héberge AUCUNE vidéo">Conditions générales d'utilisation</a>
            <span class="separator"> - </span>
            <form name="_xclick" action="https://www.paypal.com/fr/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="gift@screenlaz.fr">
                <input type="hidden" name="item_name" value="Screenlaz">
                <input type="hidden" name="currency_code" value="EUR">
                <a title="Entre 10 centimes et 1 million d'euros acceptés"  href="javascript:document.forms[0].submit()">Faire un don Paypal pour remercier l'auteur</a>
            </form>
            <span class="separator"> - </span>
            <a href="mailto:contrib@screenlaz.fr" title="Proposer une chaine, vidéo, idée ou juste dire bonjour">Contribuer au site</a>
            <span class="separator"> - </span>
            <a href="credits" title="Les contributeurs directs et indirects">Crédits</a>
    </footer>        
  </body>
</html>