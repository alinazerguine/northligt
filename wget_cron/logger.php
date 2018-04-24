<?php
    $file = fopen("logs.dat", "a");
    fwrite($file, date("m.d.Y H:i:s") . "\n");
    fclose($file);

?>