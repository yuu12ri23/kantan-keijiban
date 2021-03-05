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
        }

        .box {
        
            padding: 25px;
            border: 5px solid  rgba(187, 250, 221, 0.966);
        }
    </style>
</head>
<body>
    <div class="flex-container">

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
    $re = $dbh->query("SELECT * FROM keijibanI;");

print '<div class="flex-container">';
while ($kekka = $re->fetch()) {
print "<div class='box'>";
print $kekka[0];
print " | ";
print $kekka[1];
print " | ";
print $kekka[2];
print "<br>";
print "</div>";
}
print "</div>";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
print "<a href='keijiban.html'>戻る</a>";
?>


</body>
</html>