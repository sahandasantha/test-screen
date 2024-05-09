<?php

$current_version = "2.2";
$version = $_POST["version"];

if($ID !=="")
{
  if($ID == $current_version)
  {
    echo "true";
  }
  else
  {
    echi "false";
  }
}

?>
