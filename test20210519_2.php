<?php

// 変数の初期化
$sql = null;
$res = null;
$dbh = null;

try {
	// DBへ接続
	$dbh = new PDO("mysql:host=127.0.0.1; dbname=test0424; charset=utf8", 'root', '');

	// SQL作成
	$sql = "SELECT * FROM users";

	// SQL実行
	$res = $dbh->query($sql);

	// 取得したデータを出力
	foreach( $res as $value ) {
		echo "$value[name]<br>";
	}

} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// 接続を閉じる
$dbh = null;

?>