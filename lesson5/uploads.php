
<?php
$target_dir = "big/";
$target_dir_mini = "small/";
$small_pic_width = 150;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$small_width = 150;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
print_r($_FILES);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        //print_r($check);
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $path = $target_dir_mini.$_FILES["fileToUpload"]['name'];
        $type = explode('/', $_FILES["fileToUpload"]['type'])[1];
        $image_size = getimagesize($target_file);
        $image_ratio = $image_size[0]/ $image_size[1];
        $small_height = $small_width / $image_ratio;
        echo($small_height . "   "  . $image_ratio);
        changeImage($small_height, $small_width, $target_file, $path, $type);
    } else {
        echo "Sorry, there was an error uploading your file.";
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
