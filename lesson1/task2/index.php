<?php
    $a = 5;
    $b = 33;
    echo ("<p>" . "a was: " . $a . " b was: " . $b . "</p>");
    
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    
    echo ("a now: " . $a . " b now: " . $b);
?>