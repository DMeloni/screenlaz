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
    <div id="content">
        <h1><a href="channels.php">Screenlaz</a></h1>
        <h2>Les chaînes de la flemme</h2>
        <div id="channels">
            <?php
                require_once('config.php');
                global $channelFile;
                $channelsId = json_decode(file_get_contents($channelFile), true);
                $nbCategories = 0;
                foreach($channelsId['categories'] as $categorieId => $categorieInfo){
                    if((isset($_GET['category']) && $_GET['category'] === $categorieId) || (!isset($_GET['category']) || !array_key_exists($_GET['category'], $channelsId['categories']))){
                        $nbChannelsOnCategory = 0;
                        foreach($channelsId['channels'] as $channelId => $channelInfo){
                           
                            if(isset($channelInfo['categories'])){
                                
                                foreach($channelInfo['categories'] as $channelCategorie){
                                    if($channelCategorie === $categorieId){
                                        if(is_file(sprintf($idsfile, $channelId))){
                                            
                                            if($nbChannelsOnCategory === 0){
                                            ?><div class="channel" >
                                                <a class="channel-container" href="./<?php echo $channelId;?>">
                                                    <div class="icon" title="<?php echo $channelInfo['description']; ?>">
                                                        <img width="100" height="100" class="vignette" src="<?php echo $categorieInfo['icon']?>" alt="" />
                                                    </div>
                                                    <span class="channel-name"><?php echo $channelInfo['name'];?> </span>
                                                </a>
                                                <?php
                                                
                                                $nbChannelsOnCategory++;
                                                if(!array_key_exists($_GET['category'], $channelsId['categories']) && $nbChannelsOnCategory === 1)
                                                {
                                                    
                                                    ?><a class="plus" title="Plus de vidéos" href="./category/<?php echo $categorieId;?>">+</a>
                                                    </div>
                                                    <?php
                                                    if($nbCategories >= 4){
                                                        $nbCategories = 0;
                                                        ?><br class="separator"/><?php
                                                    }?>                                               
                                                    
                                                    <?php                           
                                                    break 2;
                                                }
                                                ?>
                                                </div>
                                                
                                                <?php
                                            }else{
                                                
                                                if($nbChannelsOnCategory === 1){
                                                    ?><br/><?php
                                                }
                                            ?><div class="minichannel" >
                                                <a class="channel-container" href="./<?php echo $channelId;?>">
                                                    <span class="minicon" title="<?php echo $channelInfo['description']; ?>">
                                                        <img width="100" height="100" class="vignette" src="<?php echo $categorieInfo['minicon']?>" alt=""/>
                                                    </span>
                                                    <span class="channel-name"><?php echo $channelInfo['name'];?> </span>
                                                </a>
                                                </div><?php
                                                $nbChannelsOnCategory ++;
                                            }
                                        }
                                    }
                                }
                            }
                        }  
                    }

                    $nbCategories++;
                }
            ?>
        </div>
    </div>
    <div class="clear" style="clear:both"></div>
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