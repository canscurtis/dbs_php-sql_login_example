<?php
$dbconn_host = 'localhost';     //資料庫預設連線端
$dbconn_username = 'root';      //資料庫預設帳號
$dbconn_password = '';          //資料庫預設密碼 (預設 Localhost 使用無密碼登入)
$dbconn_database = 'dbsdemo';   //資料庫名稱

// 建立連線
$conn = new mysqli($dbconn_host, $dbconn_username, $dbconn_password, $dbconn_database);

// 檢查連線
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// 設定連線編碼
$conn->set_charset("utf8");
?>