<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn, $user, $password);
    
    // この下にプログラムを書きましょう。
$name = $_POST["namae"];
$message = $_POST["message"];   
    
    $dbh->query("INSERT INTO keijiban_tb (namae,message) VALUES ('{$name}','{$message}');"); 
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
print "<a href='keijiban.html'>戻る</a>";
?>