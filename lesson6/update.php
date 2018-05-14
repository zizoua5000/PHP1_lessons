<?
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "submit": update_function(); break;
        case "dataTable": dataTableFunc(); break;
    }
  }
  if (isset($_GET["id"]) && !empty($_GET["id"])){
      files_function();
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function update_function(){
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
            
    if (!$update) {  // create record
        if (!isset($_GET["id"])){
            $date = date('Y-m-d H:i:s');
            $sql = 'INSERT INTO items (modDate ,`name`, `details_s`, `details`, `available`, `price`) VALUES ("' . $date . '", ';
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

            if (mysqli_query($connect, $sql)) {
                $result["success"] = 1;
                $sql = "SELECT id, modDate FROM items ORDER BY modDate DESC LIMIT 1;";
                $res = mysqli_query($connect, $sql);
                $data = mysqli_fetch_assoc($res);
                $result["lastID"] =$data["id"];
                $result["update"] = 0;
            }
            else {
                $result["success"] = 0;
            }
            $return["json"] = json_encode($result);
           echo json_encode($result);
        }
        else {
            
        }
    }
    else { // Update record
        if (!isset($_GET["id"])){
            $date = date('Y-m-d H:i:s');
            $sql = 'UPDATE items SET name="' . $return["name"] . '", details_s="' . $return["description_s"] . '", details="' . $return["description_f"] .
                '", available="' . $return["warehouse"] . '", price="' . $return["price"] . '" WHERE id=' . $return["item_ID"];
            
            if (mysqli_query($connect, $sql)) {
                $result["success"] = 2;                
                $result["lastID"] = $return["item_ID"];
                $result["update"] = 1;
            }
            else {
                $result["success"] = 0;
            }
            $return["json"] = json_encode($result);
           echo json_encode($result);
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

function files_function(){ // update file in new record
    if (isset($_GET["update"]) && $_GET["update"] == 1) {
        $error = delete_files();
    }
    
    require "config.php";
    require "uploads.php";
    
    print_r($error);
//echo json_encode($_POST);
}

function delete_files(){
    require "config.php";
    $sql = 'SELECT pic_path, pic_path_s FROM items WHERE id=' . $_GET["id"];
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);
    if (unlink($data["pic_path"]) && unlink($data["pic_path_s"])) {
        $error[] = "files deleted";
    }
    else {
        $error[] = "files not deleted";
    }
    return $error;
        
}

function dataTableFunc() {
    
}


?>

