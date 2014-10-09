<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gmtest', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    $error = 'Невозможно подсоединиться к базе данных gmtest!<br> '
            . $e->getMessage();
    //include $_SERVER['DOCUMENT_ROOT'] .'/wordpress/be/DB/error.html.php';
    exit();
}