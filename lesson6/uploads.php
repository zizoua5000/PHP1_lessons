
<?php
require "config.php";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file_s = $target_dir_mini . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
print_r($_FILES);



if(isset($_GET["id"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        //print_r($check);
        $uploadOk = 1;
        $error = "File is an image - " . $check["mime"] . ".";
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
        $error = "File is not an image.";
    }
}

while (file_exists($target_file)) {
    $target_file .= rand(0,100000);
}

if ($_FILES["fileToUpload"]["size"] > 1000000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
    $error = "Sorry, your file is too large.";
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $error = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $path = $target_dir_mini.$_FILES["fileToUpload"]['name'];
        $type = explode('/', $_FILES["fileToUpload"]['type'])[1];
        $image_size = getimagesize($target_file);
        $image_ratio = $image_size[0]/ $image_size[1];
        $small_height = $small_width / $image_ratio;
        //echo($small_height . "   "  . $image_ratio);
        changeImage($small_height, $small_width, $target_file, $path, $type);
    } else {
        //echo "Sorry, there was an error uploading your file.";
        $error = "Sorry, there was an error uploading your file.";
    }
    $sql = 'INSERT INTO images(path, path_s, name, size) values("' . $target_file . '", "' . $target_file_s . '", "' . $_FILES["fileToUpload"]["name"] . '", "' .  $_FILES["fileToUpload"]["size"] . '")';
    $res = mysqli_query($connect,$sql);
    if ($res) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to database.";
        header("Location: http://localhost:81/PHP1/PHP1_lessons/lesson5");
        die();
    }
    else {
        echo "Sorry, there was an error uploading your file to DB.";
        
    }
}

function changeImage($h, $w, $src, $newsrc, $type) {
    $newimg = imagecreatetruecolor($w, $h);
    switch ($type) {
      case 'jpeg':
        $img = imagecreatefromjpeg($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $w, $h, imagesx($img), imagesy($img));
        imagejpeg($newimg, $newsrc);
        break;
      case 'png':
        $img = imagecreatefrompng($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $w, $h, imagesx($img), imagesy($img));
        imagepng($newimg, $newsrc);
        break;
      case 'gif':
        $img = imagecreatefromgif($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $w, $h, imagesx($img), imagesy($img));
        imagegif($newimg, $newsrc);
        break;
    }
   }
?>
