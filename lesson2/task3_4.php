<?
$arg1 = 21;
$arg2 = 10;
$op = "*";

mathOperation($arg1, $arg2, $op);

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case $operation=="+":
            echo ($arg1+$arg2);
            break;
        case $operation=="-":
            echo ($arg1 - $arg2);
            break;
        case $operation=="*":
            echo ($arg1 * $arg2);
            break;
        case $operation=="/":
            if ($arg2!=0) {
                echo ($arg1 / $arg2);
                break;
            }
            else {
                echo ("Ошибка! Деление на 0!");
                break;
            }
        default:
            echo ("неверная операция");
    }
}