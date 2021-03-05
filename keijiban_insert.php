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
            flex-direction: column;
            align-items: center;
            
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
<div class="flex-container">

<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('../db_info.php');

try { 
   
    $dbh = new PDO($dsn);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
$name = $_POST["namae"];
$message = $_POST["message"];   
    
    $dbh->query("INSERT INTO keijibanI (namae,message) VALUES ('{$name}','{$message}');"); 

    print "以下の内容を投稿しました";
    print "<br>";
    print "名前";
    print "：";
    print $name;
    print "<br>";
    print "メッセージ";
    print "：";
    print $message;
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>


<br><a href='keijiban.html'>戻る</a>

</body>
</html>