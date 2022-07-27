<?php
    $filename=basename($_SERVER['SCRIPT_FILENAME']);
    echo $filename." data/hora: ".date ("F d Y H:i:s.", filemtime($filename));
?>	