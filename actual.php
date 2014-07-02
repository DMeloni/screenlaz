<?php
    if(isset($_GET['channel']) && (int)$_GET['channel'] >= 0){
        require_once('config.php');
        $channel = (int)$_GET['channel'];
        global $idsfile;
        $ids = json_decode(file_get_contents(sprintf($idsfile, $channel)), true);
        
        $actualTimeStamp = time();
        $lastVideo = end($ids);
        $totalDuration = $lastVideo['stoptime'];
        //$actualTimeStamp = '1375536530';
        //$actualTimeStamp = 1375363445;
        
        
        $startTime = $actualTimeStamp % $totalDuration;
        
        //echo 'startTime : ' . $startTime;
        $tvIds = array();
        $i = 0;
        $playVideoAt = 0;
        foreach($ids as $id){
            if($id['starttime'] >= $startTime ) {
                if($i == 0){
                    $tvIds[] = $currentVideo['id']; // Add current video to list
                    $playVideoAt = $startTime - $currentVideo['starttime'];
                    echo json_encode(array('id' => $currentVideo['id'], 'starttime' => $playVideoAt));
                    return;
                }
                $tvIds[] = $id['id']; // Add next videos to list
                $i++;
                if($i >= 50){
                    break;
                }
            }
            $currentVideo = $id;        
        }
        if(empty($tvIds)){
            $tvIds[] = $currentVideo['id']; // Add current video to list
            $playVideoAt = $startTime - $currentVideo['starttime'];
            echo json_encode(array('id' => $currentVideo['id'], 'starttime' => $playVideoAt));
            return;            
        }
    }
