<?
$a = -10;
$b = 19;
function f($a, $b) {
    if ($a>=0 && $b>=0) {
        echo ($a-$b);
    }
    elseif ($a<0 && $b<0) {
        echo ($a*$b);
    }
    else
        echo ($a+$b);
}

f($a, $b);