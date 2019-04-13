#Created by Aril Dewantara
<?php
system("clear");
echo "Coded by arild312\n\n";
echo "[01] Start\n";
echo "[02] Exit\r\n\n";
echo "[*] Enter choice: ";
$choice = $a = fopen ("php://stdin","r");
$choices = fgets($choice);
if(trim($choices) == '1'){
include 'run.php';
}
else{
echo "Bye\n";
}
?>