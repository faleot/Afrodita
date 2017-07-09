<?
$hostname = "localhost";
$dbuser = "root";
$dbpassword = "root";
$dbname = "users";

$link = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname) or die("Ошибка подключения к БД" . mysqli_error());
$query = "SELECT * FROM user_acc";
$sql_query = mysqli_query($link, $query) or die ("Ошибка запроса" . mysqli_error());
$sql_date = mysqli_fetch_array($sql_query);
?>