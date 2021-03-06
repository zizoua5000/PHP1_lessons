<?
$newStr = "";
$alphabet = [
"А" => "А",	
"Б" => "B",	
"В" => "V",	
"Г" => "G",	
"Д" => "D",	
"Е" => "YE",	
"Ё" => "YO",	
"Ж" => "ZH",	
"З" => "Z",
"И" => "EE",
"Й" => "Y",	
"К" => "K",
"Л" => "L",
"М" => "M",
"Н" => "N",
"О" => "O",
"П" => "P",
"Р" =>	"R",
"С" =>	"S",
"Т" =>	"T",
"У" =>	"U",
"Ф" =>	"F",
"Х" =>	"KH",
"Ц" =>	"TS",
"Ч" =>	"CH",
"Ш" =>	"SH",
"Щ" =>	"SH",
"Ъ" =>	"*",
"Ы" =>	"I",
"Ь" =>	"'",
"Э" =>	"E",
"Ю" =>	"YU",
"Я" =>	"YA",
"а"	=> "а",	
"б"	=> "b",	
"в"	=> "v",	
"г"	=> "g",	
"д"	=> "d",	
"е"	=> "ye",
"ё"	=> "yo",
"ж"	=> "zh",	
"з"	=> "z",
"и"	=> "ee",
"й"	=> "y",
"к"	=> "k",
"л"	=> "l",
"м"	=> "m",
"н"	=> "n",
"о"	 => "o",
"п"	=> "p",
"р"	=> "r",
"с"	=> "s",
"т"	=> "t",
"у"	=> "u",
"ф"	=> "f",
"х"	=> "kh",
"ц"	=> "ts",
"ч"	=> "ch",
"ш"	=> "sh",
"щ"	=> "sh",
"ъ"	=> "*",
"ы"	=> "i",
"ь"	=> "'",
"э"	=> "e",
"ю"	=> "yu",
"я"	=> "ya",
];


function translit($str, $alphabet){
    $newStr = "";
    $str1 = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
        
    foreach ($str1 as $symbol) {
        if (array_key_exists($symbol, $alphabet)) {
            $newStr .= $alphabet[$symbol];
        }
        else {
            $newStr .= $symbol;
        }
    }
    echo($newStr);
}

translit("В области веб-программирования, в частности серверной части, PHP — один из популярных сценарных языков (наряду с JSP, Perl и языками, используемыми в ASP.NET).", $alphabet);