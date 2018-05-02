<?
require "config.php";


if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { 
      $action = $_POST["action"];
    switch($action) { 
      case "imageClick": counter($connect); break;
    }
  }
}


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

  echo json_encode($return);
}
?>

