<?php
    echo("Welcome to the world's best calculator!\n");
    $handle = fopen("php://stdin", "r");
    $line = fgets($handle);
    if(trim($line) == "+") {
        echo("Addition. Provide integers\n");
        $int_1 = fgets($handle);
        echo("+\n");
        $int_2 = fgets($handle);
        $added = $int_1 + $int_2;
        echo('=' . $added."\n");
    }
    elseif (trim($line) == "-") {
        echo("Subtraction. Provide integers\n");
        $int_1 = fgets($handle);
        echo("-\n");
        $int_2 = fgets($handle);
        $subtraction = $int_1 - $int_2;
        echo('=' . $subtraction."\n");
    }
    elseif (trim($line) == "*") {
        echo("Multiplication. Provide integers\n");
        $int_1 = fgets($handle);
        echo("*\n");
        $int_2 = fgets($handle);
        $multipled = $int_1 * $int_2;
        echo('=' . $multipled ."\n");
    }
    elseif (trim($line) == "/"){
        echo("Division. Provide integers\n");
        $int_1 = fgets($handle);
        echo("/\n");
        $int_2 = fgets($handle);
        $multipled = $int_1 / $int_2;
        echo('=' . $multipled ."\n");
    }
    else{
        echo("Ed Voice: What, are you doing!\n");
    }
?>