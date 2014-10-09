<?php

//Подключение к базе данных по клиентам gmtest.
include $_SERVER['DOCUMENT_ROOT'] .'/wordpress/be/DB/db.inc.php';

global $userid;
global $pdo;

if(isset($_REQUEST['used']) and $_REQUEST['used'] == 'no'){
    
    $glucometr = 'Нет используемых приборов.';
    $datebuy = NULL;
    $counttestline = NULL;
    $freetestline = NULL;
    
    $sql = 'INSERT INTO user_glucometr SET
                userid = :userid,
                glucometr = :glucometr,
                gldatebuy = :datebuy,
                counttestline = :counttestline,
                freetestline = :freetestline';
    $s = $pdo->prepare($sql);
    $s->bindValue(':userid', $userid);
    $s->bindValue(':glucometr', $glucometr);
    $s->bindValue(':datebuy', $datebuy);
    $s->bindValue(':counttestline', $counttestline);
    $s->bindValue(':freetestline', $freetestline);
    $s->execute();
}

if(isset($_REQUEST['used']) and $_REQUEST['used'] == 'yes'){
    
    $countgl = 2;
    $glucometr = $_REQUEST['glucometr'];
    $datebuy = $_REQUEST['day_purchase_glucometr'];
    $counttestline = $_REQUEST['count_glucometr'];
    $freetestline = $_REQUEST['comment'];
    $checked = $_REQUEST['free_test_line'];

    if($checked == 'on'){
       $sql = 'INSERT INTO user_glucometr SET
                    userid = :userid,
                    glucometr = :glucometr,
                    gldatebuy = :datebuy,
                    counttestline = :counttestline,
                    freetestline = :freetestline';
        $s = $pdo->prepare($sql);
        $s->bindValue(':userid', $userid);
        $s->bindValue(':glucometr', $glucometr);
        $s->bindValue(':datebuy', $datebuy);
        $s->bindValue(':counttestline', 'Используются бесплатные тест-полоски.');
        $s->bindValue(':freetestline', $freetestline);
        $s->execute(); 
    }
    else {
        $sql = 'INSERT INTO user_glucometr SET
                    userid = :userid,
                    glucometr = :glucometr,
                    gldatebuy = :datebuy,
                    counttestline = :counttestline,
                    freetestline = :freetestline';
        $s = $pdo->prepare($sql);
        $s->bindValue(':userid', $userid);
        $s->bindValue(':glucometr', $glucometr);
        $s->bindValue(':datebuy', $datebuy);
        $s->bindValue(':counttestline', $counttestline);
        $s->bindValue(':freetestline', 'Бесплатные тест-полоски не используются.');
        $s->execute();
    }
     
    
    while ($_REQUEST['glucometr' . $countgl]) {
        $glucometr = $_REQUEST['glucometr' . $countgl];
        $datebuy = $_REQUEST['day_purchase_glucometr' . $countgl];
        $counttestline = $_REQUEST['count_glucometr' . $countgl];
        $freetestline = $_REQUEST['comment' . $countgl];
        $checked = $_REQUEST['free_test_line' . $countgl];

        if($checked == 'on'){
           $sql = 'INSERT INTO user_glucometr SET
                        userid = :userid,
                        glucometr = :glucometr,
                        gldatebuy = :datebuy,
                        counttestline = :counttestline,
                        freetestline = :freetestline';
            $s = $pdo->prepare($sql);
            $s->bindValue(':userid', $userid);
            $s->bindValue(':glucometr', $glucometr);
            $s->bindValue(':datebuy', $datebuy);
            $s->bindValue(':counttestline', 'Используются бесплатные тест-полоски.');
            $s->bindValue(':freetestline', $freetestline);
            $s->execute(); 
        }
        else {
            $sql = 'INSERT INTO user_glucometr SET
                        userid = :userid,
                        glucometr = :glucometr,
                        gldatebuy = :datebuy,
                        counttestline = :counttestline,
                        freetestline = :freetestline';
            $s = $pdo->prepare($sql);
            $s->bindValue(':userid', $userid);
            $s->bindValue(':glucometr', $glucometr);
            $s->bindValue(':datebuy', $datebuy);
            $s->bindValue(':counttestline', $counttestline);
            $s->bindValue(':freetestline', 'Бесплатные тест-полоски не используются.');
            $s->execute();
        }
    
        $countgl = $countgl + 1;
    }
}
