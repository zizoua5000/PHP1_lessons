<?
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "submit": test_function(); break;
    }
  }
  else {
      files_function();
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
    $return = $_POST;
    
    require "config.php";
    
    $sql = "SELECT id from items";
    $res = mysqli_query($connect, $sql);
    $update = 0;
    while ($data = mysqli_fetch_assoc($res)) {
        if ($data["id"] == $return["item_ID"]) {
            $update = 1;
            break;
        }
    }
            
    if (!$update) {
        $sql = 'INSERT INTO items (`name`, `details_s`, `details`, `available`, `price`) VALUES (';
        $c = count($return) - 2;
        $i = 0;
        foreach ($return as $value) {
            $i++;
            if ($c!=$i){
                $sql .= '"' . $value . '", ';
            }
           /* elseif ($c!=$i && is_numeric($value)){
                $sql .= $value . ', ';
            }*/
            else {
                $sql .=$value . ')';
                break;
            }
        }
        echo($sql);
      // print_r(mysqli_query($connect, $sql));
        if (mysqli_query($connect, $sql)) {
            $result = ["success" => 1];
        }
        else {
            $result = ["success" => 0];
        }
    }
    
   /* $myfile = fopen("output.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $return);
    fclose($myfile);*/
    
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";
  
  /*$return["json"] = json_encode($result);
    print_r($result);
  echo json_encode($result);*/
}

function files_function(){
    $error = false;
    $files = array();
    
    $uploaddir = 'images/';
    foreach($_FILES as $file)
    {
        if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
        {
            $files[] = $uploaddir .$file['name'];
        }
        else
        {
            $error = true;
        }
    }
    $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
echo json_encode($_POST);
}



?>

