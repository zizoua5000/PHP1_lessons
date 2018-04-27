<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Title </title>
</head>

<body>
    <?  
        if (!$_GET){
            $fileNames = scandir("small");
            if ($fileNames){
                foreach ($fileNames as $fileName) {
                    if ($fileName != "." && $fileName != "..") {
                        echo ('<a href="?file=' . $fileName . '" target="_blank"><img src="small/' . $fileName . '" alt="' . $fileName . ' small"></a>');
                    }
                }
            }
            else {
                echo "no pictures to show";
            }
        }
        else {
            $fileNames = scandir("big");
            if (in_array($_GET["file"], $fileNames)) {
                echo ('<img src="big/' . $_GET["file"] . '" alt="' . $_GET["file"] . ' big">');
            }
            else {
                echo ("no big picture of " .  $_GET["file"]);
            }
        }
    ?>
    
<!--    <a href=# target="_blank"><img src="small/house1.jpg" alt="house1 small"></a>-->
</body>
</html>
