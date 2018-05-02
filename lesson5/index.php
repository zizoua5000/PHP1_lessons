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
    
    <div class="galleryBoxMain">
        <div class=galleryText><span>Gallery</span></div>
            <div class="galleryBox">
                <?
                require "config.php";
                $sql = "SELECT id,path_s,name,views FROM images ORDER BY views DESC";
                $res = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_assoc($res)){
                    echo ('<div class="picture ' . $data["id"] . '"><a href=#' . ' class="go" id="' . $data["name"] . '"><img src="' . $data["path_s"] . '" alt="' . $data["name"] . '"></a>');
                    echo('<span>Views: ' . $data["views"] . '</span></div>');
                
                
                }
                
                ?>
            </div>
    </div>
    <form action="uploads.php" method="post" enctype="multipart/form-data">
        Загрузите фото:
        <input type="file" name="fileToUpload" id="fileToUpload" multiple><br>
        <input type="submit" name="submit" value="Загрузить Картинку">
    </form>
        
<div id="modal_form"><!-- Сaмo oкнo --> 
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      <img src="" class="bigPic">
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->

</body>
</html>
