<?
require "config.php";

/*$_POST["action"] = "imageClick";
$_POST["id_a"] = "1";*/
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
      $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "imageClick": counter($connect); break;
    }
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function counter($connect){
    $return = $_POST;
    $sql = "SELECT id,name,views FROM images";
    $res = mysqli_query($connect, $sql);
   while($data = mysqli_fetch_assoc($res)){
        if ($return["id_a"] == $data["name"]){
            $views = $data["views"] + 1;
            $sql2 = 'UPDATE images SET views="' . $views . '" where id=' . $data["id"]; 
            mysqli_query($connect, $sql2);
            $return["views"] = $views;
            $return["id"] = $data["id"];
        }
        
    }
    
    

    
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";
//  print_r($return);
//  $return["json"] = json_encode($return);

  echo json_encode($return);
}
?>

