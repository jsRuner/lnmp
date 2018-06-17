<?php
$dbms='mysql';     //数据库类型
$host='db:3306'; //数据库主机名
$dbName='testdb';    //使用的数据库
$user='test';      //数据库连接用户名
$pass='123456';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    echo "连接成功<br/>";
    foreach ($dbh->query('SELECT * from user') as $row) {
        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    }
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
?>