<?
$server = "localhost";
$login="root";
$pass="";
$db = "lesson55";


//Коннектимся к серверу базы данных и выбираем базу данных для работы
$connect = mysqli_connect($server,$login,$pass,$db);

/*mysqli_query($connect, "SET NAMES 'utf8'"); 
mysqli_query($connect, "SET CHARACTER SET 'utf8'");
*/