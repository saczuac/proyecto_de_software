<?php

    if(!isset($_SESSION)) session_start();
    $file = "contador2.txt";
    // create the file if not exists
    if (!file_exists($file)) {
        $f = fopen($file, "w");
        fwrite($f,"0");
        fclose($f);
    }
    $f = fopen($file,"r");
    $counter = fread($f, filesize($file));
    fclose($f);
    if(!isset($_SESSION['hasVisited'])){
        //session_start();
        $_SESSION['hasVisited']="yes";
        $counter++;
        $f = fopen($file, "w");
        fwrite($f, $counter);
        fclose($f);
    }
    echo "You are visitor number $counter";
?>
