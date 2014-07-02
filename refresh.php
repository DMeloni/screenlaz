<?php
require_once('config.php');
require_once('fct/fct_rss.php');

global $channelFile, $idsfile, $cacheFolder;
$MAX_CHANNEL_VIDEO = 200;

$totalCensuredVideo =0;

$datas = scandir('data');

// Old channel datas suppression
foreach($datas as $data){
    $x = '';
    sscanf($data, 'ids_%d.json', $x);
    if(is_int($x) && $x >= 0){
        unlink(sprintf('data/ids_%s.json', $x));
    }
}
$channelsId = json_decode(file_get_contents($channelFile), true);
foreach($channelsId['channels'] as $channelId => $channelInfo){
    $ids = array();
    $totalDuration = 0;
    
    $nbAddedVideos =0;
    foreach($channelInfo['urls'] as $channelUrlId => $channelUrl){
        $startIndex = 1;
        do{
            $nbVideosIds = 0;
            $cache = sprintf('%s/%s_%s.json', $cacheFolder, $channelUrlId, $startIndex);
            $expire = time() - 36000 ; // valable dix heures
            $youtubeFeed = null;
            if(file_exists($cache) && (filemtime($cache) > $expire || $channelUrl['type'] === 'video')) {
                $youtubeFeed = file_get_contents($cache);
            }
            else {
                //https://gdata.youtube.com/feeds/api/users/%s/uploads
                $tentativeNb = 0;
                do{
                    if($channelUrl['type'] === 'user'){
                        $youtubeFeed = file_get_contents(sprintf($channelUrl['url'], $startIndex)); 
                    }else{
                        $youtubeFeed = file_get_contents(sprintf('http://gdata.youtube.com/feeds/api/videos/%s?v=2&alt=json&restriction=FR', $channelUrl['url'])); 
                    }
                    //sleep(5);
                    $tentativeNb++;
                }while($tentativeNb < 3 && empty($youtubeFeed));
                if(empty($youtubeFeed)){
                   continue 2;
                }
                file_put_contents($cache, $youtubeFeed) ; 
            }
            
            $matches = array();
            $newIds = array();
            if($youtubeFeed != false){
                $youtubeFeedJson = json_decode($youtubeFeed, true);
                
                $entries = array();
                if($channelUrl['type'] === 'user'){
                    $entries = $youtubeFeedJson['feed' ]['entry'];
                }
                if($channelUrl['type'] === 'video'){
                    $entries = array($youtubeFeedJson['entry']);
                }
                
                if($entries !== null){
 
                    $entries = array_reverse($entries);
                    if(isset($channelInfo['shuffle']) && $channelInfo['shuffle'] === true){
                        shuffle($entries);
                    }
                    foreach($entries as $entry){
                        //var_export($entry['app$control']['yt$state']);
                        //echo reset($entry['id']);
                        if((isset($entry['yt$hd']) || isset($channelInfo['no-hd'])) && 
                            !(isset($entry['app$control']['yt$state']['name']) && $entry['app$control']['yt$state']['name'] === 'restricted')
                        ){
                            $duration = $entry['media$group']['media$content'][0]['duration'];
                            if(isset($entry['gd$rating']["average"]) && $entry['gd$rating']["average"] > 2.5)
                            {
                                //echo $duration . '<br/>';
                                $maxDuration = 99999;
                                if(isset($channelInfo['max-duration'])){
                                    $maxDuration = $channelInfo['max-duration'];
                                }
                                if($channelInfo['min-duration'] <= $duration && $maxDuration >= $duration ){
                                    $firstId = reset($entry['id']);
                                    $id = substr($firstId, -11);
                                    $newIds[md5($id)] = array('id' => $id, 'duration' => $duration, 'starttime' => $totalDuration, 'stoptime' => $totalDuration + $duration);
                                    $nbAddedVideos ++;
                                    $totalDuration += $duration;
                                   // var_export($newIds[md5($id)] );
                                }
                            }
                        }else{
                            //echo $entry['app$control']['yt$state']['name'];
                            $totalCensuredVideo ++;
                            //echo "censured : $id ";
                        }
                        $nbVideosIds ++;
                    }
                }
            }
            $ids = array_merge($ids, $newIds);
            
            $startIndex += $nbVideosIds;
        }while($nbVideosIds >= 50 && $nbAddedVideos <= $MAX_CHANNEL_VIDEO  && $startIndex <= 500);
    }
    echo $channelInfo['name'] . ' : ' . $nbAddedVideos . '<br/>';
    if($nbAddedVideos > 0){
        // Suppression des doublons
        //$ids = array_unique($ids);
        //var_export($ids);

        file_put_contents(sprintf($idsfile, $channelId), json_encode($ids));
        
        echo "total duration = $totalDuration";        
    }
    
    echo "total censured video : $totalCensuredVideo";
    //var_export($ids);
}








