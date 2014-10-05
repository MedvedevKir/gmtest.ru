<?php

//Подключение к базе данных по клиентам gmtest.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gmtest', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    $error = 'Невозможно подсоединиться к базе данных gmtest!<br> '
            . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] .'/wordpress/be/DB/error.html.php';
    exit();
}


//Обработка данных при заполнении анкеты самим пользователем.
if (isset($_REQUEST['type']) and $_REQUEST['type'] == 'user'){
    $name_u = $_REQUEST['name'];
    $lastname_u = $_REQUEST['lastname'];
    $middlename_u = $_REQUEST['middlename'];
    $birthday = $_REQUEST['birthday'];
    $email_u = $_REQUEST['email'];
    $index_u = $_REQUEST['index'];
    $state_u = $_REQUEST['state'];
    $city_u = $_REQUEST['city'];
    $street_u = $_REQUEST['street'];
    $build_u = $_REQUEST['build'];
    
    if(isset($_REQUEST['campus']) and $_REQUEST['campus'] != '')
        $campus_u = $_REQUEST['campus'];
    else {
        $campus_u = '-';
    }
    if(isset($_REQUEST['flat']) and $_REQUEST['flat'] != '')
        $flat_u = $_REQUEST['flat'];
    else {
        $flat_u = '-';
    }
    
    //Определение диагноза
    if(isset($_REQUEST['diagnosis']) and $_REQUEST['diagnosis'] != ''){
        switch ($_REQUEST['diagnosis']) {
            case 'diabetes_mellitus_type1': 
                $diagnosis = 'Сахарный диабет тип 1'; break;
            case 'diabetes_mellitus_type2': 
                $diagnosis = 'Сахарный диабет тип 2'; break;
            case 'prediabetes': 
                $diagnosis = 'Преддиабет'; break;
            case 'gestational_diabetes': 
                $diagnosis = 'Гестационный диабет'; break;
            case 'other': 
                $diagnosis = $_REQUEST['diagnosis_another']; break;
            default:
                break;
        }
    }
    
    //Получение телефонов пользователя.
    $phone_u = $_REQUEST['phone'];
    if(isset($_REQUEST['phone2']) and $_REQUEST['phone2'] != '7' and $_REQUEST['phone2'] != '') {
        $phone_u2 = $_REQUEST['phone2'];
    }
    if(isset($_REQUEST['phone3']) and $_REQUEST['phone3'] != '7' and $_REQUEST['phone3'] != '') {
        $phone_u3 = $_REQUEST['phone3'];
    }
    
    //Проверка записи данных
    $sql = 'INSERT INTO user SET
                fio = :fio,
                birthday = :birthday,
                email = :email_u,
                diagnosis = :diagnosis';
    $s = $pdo->prepare($sql);
    $s->bindValue(':fio', $name_u . " " . $lastname_u . " " . $middlename_u);
    $s->bindValue(':birthday', $birthday);
    $s->bindValue(':email_u', $email_u);
    $s->bindValue(':diagnosis' , $diagnosis);
    $s->execute();
}

//Обработка данных анкеты при заполнении ее куратором
if(isset($_REQUEST['type']) and $_REQUEST['type'] == 'coordinator') {
    //Данные о пациенте
    $name_u = $_REQUEST['name'];
    $lastname_u = $_REQUEST['lastname'];
    $middlename_u = $_REQUEST['middlename'];
    $birhday = $_REQUEST['birthday'];
    
    //Данные о кураторе
    $name_с = $_REQUEST['с_name'];
    $lastname_с = $_REQUEST['с_lastname'];
    $middlename_с = $_REQUEST['с_middlename'];
    
    if(isset($_REQUEST['email_owner']) and $_REQUEST['email_owner'] != ''){
        switch ($_REQUEST['email_owner']) {
            case 'user': 
                $email_u = $_REQUEST['email']; break;
            case 'coordinator': 
                $email_c = $_REQUEST['email']; break;
            default:
                break;
        }
    }
    
    if(isset($_REQUEST['address_owner']) and $_REQUEST['address_owner'] != ''){
        switch ($_REQUEST['address_owner']) {
            case 'user': 
                $index_u = $_REQUEST['index'];
                $state_u = $_REQUEST['state'];
                $city_u = $_REQUEST['city'];
                $street_u = $_REQUEST['street'];
                $build_u = $_REQUEST['build'];

                if(isset($_REQUEST['campus']) and $_REQUEST['campus'] != '')
                    $campus_u = $_REQUEST['campus'];
                else {
                    $campus_u = '';
                }
                if(isset($_REQUEST['flat']) and $_REQUEST['flat'] != '')
                    $flat_u = $_REQUEST['flat'];
                else {
                    $flat_u = '';
                } 
                break;
            
            case 'coordinator': 
                $index_c = $_REQUEST['index'];
                $state_c = $_REQUEST['state'];
                $city_c = $_REQUEST['city'];
                $street_c = $_REQUEST['street'];
                $build_c = $_REQUEST['build'];

                if(isset($_REQUEST['campus']) and $_REQUEST['campus'] != '')
                    $campus_c = $_REQUEST['campus'];
                else {
                    $campus_c = '';
                }
                if(isset($_REQUEST['flat']) and $_REQUEST['flat'] != '')
                    $flat_c = $_REQUEST['flat'];
                else {
                    $flat_c = '';
                }
                break;
            default:
                break;
        }
    }
    
    if(isset($_REQUEST['phone_select']) and $_REQUEST['phone_select'] != ''){
        switch($_REQUEST['phone_select']){
            case 'user':
                $phone_u = $_REQUEST['phone']; break;
            case 'coordinator':
                $phone_c = $_REQUEST['phone']; break;
            default:
                break;
        }
    }
    if(isset($_REQUEST['phone2']) and $_REQUEST['phone2'] != '7' and $_REQUEST['phone2'] != '') {
        if(isset($_REQUEST['phone_select2']) and $_REQUEST['phone_select2'] != ''){
            switch($_REQUEST['phone_select2']){
                case 1:
                    $phone_u2 = $_REQUEST['phone2']; break;
                case 2:
                    $phone_c2 = $_REQUEST['phone2']; break;
                default:
                    break;
            }
        }
    }
    if(isset($_REQUEST['phone3']) and $_REQUEST['phone3'] != '7' and $_REQUEST['phone3'] != '') {
        if(isset($_REQUEST['phone_select3']) and $_REQUEST['phone_select3'] != ''){
            switch($_REQUEST['phone_select3']){
                case 1:
                    $phone_u3 = $_REQUEST['phone3']; break;
                case 2:
                    $phone_c3 = $_REQUEST['phone3']; break;
                default:
                    break;
            }
        }
    }
    
    //Проверка записи данных
    include $_SERVER['DOCUMENT_ROOT'] .'/wordpress/be/DB/DataFromAnket.html.php';
}