<?
$server = "localhost";
$login="root";
$pass="123456";
$db = "bookstore";

$menuTable = "menu";
$itemsTable = "items";

$target_dir = "images/big/";
$target_dir_mini = "images/small/";
$small_pic_width = 150;
$small_width = 150;
$uploadOk = 1;



$connect = mysqli_connect($server,$login,$pass,$db);

?>
