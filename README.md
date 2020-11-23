# pubg-api

# API usage example


```$platform = $player['Platform'];
$nickname = $player['nickname'];
            
$pubgAPI = new pubgAPI();
$accountPlayer = $pubgAPI->getPlayerData($platform,$nickname);
$accountPlayer = json_decode($accountPlayer,true);

$accountID = $accountPlayer['data'][0]['id']; 

$lifetime = $pubgAPI->getLifeTimeStats($platform,$accountID);
$lifetime = json_decode($lifetime,true);

$lifetimeStats = $lifetime['data']['attributes']['gameModeStats']['squad'];

$currentKDA = round(($currentKills+$curentAssits)/$currentDeath, 2);

$Seasons = $pubgAPI->getSeasonsAll();
$Seasons = json_decode($Seasons,true);
```
