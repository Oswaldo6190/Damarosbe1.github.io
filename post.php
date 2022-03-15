<?php

 if(isset($_POST['smbt']))
 {
  $username = $_POST['name'];
  $password = $_POST['email'];
  $password = $_POST['message'];
  $text = $username . "," . $password . "," "\n";
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';

    }
fclose ($fp);    
}
?>

