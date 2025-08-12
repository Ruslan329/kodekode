<?php
//  logindb,passdb,login,pass,repitpass


if(isset($_POST['logindb'])){ $logindb = $_POST['logindb']; }
if(isset($_POST['passdb'])){ $passdb = $_POST['passdb'];}
if(isset($_POST['login'])){ $login = $_POST['login'];}
if(isset($_POST['pass'])){ $pass = $_POST['pass']; }
if(isset($_POST['repitpass'])){$repitpass = $_POST['repitpass']; 

    if($repitpass != $pass){ die("ошибка в поле повтор поля"); }
}
if(isset($_POST['host'])){ $host = $_POST['host']; }


$filename = './../settings/init.php';
//$filename = 'settings/init.php';
$data = ' <?php '.'define("DBUSERNAME", '.$logindb.');'.' '.'define("DBPASSWORD", '.$passdb.');'.' '.'define("HOST", '.$host.');'.' '.'define("DB", dbsite);'.' ?>';




file_put_contents($filename, $data , FILE_APPEND);

require_once './../settings/init.php';


//echo DBUSERNAME;

try {
// подключаемся к серверу
$conn = new PDO("mysql:host=".HOST, DBUSERNAME, DBPASSWORD);
// SQL-выражение для создания базы данных
$sql = "CREATE DATABASE ".DB." CHARSET UTF8";
// выполняем SQL-выражение
$conn->exec($sql);
echo "<h1>База данных созданна</h1>";
unset($conn);
}
catch (PDOException $e) {
echo "Ошибка создания базы данных " . $e;
}





try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), name VARCHAR(100), surname VARCHAR(100), fathername VARCHAR(100), phone VARCHAR(100), photo VARCHAR(100), typeactivit VARCHAR(100), title VARCHAR(30), pass VARCHAR(30), datetime VARCHAR(30));";

$conn->exec($sql);
echo "<br />Таблица БД успешно созданна users";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}
try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE Loginadministrator (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), pass VARCHAR(30));";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}


try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE cotigories (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), cotigory VARCHAR(30), date VARCHAR(30));";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}

try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE pages (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), date VARCHAR(30), text VARCHAR(30), title VARCHAR(30) , keywords VARCHAR(30), description VARCHAR(30), title VARCHAR(30) , author VARCHAR(30);";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}


try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE infosettingsuser (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), style VARCHAR(30), oflineslogan VARCHAR(30), onlineofline VARCHAR(30), slogan VARCHAR(90) , settings VARCHAR(30), autohello VARCHAR(30), autoinfo VARCHAR(90), foto VARCHAR(30), name VARCHAR(30));";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}


//id, time, status, name, mail, text, user_id, id_cons, date
try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE dialog (id INTEGER AUTO_INCREMENT PRIMARY KEY, time VARCHAR(30), contactpersonip VARCHAR(30), status VARCHAR(30), login VARCHAR(30), contactpersonid VARCHAR(30), date VARCHAR(30), text VARCHAR(30));";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}

try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE dialogs (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), contactpersonip VARCHAR(30), contactpersonid VARCHAR(30), date VARCHAR(30));";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}

try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "CREATE TABLE hovers (id INTEGER AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30), contactpersonip VARCHAR(30), contactpersonid VARCHAR(30), date VARCHAR(30));";
$conn->exec($sql);
echo "<br />Таблица БД успешно созданна";
}
catch (PDOException $e) {
echo "Database error: " . $e;
}



try {
$conn = new PDO("mysql:host=".HOST.";dbname=".DB."", DBUSERNAME, DBPASSWORD);
$sql = "INSERT  INTO Loginadministrator(login, pass) VALUES ('$login', '$pass')";
$conn->exec($sql);
echo "<br />login успешно";
}
catch (PDOException $e) {
echo "login error: " . $e;
}

?>

