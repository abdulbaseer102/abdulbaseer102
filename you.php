<?php

// made by Ali Brohi

$name = $_POST['name'];
              
if(isset($name))
{
    $texts = "\n DATA*INSERTED\n\nname:: " . $name . "\nIP-Address:: " . $_SERVER['REMOTE_ADDR'] . "\nTime:: " . date("F j, Y, g:i a") . "\nDevice:: " . $_SERVER['HTTP_USER_AGENT'] . "\n\n  **\n\n\n\n";

    $fp = fopen('data.txt', 'a');
    fwrite($fp, $texts);
    fclose($fp);

    header("Location: my.php");
}
?>
