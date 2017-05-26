 <?php
$ip1 = "127.0.0.1";
$up1 = @fsockopen("$ip1", 80, $errno, $errstr, 30);  
if($up1){  
   echo '<b><font color="green">Online</font></b>';  
}else{
   echo '<b><font color="red">Offline</font></b>'; 
}
?> 
