<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="style.css">
<script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
<script src="sript.js"></script> 

	<title> Title </title>
</head>

<body>
    <?
    $fileNames = scandir("small");
            if ($fileNames){
                foreach ($fileNames as $fileName) {
                    if ($fileName != "." && $fileName != "..") {
                        echo ('<a href=#' . ' class="go" id="' . $fileName . '"><img src="small/' . $fileName . '" alt="' . $fileName . ' small"></a>');
                    }
                }
            }
            else {
                echo "no pictures to show";
            }
    ?>
        
<div id="modal_form"><!-- Сaмo oкнo --> 
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      <img src="" class="bigPic">
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->

</body>
</html>
