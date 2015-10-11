<?php

$myFile = "maps/".$_POST['map_name'];
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, $_POST['map_data']);
fclose($fh);
header("Location: index.php");