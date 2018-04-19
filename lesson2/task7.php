<?
date_default_timezone_set('Asia/Baku');
$hours = date("H");
$minutes = date("i");
$seconds = date("s");

function recognizeSuff($t){
    if (($t==0) || ($t%10==0) || ($t>=5 && $t<=14) || ($t%10>=5 && $t%10<=9)) {
        return 1;
    }
    elseif ($t==1 || $t%10==1){
        return 2;
    }
    else {
        return 3;
    }
}

switch (recognizeSuff((int)$hours)) {
    case 1:
        $sufh = "часов";
        break;
    case 2:
        $sufh = "час";
        break;
    default:
        $sufh = "часа";
}

switch (recognizeSuff((int)$minutes)) {
    case 1:
        $sufm = "минут";
        break;
    case 2:
        $sufm = "минута";
        break;
    default:
        $sufm = "минуты";
}

switch (recognizeSuff((int)$seconds)) {
    case 1:
        $sufs = "секунд";
        break;
    case 2:
        $sufs = "секунда";
        break;
    default:
        $sufs = "секунды";
}
echo ("Текущее время: " . $hours . " " . $sufh . ", " . $minutes . " " . $sufm . ", " . $seconds . " " . $sufs);