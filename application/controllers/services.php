<?php
    require SITE_PATH . "/application/models/config_db.php";

    $access_token = "";
    $stream_status = "";

    //Retrieves access token from Twitch servers
    function get_token() {
        //Requests token data
        $token_curl = curl_init("https://id.twitch.tv/oauth2/token?client_id=dmcv458z2jghddjoeqk9cpnm8wjvki&client_secret=kudo5449d9b42am11g0wy9uerwlxq1&grant_type=client_credentials");
        
        curl_setopt($token_curl, CURLOPT_RETURNTRANSFER, true);
        
        curl_setopt($token_curl, CURLOPT_POST, true);
        
        $json_token = curl_exec($token_curl);
        
        curl_close($token_curl);

        //Takes requested JSON data and makes it accessible within PHP
        $token_data = json_decode($json_token, true);
        
        $token = $token_data["access_token"];

        return $token;
    }

    //Retrieves stream data from specified user ID
    function get_stream($token) {
        
        $status = "";
        
        //Requests stream data
        $stream_curl = curl_init("https://api.twitch.tv/helix/streams?user_id=54425578");
        
        curl_setopt($stream_curl, CURLOPT_HTTPHEADER, array(
            "Client-ID: dmcv458z2jghddjoeqk9cpnm8wjvki",
            "Authorization: Bearer $token"
        ));
        
        curl_setopt($stream_curl, CURLOPT_RETURNTRANSFER, true);
        
        $stream_data = curl_exec($stream_curl);
        
        curl_close($stream_curl);

        //Takes requested JSON data and makes it accessible within PHP
        $stream = json_decode($stream_data, true);
        
        if ($stream["data"] === null) {
            $status = "<img id='ttv' src='/application/views/components/TwitchOffline.jpg' />";
        } else {
            $status = "<img id='ttv' src='/application/views/components/TwitchLive.jpg' />";
        }

        return $status;
    }

    //Retrieves expiration date of current token from database
    $date_query = "SELECT endTime
                   FROM token
                   WHERE id = 1";
    
    $expQuery = $db->query($date_query);

    $expTime = $expQuery->fetch();

    $access_query = "SELECT access
                     FROM token
                     WHERE id = 1";

    $tokenQuery = $db->query($access_query);

    $current_token = $tokenQuery->fetch();

    $now = new DateTime();

    if ($now > $expTime) {
        
        $access_token = get_token();
        
        $current_time = $now->format("Y-m-d H:i:s");
        
        $newEXP = $now->modify("+1 month");

        $expiration = $newEXP->format("Y-m-d H:i:s");

        $update_query = "UPDATE token
                         SET access = $access_token
                             startTime = $current_time
                             endTime = $expiration
                         WHERE id = 1";

        $stream_status = get_stream($access_token);
    } else {
        $stream_status = get_stream($current_token);
    }
?>