<?php
    echo("Welcome to the world's best calculator!\n");
    $handle = fopen("php://stdin", "r");
    $line = fgets($handle);
    if(trim($line) == "+") {
        echo("Addition. Provide integers\n");
        
    }
    if(trim($line) == "-"){
        
    }
    if(trim($line) == "*"){
        
    }
    if(trim($line) == "//"){
        
    }
?>