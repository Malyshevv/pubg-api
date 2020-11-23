<?php

class pubgAPI {

    public function curlSend($data)  {
        $api = "YOUR API KEY";
        $curl_header = array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$api,
            'Accept: application/vnd.api+json'
        );
        $initCurl = curl_init($data);
        curl_setopt($initCurl, CURLOPT_HTTPHEADER, $curl_header);
        curl_setopt($initCurl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($initCurl);
        curl_close($initCurl);

        return $result;
        
    }

    public function getPlayerData($platform,$nickname) {
        $data = "https://api.pubg.com/shards/$platform/players?filter[playerNames]=$nickname";
        $result = $this->curlSend($data);
        return $result;
        
    }

    public function getLifeTimeStats($platform,$accountID) {
        $data = "https://api.pubg.com/shards/$platform/players/$accountID/seasons/lifetime";
        $result = $this->curlSend($data);
        return $result;
    }

    public function getSeasonsAll() {
        $data = "https://api.pubg.com/shards/psn/seasons";
        $result = $this->curlSend($data);
        return $result;
    }

    public function getRankedStats($accountID,$SeasonsID) {
        $data = "https://api.pubg.com/shards/psn/players/$accountID/seasons/$SeasonsID/ranked";
        $result = $this->curlSend($data);
        return $result;
    }
}
?>