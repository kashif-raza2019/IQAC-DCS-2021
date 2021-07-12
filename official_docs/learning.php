<?php

  session_start();

  print_r($_SERVER);

  echo "<br><Br><Br>";

  for($x=0; $x<count($_SERVER); $x++){
    echo $x."] ".$_SERVER[$x];
  }

?>
