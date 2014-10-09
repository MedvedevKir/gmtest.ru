<?php

//Подключение к базе данных по клиентам gmtest.
include $_SERVER['DOCUMENT_ROOT'] .'/wordpress/be/DB/db.inc.php';

global $pdo;

//Обработка личных данных при заполнении анкеты самим пользователем.
if (isset($_REQUEST['type']) and $_REQUEST['type'] == 'user'){
    $name_u = $_REQUEST['name'];
    $lastname_u = $_REQUEST['lastname'];
    $middlename_u = $_REQUEST['middlename'];
    $birthday = $_REQUEST['birthday'];
    $diagnosis = '';
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
    
    //Сохранение личных данных в базе
    $sql1 = 'INSERT INTO user SET
                fio = :fio,
                birthday = :birthday,
                email = :email_u,
                diagnosis = :diagnosis,
                address_index = :index,
                address_state = :state,
                address_city = :city,
                address_street = :street,
                address_build = :build,
                address_campus = :campus,
                address_flat = :flat';
    $s1 = $pdo->prepare($sql1);
    $s1->bindValue(':fio', $lastname_u . " " . $name_u . " " . $middlename_u);
    $s1->bindValue(':birthday', $birthday);
    $s1->bindValue(':email_u', $email_u);
    $s1->bindValue(':diagnosis' , $diagnosis);
    $s1->bindValue(':index' , $index_u);
    $s1->bindValue(':state' , $state_u);
    $s1->bindValue(':city' , $city_u);
    $s1->bindValue(':street' , $street_u);
    $s1->bindValue(':build' , $build_u);
    $s1->bindValue(':campus' , $campus_u);
    $s1->bindValue(':flat' , $flat_u);
    $s1->execute();
    
    $userid = $pdo->lastInsertId();
    
    //Получение телефонов пользователя.
    $phone_u = $_REQUEST['phone'];
    
    //Сохранение телефонов в базе
    $sql2 = 'INSERT INTO phones_user SET
                userid = :userid,
                phone_number = :phone_number';
    $s2 = $pdo->prepare($sql2);
    $s2->bindValue(':userid', $userid);
    $s2->bindValue(':phone_number', $phone_u);
    $s2->execute();
    
    if(isset($_REQUEST['phone2']) and $_REQUEST['phone2'] != '7' and $_REQUEST['phone2'] != '') {
        $phone_u2 = $_REQUEST['phone2'];
        
        //Сохранение телефонов в базе
        $sql3 = 'INSERT INTO phones_user SET
                    userid = :userid,
                    phone_number = :phone_number';
        $s3 = $pdo->prepare($sql3);
        $s3->bindValue(':userid', $userid);
        $s3->bindValue(':phone_number', $phone_u2);
        $s3->execute();
    }
    if(isset($_REQUEST['phone3']) and $_REQUEST['phone3'] != '7' and $_REQUEST['phone3'] != '') {
        $phone_u3 = $_REQUEST['phone3'];
        
        //Сохранение телефонов в базе
        $sql4 = 'INSERT INTO phones_user SET
                    userid = :userid,
                    phone_number = :phone_number';
        $s4 = $pdo->prepare($sql4);
        $s4->bindValue(':userid', $userid);
        $s4->bindValue(':phone_number', $phone_u3);
        $s4->execute();
    }
    
}

//Обработка личных данных анкеты при заполнении ее куратором
if(isset($_REQUEST['type']) and $_REQUEST['type'] == 'coordinator') {
    //Данные о пациенте
    $name_u = $_REQUEST['name'];
    $lastname_u = $_REQUEST['lastname'];
    $middlename_u = $_REQUEST['middlename'];
    $fio_u = $lastname_u . " " . $name_u . " " . $middlename_u;
    $birthday = $_REQUEST['birthday'];
    $diagnosis = '';
    
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
    
    $sql1 = 'INSERT INTO user SET
                fio = :fio,
                birthday = :birthday,
                diagnosis = :diagnosis';
    $s1 = $pdo->prepare($sql1);
    $s1->bindValue(':fio', $fio_u);
    $s1->bindValue(':birthday', $birthday);
    $s1->bindValue(':diagnosis' , $diagnosis);
    $s1->execute();
    
    $userid = $pdo->lastInsertId();
    
    //Данные о кураторе
    $name_с = $_POST['c_name'];
    $lastname_с = $_POST['c_lastname'];
    $middlename_с = $_POST['c_middlename'];
    $fio_c = $lastname_с . " " . $name_с . " " . $middlename_с;
    $coordinatedby = $_REQUEST['coordinated_by'];
    
    $sql2 = 'INSERT INTO coordinator SET
                fio = :fio,
                coordinatedby = :coordinatedby';
    $s2 = $pdo->prepare($sql2);
    $s2->bindValue(':fio', $fio_c);
    $s2->bindValue(':coordinatedby', $coordinatedby);
    $s2->execute();
    
    $coordinatorid = $pdo->lastInsertId();
    
    if(isset($_REQUEST['email_owner']) and $_REQUEST['email_owner'] != ''){
        switch ($_REQUEST['email_owner']) {
            case 'user': 
                $email_u = $_REQUEST['email']; 
                
                $sql3 = 'UPDATE user SET
                            email = :email
                            WHERE id = :userid';
                $s3 = $pdo->prepare($sql3);
                $s3->bindValue(':email', $email_u);
                $s3->bindValue(':userid', $userid);
                $s3->execute();
                break;
            
            case 'coordinator': 
                $email_c = $_REQUEST['email']; 
                
                $sql4 = 'UPDATE coordinator SET
                            email = :email
                            WHERE id = :coordinatorid';
                $s4 = $pdo->prepare($sql4);
                $s4->bindValue(':email', $email_c);
                $s4->bindValue(':coordinatorid', $coordinatorid);
                $s4->execute();
                break;
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
                    $campus_u = '-';
                }
                if(isset($_REQUEST['flat']) and $_REQUEST['flat'] != '')
                    $flat_u = $_REQUEST['flat'];
                else {
                    $flat_u = '-';
                }
                
                $sql5 = 'UPDATE user SET
                            address_index = :index,
                            address_state = :state,
                            address_city = :city,
                            address_street = :street,
                            address_build = :build,
                            address_campus = :campus,
                            address_flat = :flat
                            WHERE id = :userid';  
                $s5 = $pdo->prepare($sql5);
                $s5->bindValue(':index' , $index_u);
                $s5->bindValue(':state' , $state_u);
                $s5->bindValue(':city' , $city_u);
                $s5->bindValue(':street' , $street_u);
                $s5->bindValue(':build' , $build_u);
                $s5->bindValue(':campus' , $campus_u);
                $s5->bindValue(':flat' , $flat_u);
                $s5->bindValue(':userid' , $userid);
                $s5->execute();
                
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
                    $campus_c = '-';
                }
                if(isset($_REQUEST['flat']) and $_REQUEST['flat'] != '')
                    $flat_c = $_REQUEST['flat'];
                else {
                    $flat_c = '-';
                }
                
                $sql5 = 'UPDATE coordinator SET
                            address_index = :index,
                            address_state = :state,
                            address_city = :city,
                            address_street = :street,
                            address_build = :build,
                            address_campus = :campus,
                            address_flat = :flat
                                WHERE id = :coordinatorid';  
                $s5 = $pdo->prepare($sql5);
                $s5->bindValue(':index' , $index_c);
                $s5->bindValue(':state' , $state_c);
                $s5->bindValue(':city' , $city_c);
                $s5->bindValue(':street' , $street_c);
                $s5->bindValue(':build' , $build_c);
                $s5->bindValue(':campus' , $campus_c);
                $s5->bindValue(':flat' , $flat_c);
                $s5->bindValue(':coordinatorid' , $coordinatorid);
                $s5->execute();
                break;
            default:
                break;
        }
    }
    
    if(isset($_REQUEST['phone_select']) and $_REQUEST['phone_select'] != ''){
        switch($_REQUEST['phone_select']){
            case 'user':
                $phone_u = $_REQUEST['phone']; 
                
                $sql6 = 'INSERT INTO phones_user SET
                            userid = :userid,
                            phone_number = :phone_number';
                $s6 = $pdo->prepare($sql6);
                $s6->bindValue(':userid', $userid);
                $s6->bindValue(':phone_number', $phone_u);
                $s6->execute();
                
                break;
            case 'coordinator':
                $phone_c = $_REQUEST['phone']; 
                
                $sql7 = 'INSERT INTO phones_coordinator SET
                            coordinatorid = :coordinatorid,
                            phone_number = :phone_number';
                $s7 = $pdo->prepare($sql7);
                $s7->bindValue(':coordinatorid', $coordinatorid);
                $s7->bindValue(':phone_number', $phone_c);
                $s7->execute();
                
                break;
            default:
                break;
        }
    }
    if(isset($_REQUEST['phone2']) and $_REQUEST['phone2'] != '7' and $_REQUEST['phone2'] != '') {
        if(isset($_REQUEST['phone_select2']) and $_REQUEST['phone_select2'] != ''){
            switch($_REQUEST['phone_select2']){
                case 1:
                    $phone_u2 = $_REQUEST['phone2']; 
                    
                    $sql8 = 'INSERT INTO phones_user SET
                            userid = :userid,
                            phone_number = :phone';
                    $s8 = $pdo->prepare($sql8);
                    $s8->bindValue(':userid', $userid);
                    $s8->bindValue(':phone', $phone_u2);
                    $s8->execute();
                    
                    break;
                case 2:
                    $phone_c2 = $_REQUEST['phone2']; 
                    
                    $sql9 = 'INSERT INTO phones_coordinator SET
                            coordinatorid = :coordinatorid,
                            phone_number = :phone';
                    $s9 = $pdo->prepare($sql9);
                    $s9->bindValue(':coordinatorid', $coordinatorid);
                    $s9->bindValue(':phone', $phone_c2);
                    $s9->execute();
                    
                    break;
                default:
                    break;
            }
        }
    }
    if(isset($_REQUEST['phone3']) and $_REQUEST['phone3'] != '7' and $_REQUEST['phone3'] != '') {
        if(isset($_REQUEST['phone_select3']) and $_REQUEST['phone_select3'] != ''){
            switch($_REQUEST['phone_select3']){
                case 1:
                    $phone_u3 = $_REQUEST['phone3']; 
                    
                    $sql10 = 'INSERT INTO phones_user SET
                            userid = :userid,
                            phone_number = :phone';
                    $s10 = $pdo->prepare($sql10);
                    $s10->bindValue(':userid', $userid);
                    $s10->bindValue(':phone', $phone_u3);
                    $s10->execute();
                    
                    break;
                case 2:
                    $phone_c3 = $_REQUEST['phone3']; 
                    
                    $sql11 = 'INSERT INTO phones_coordinator SET
                            coordinatorid = :coordinatorid,
                            phone_number = :phone';
                    $s11 = $pdo->prepare($sql11);
                    $s11->bindValue(':coordinatorid', $coordinatorid);
                    $s11->bindValue(':phone', $phone_c3);
                    $s11->execute();
                    
                    break;
                default:
                    break;
            }
        }
    }
    
    //Сопоставление пользователя куратору
    $sql12 = 'INSERT INTO user_coordinator SET
                userid = :userid,
                coordinatorid = :coordinatorid';
    $s12 = $pdo->prepare($sql12);
    $s12->bindValue(':userid', $userid);
    $s12->bindValue(':coordinatorid', $coordinatorid);
    $s12->execute();
}

