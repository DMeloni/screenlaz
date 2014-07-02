<?php

$channels = 
        array(
            'channels' => array(
            array(
                'name' => 'Fort Boyard', 
                'urls' => array(
                                    'aymericabc691' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/aymericabc691/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Rediffusion d'anciens épisodes de fort Boyard",
                'min-duration' => '600', // All video > 20 minutes
                'categories' => array('divertissement', 'emission')
                ),   
            array(
                'name' => 'Le Zapping de Spion', 
                'logo' => 'machin.jpg', 
                'urls' => array('LeZappingSpi0n' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/LeZappingSpi0n/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Le zapping de spion',
                'background-color' => '#F0F0F0',
                'background-color-hover' => '#3e95f4',   
                'categories' => array('zapping')
                ),                
            array(
                'name' => "Simon's cat", 
                'logo' => 'machin.jpg', 
                'urls' => array('simonscat' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/simonscat/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Les vidéos du chat le plus célèbre du web',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('cat', 'babies')
                ),   
            array(
                'name' => "Le Joueur du grenier", 
                'logo' => 'machin.jpg', 
                'urls' => array('joueurdugrenier' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/joueurdugrenier/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Replongez dans les années rétro avec le joueur du grenier',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('retrogaming')
                ), 
            array(
                'name' => "Rémi Gaillard", 
                'logo' => 'machin.jpg', 
                'urls' => array('nqtv' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/nqtv/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Vivez une imposture de Rémi Gaillard',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('divertissement')
                ), 
            array(
                'name' => "Cyprien", 
                'logo' => 'machin.jpg', 
                'urls' => array('MonsieurDream' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/MonsieurDream/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Cyprien nous fait MisterDream',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('podcast')
                ),    
            array(
                'name' => "Golden Moustache", 
                'urls' => array('GoldenMoustacheVideo' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/GoldenMoustacheVideo/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Ne dégage que 137 kg de CO2 par vidéo',
                'shuffle' => true,
                'categories' => array('podcast')
                ), 
            array(
                'name' => "La ferme jerome", 
                'logo' => 'machin.jpg', 
                'urls' => array('Iafermejerome' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/Iafermejerome/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Visionnez La ferme jerome',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('podcast')
                ),                  
            array(
                'name' => "Mr Antoine Daniel", 
                'urls' => array('MrAntoineDaniel' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/MrAntoineDaniel/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => '',
                'shuffle' => true,
                'categories' => array('podcast')
                ),                 
            array(
                'name' => "Mister V", 
                'logo' => 'machin.jpg', 
                'urls' => array('mistervofficial' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/mistervofficial/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Visionnez Mister V',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('podcast')
                ),  
            array(
                'name' => "Norman fait des vidéos", 
                'logo' => 'machin.jpg', 
                'urls' => array('NormanFaitDesVideos' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/NormanFaitDesVideos/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'On ne présente plus Norman',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('podcast')
                ),    
            array(
                'name' => "Nec0wan", 
                'logo' => 'machin.jpg', 
                'urls' => array('Nec0wan' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/Nec0wan/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Selection des vidéos de chats les plus droles',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('cat')
                ), 
            array( 
                'name' => "3615 Usul", 
                'logo' => 'machin.jpg', 
                'urls' => array('usulmasta' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/usulmasta/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user'),
                                'unulplay' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/unulplay/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => 'Philosophez sur les jeux vidéos avec Usul',
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true,
                'categories' => array('retrogaming')
                ),  
            array( 
                'name' => "88mph", 
                'logo' => 'machin.jpg', 
                'urls' => array('RealMyop' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/RealMyop/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user'),
                                ), 
                'description' => 'Toujours plus de Speedrun et Tool Assisted Speedrun commentés',
                'shuffle' => true,
                'categories' => array('speedrun')
                ),      
            array( 
                'name' => "Arc", 
                'logo' => 'machin.jpg', 
                'urls' => array('Arc111111' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/Arc111111/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user'),
                                ), 
                'description' => 'Nintendo et Retrogaming, c\'est par ici !',
                'shuffle' => true,
                'categories' => array('speedrun')
                ),                
             array(
                'name' => 'Spyro le Dragon', 
                'logo' => 'machin.jpg', 
                'urls' => array('spyroledragon' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/spyroledragon/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Les chroniques de Spyro le Dragon",
                'background-color' => '#7cf881',
                'background-color-hover' => '#29f330',  
                'shuffle' => true, 
                'categories' => array('videogame')
                ),  
             array(
                'name' => 'Ken Bogard', 
                'urls' => array('Puyo432343' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/Puyo432343/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Commentateur de jeux de combat francophone",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),                  
             array(
                'name' => 'Pomf Et Thud', 
                'urls' => array('PomfEtThud' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/PomfEtThud/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Commentateurs de Starcraft 2",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),       
             array(
                'name' => 'Chips Et Noi',
                'urls' => array('ChipsEtNoi' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/ChipsEtNoi/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Commentateurs de Leagues Of Legend",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),    
             array(
                'name' => 'WartekGaming',
                'urls' => array('ChipsEtNoi' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/WaRTeKGaminG/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Si tu aime le sniper et Call of Duty, cette chaîne est faite pour toi !",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),    
             array(
                'name' => 'Diabl0x9',
                'urls' => array('ChipsEtNoi' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/Diabl0x9/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "La chaîne francophone n°1 des vidéos commentées de jeux-vidéos !",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),    
             array(
                'name' => 'TheFantasio974',
                'urls' => array('TheFantasio974' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/TheFantasio974/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "LA chaîne française dédiée à Minecraft !",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),                    
             array(
                'name' => 'TheFantasio974',
                'urls' => array('TheFantasio974' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/TheFantasio974/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "LA chaîne française dédiée à Minecraft !",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),
             array(
                'name' => 'DiGiDiX',
                'urls' => array('DiGiDiX' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/DiGiDiX/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Digidix commente des partie de Battlefield",
                'shuffle' => true, 
                'categories' => array('videogame')
                ),   
            array(
                'name' => 'ZapsterFrance',
                'urls' => array('ZapsterFrance' => array('url'=> 'http://gdata.youtube.com/feeds/api/users/ZapsterFrance/uploads?alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user') 
                                ), 
                'description' => "Un autre zappeur",
                'shuffle' => true, 
                'min-duration' => '360',
                'max-duration' => '480',
                'categories' => array('zapping')
                ),                      
                
             array(
                'name' => 'Doc animaliers', 
                'urls' => array(
                    'upRLewBOXVQ' => array('url'=> 'upRLewBOXVQ', 'type' => 'video'),
                    'KinKgDtIqYg' => array('url'=> 'KinKgDtIqYg', 'type' => 'video'),
                    'rqbnLr-9v_k' => array('url'=> 'rqbnLr-9v_k', 'type' => 'video'),
                    'VT3Quklsk3o' => array('url'=> 'VT3Quklsk3o', 'type' => 'video'),
                    'LNRNDyopqRs' => array('url'=> 'LNRNDyopqRs', 'type' => 'video'),
                    'c9t344H35xQ' => array('url'=> 'c9t344H35xQ', 'type' => 'video'),
                    'sPrxu0AEFSA' => array('url'=> 'sPrxu0AEFSA', 'type' => 'video'),
                    'd6LB2_GsZCg' => array('url'=> 'FkQKxk7A88U', 'type' => 'video'),
                                ), 
                'description' => "Une programmation à s'en lécher les babines!",
                'shuffle' => true, 
                'min-duration' => 600,
                'categories' => array('animaux')
                ),                 
              array(
                'name' => 'L\'aventure de la vie', 
                'urls' => array(
                        '4iad2ESkeBU' => array('url'=> '4iad2ESkeBU', 'type' => 'video'),
                        'Fxmp7i3zTe4' => array('url'=> 'Fxmp7i3zTe4', 'type' => 'video'),
                        '6cE7doMBDBM' => array('url'=> '6cE7doMBDBM', 'type' => 'video'),
                        'nJ7-zBEAPr4' => array('url'=> 'nJ7-zBEAPr4', 'type' => 'video'),
                        'R0N8pSsDDi4' => array('url'=> 'R0N8pSsDDi4', 'type' => 'video'),
                        '38wT8rmKvmQ' => array('url'=> '38wT8rmKvmQ', 'type' => 'video'),
                        'zFXJfr-0e_Q' => array('url'=> 'zFXJfr-0e_Q', 'type' => 'video'),
                        'XTy8zlfyuVs' => array('url'=> 'XTy8zlfyuVs', 'type' => 'video'),
                        ),
                'description' => "L'aventure de la vie",
                'shuffle' => true,
                'min-duration' => '600', // All video > 20 minutes
                'categories' => array('animaux'),
                'no-hd' => true
                ),      
              array(
                'name' => 'Films', 
                'urls' => array(
                        'films' => array('url'=> 'https://gdata.youtube.com/feeds/api/videos?q=Films+entier&alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user'),
                        'films' => array('url'=> 'https://gdata.youtube.com/feeds/api/videos?q=Films+complets&alt=json&max-results=50&restriction=FR&start-index=%s', 'type' => 'user'),
                        ),
                'description' => "Films gratuits",
                'shuffle' => true,
                'min-duration' => '3600', // All video > 20 minutes
                'categories' => array('films'),
                //'no-hd' => true
                ),                   
           ),
     
        'categories' => array(
                      'retrogaming' => array('name' => 'Rétro Gaming', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/retrogaming.svg',
                      'minicon' => 'img/mini_retrogaming.svg'                   
                      ),
                      'podcast' => array('name' => 'Web-Humour', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/web_humour.svg',
                      'minicon' => 'img/mini_web_humour.svg'                 
                      ),
                      'shaarli' => array('name' => 'Shaarlo', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/shaarlo.svg',
                      'minicon' => 'img/shaarlo.svg'
                        ),                      
                      'cat' => array('name' => '♥ Chats', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/chat.svg',
                      'minicon' => 'img/mini_chat.svg'                  
                      ),
                      'videogame' => array('name' => 'Jeux vidéos', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/jeux_video.svg',
                      'minicon' => 'img/mini_jeux_video.svg'
                      ),
                      'speedrun' => array('name' => 'Speedrun', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/speed_run.svg',
                      'minicon' => 'img/mini_speed_run.svg'
                      ),
                      'animaux' => array('name' => 'Reportages animaliers', 'background-color' => '#7cf881', 'background-color-hover' => '#29f330',  
                      'icon' => 'img/reportage_animalier.svg',
                      'minicon' => 'img/mini_reportage_animalier.svg'                      
                      ),
                  
                      'zapping' => array('name' => 'Zapping',  
                      'icon' => 'img/zapping.svg',
                      'minicon' => 'img/mini_zapping.svg'                      
                      ),          
                      'films' => array('name' => 'Films',  
                      'icon' => 'img/cinema.svg',
                      'minicon' => 'img/mini_cinema.svg',
                      'min-duration' => '3600',
                      ),                         
                       
            )
        );




// create request
$options = array(
  'http' => array(
    'method' => "GET",
    'header' => "Accept-language: fr\r\n" .
              "User-Agent: screenlaz\r\n"
  )
);

$context = stream_context_create($options);

//Shaarli 

$shaarliChannel = array(
    'name' => 'Shaarli.fr', 
    'urls' => array(), 
    'description' => "Les videos des shaarlistes !",
    'background-color' => '#7cf881',
    'background-color-hover' => '#29f330',  
    'shuffle' => true,
    'min-duration' => '0', // All video > 20 minutes
    'categories' => array('shaarli', 'vrac')
    );
                
$shaarliRss = file_get_contents('http://shaarli.fr/index.php?q=youtube&do=rss', false, $context);
if( !empty($shaarliRss) ) {
	// parse xml feed
    $xml = @simplexml_load_string($shaarliRss);
    if( !empty($xml )) {
    	// search youtube videos
        foreach ($xml->channel->item as $item) {
        	if( isset($item->link)
        		&& preg_match('/(http(s)\:\/\/|)www.youtube.(com|fr)\//', $item->link) ) {
        		$query_string = parse_url($item->link, PHP_URL_QUERY); // v=Zu4WXiPRek
    			$query_string_parsed = array();
    			parse_str($query_string, $query_string_parsed); // an array with all GET params
    			if(!empty($query_string_parsed["v"])){
                    $shaarliChannel['urls'][$query_string_parsed["v"]] = array('url' => $query_string_parsed["v"], 'type' => 'video');
    			}
            }
        }
    }
} 
 
$channels['channels'] = array_merge(array($shaarliChannel), $channels['channels']);

$channelsMaster = array();
foreach($channels['categories'] as $categorieId => $categorie){
    foreach($channels['channels'] as $channel){
        if(in_array($categorieId, $channel['categories'] )){
            if(!isset($channelsMaster['channels'][$categorieId])){
                $channelsMaster['channels'][$categorieId] = 
                    array('shuffle' => true, 
                        'categories' => array($categorieId), 
                        'name' => $categorie['name'], 
                        'background-color' => $categorie['background-color'], 
                        'background-color-hover' => $categorie['background-color-hover'], 
                        //'no-hd'=>true,
                        'min-duration' => '0', // All video > 20 minutes
                        'max-duration' => '99999', // All video > 20 minutes
                        'urls' => array(), 'master' => true);   
            }
            if(isset($channel['min-duration'])){
                $channelsMaster['channels'][$categorieId]['min-duration'] = min($channelsMaster['channels'][$categorieId]['min-duration'], $channel['min-duration']);
            }
            if(isset($channel['max-duration'])){
                $channelsMaster['channels'][$categorieId]['max-duration'] = max($channelsMaster['channels'][$categorieId]['max-duration'], $channel['max-duration']);
            }            
            $channelsMaster['channels'][$categorieId]['urls'] = array_merge($channelsMaster['channels'][$categorieId]['urls'], $channel['urls']);
        }
    }
}

//var_export($shaarliChannel);
$channels['channels'] = array_merge(array_values($channelsMaster['channels']), $channels['channels']);
file_put_contents('data/channel.json', json_encode($channels));

echo json_encode($channels);
