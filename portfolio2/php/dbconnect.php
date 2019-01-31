<?php
    require_once("db_account.php");
    // ローカル
    try {  
    $db = new PDO(
        'mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset='.CHARSET, USER_NAME, USER_PASS);
	} catch(PDOException $e) { 
		echo 'DB接続エラー:' . $e->getMessage();
    }