<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
         body {background-color: rgba(187, 250, 221, 0.966);
        }
        .flex-container {
            
            background-color: rgba(187, 250, 221, 0.966); 
            display: flex; 
            justify-content: center;
            flex-wrap: wrap;
        }

        .box {
            
            width: 400px;
            margin: 40px;
            padding: 25px;
            border: 5px solid black;
        }
    </style>
</head>
<body>


<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('../db_info.php');
try { 
    $dbh = new PDO($dsn, $user, $password);
    
    // この下にプログラムを書きましょう。
    $number = $_POST["bangou"];
    $dbh->query("DELETE FROM keijiban_tb WHERE bangou = ".$number.";");



} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

投票番号を削除しました。
<br>
<a href='keijiban.html'>戻る</a>

</body>
</html>