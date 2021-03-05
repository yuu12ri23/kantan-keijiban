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
$dsn = 'mysql:dbname=db1;host=localhost';
$user = 'root';
$password = 'lamp1';

try { 
    
    $dbh = new PDO($dsn);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
    $search = $_POST["search"];  // 入力された検索する文字列

    $re = $dbh->query("SELECT * FROM keijibanI WHERE message LIKE '%{$search}%';");
    print "検索結果を表示します<br>";
    while ($kekka = $re->fetch()) {
        print $kekka[0];
        print " | ";
        print $kekka[1];
        print " | ";
        print $kekka[2];
        print "<br>";
    }

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
print "<a href='keijiban.html'>戻る</a>";
?>


</body>
</html>