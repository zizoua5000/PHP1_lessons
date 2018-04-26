
<?
$arr = [
    "Ленинградская область" => [
        "Санкт-Петербург",
        "Всеволожск",
        "Павловск, Кронштадт",        
    ],
    "Московская область" => [
        "Москва",
        "Зеленоград",
        "Клин",
    ]
];

foreach ($arr as $key => $values) {
    echo($key . ":<br>");
    $c = count($values)-1;
    foreach ($values as $inValues) {
        if ($inValues != $values[$c]) {
            echo($inValues . ", ");
        }
        else{
            echo($inValues . "<br>");
        }
    }

}



    
