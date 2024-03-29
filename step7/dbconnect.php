<?php
require_once './env.php';
ini_set('display_errors', true);
function connect() 
{
  $host = DB_HOST;
  $db = DB_NAME;
  $user = DB_USER;
  $pass = DB_PASS;

  $dsn = "maysql:host=$host;dbname=$db;charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  echo '成功です';
} catch(PDOException $e) {
  echo '接続失敗です'. $e->getMessage();
  exit();
} 

echo connect();



}