<?php
//POSTされたデータを受領
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];

//結果を表示
echo "<h2>結果</h2>";
echo "1. 共学と男子校／女子校、どちらが良いですか？: " . $q1 . "<br>";
echo "2. 制服はある方が良いですか？: " . $q2 . "<br>";
echo "3. 通学時間はどこまで耐えられますか？: " . $q3 . "<br>";

?>





// 「12/14の講義後に追加」データベースに保存（MySQLをやるはず）
// (例: MySQL)
$dsn = 'データベース接続情報';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->prepare('INSERT INTO answers (q1, q2, q3) VALUES (:q1, :q2, :q3)');
$stmt->bindValue(':q1', $q1, PDO::PARAM_STR);
$stmt->bindValue(':q2', $q2, PDO::PARAM_STR);
$stmt->bindValue(':q3', $q3, PDO::PARAM_STR);
$stmt->execute();