<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');
try { 
    $dbh = new PDO($dsn, $user, $password);
    
    // この下にプログラムを書きましょう。
    $number = $_POST["bangou"];
    $dbh->query("DELETE FROM keijiban_tb WHERE bangou = ".$number.";");



} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

print "<a href='keijiban.html'>戻る</a>";
?>