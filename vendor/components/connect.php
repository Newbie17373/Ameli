<?php
$servername = "diplomasite";
$db_name = "diplomaProject";
$db_username = "root";
$db_password = "";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    die();
}

$conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
// Проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
