<?php

$req = $_POST["req"];
$datei = fopen("analystics.csv", "r");

if ($req === 'dataRequest') {
  $file = fopen("analystics.csv", "r") or die("Unable to open file!");
  $content = [];

  while (!feof($file)) {
    $content[] = fgets($file);
  }

  echo json_encode($content);
}

?>
