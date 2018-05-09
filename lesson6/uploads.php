<?php

$target_file = $target_dir . basename($_FILES["0"]["name"]);
$target_file_s = $target_dir_mini . basename($_FILES["0"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
print_r($_FILES);



if(isset($_GET["id"])) {
    $check = getimagesize($_FILES["0"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        //print_r($check);
        $uploadOk = 1;
        $error[] = "File is an image - " . $check["mime"] . ".";
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
        $error[] = "File is not an image.";
    }
}

while (file_exists($target_file)) {
    $target_file_chunks = explode('.', $target_file );
    $target_file_s_chunks = explode('.', $target_file_s );
    $x = rand(0,100000);
    $target_file = $target_file_chunks["0"] . '(' . $x . ').'. $target_file_chunks["1"];
    $target_file_s = $target_file_s_chunks["0"] . '(' . $x . ').'. $target_file_s_chunks["1"];
}


if ($_FILES["0"]["size"] > 10000000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
    $error[] = "Sorry, your file is too large.";
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    $error[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}

if ($uploadOk == 0) {
    $error[] = "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["0"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["0"]["name"]). " has been uploaded.";
        $error[] = "The file ". $target_file . " has been uploaded.";
        $path = $target_file_s;
        $type = explode('/', $_FILES["0"]['type'])[1];
        $image_size = getimagesize($target_file);
        $image_ratio = $image_size[0]/ $image_size[1];
        $small_height = $small_width / $image_ratio;
        //echo($small_height . "   "  . $image_ratio);
        changeImage($small_height, $small_width, $target_file, $path, $type);
    } else {
        //echo "Sorry, there was an error uploading your file.";
        $error[] = "Sorry, there was an error uploading your file.";
    }
    $sql = 'UPDATE items SET pic_path="' . $target_file . '", pic_path_s="' . $target_file_s . '" WHERE id=' . $_GET["id"];
    $res = mysqli_query($connect,$sql);
    if ($res) {
        $error[] = "The file ". $target_file_s . " has been uploaded to database.";
        //header("Location: http://localhost:81/PHP1/PHP1_lessons/lesson5");
        //die();
    }
    else {
        $error[] = "Sorry, there was an error uploading your file to DB.";
        
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
