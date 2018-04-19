<?
function power($val, $pow) {
    if ($pow<=1) {
        return $val;
    }
    else {
        $val *= power($val, $pow-1);
        return $val;
    }
    
}

echo (power(5,4));