<?php
$list['owner_list'] = array(
    'user'  => 'Пользователь',
    'coordinator'=> 'Куратор',
);
$list['diagnosis_list'] = array(
    'diabetes_mellitus_type1'  => 'Сахарный диабет - тип 1',
    'diabetes_mellitus_type2'  => 'Сахарный диабет - тип 2',
    'prediabetes'=> 'Преддиабет',
    'gestational_diabetes'=> 'Гестационный диабет',
    'other'=> 'Другой диагноз',
);
$list['used_list'] = array(
    'yes'  => 'Да',
    'no'=> 'Нет',
);
$list['question2_list'] = array(
    'q2_a1'  => 'Где купить глюкометр?',
    'q2_a2'  => 'Сколько стоит глюкометр?',
    'q2_a3'  => 'Как правильно выбрать глюкометр и понять какой из них лучше?',
    'q2_a4'  => 'Где можно научиться правильно пользоваться глюкометром и получить помощь в выборе этого прибора?',
    'q2_a5'  => 'Другое',
);
$list['question3_list'] = array(
    'q3_a1'  => 'Решили спросить у своего врача',
    'q3_a2'  => 'Решили обратиться за помощью по контактам в рекламных объявлениях, размещенных в больнице рядом с кабинетом врача',
    'q3_a3'  => 'Решили позвонить в медицинскую справочную',
	'q3_a4'  => 'Решили искать информацию в интернете',
    'q3_a5'  => 'Спросить у знакомых',
    'q3_a6'  => 'Другое',
);
$list['question34_list'] = array(
    'q34_a1'  => 'Чтобы у глюкометра была высокая точность измерения',
    'q34_a2'  => 'Чтобы глюкометр был очень прост в использовании',
    'q34_a3'  => 'Страна, в которой производят глюкометр',
	'q34_a4'  => 'Чтобы прибор позволял максимально быстро измерить сахар',
    'q34_a5'  => 'Чтобы тест-полоски к глюкометру можно было без проблем найти в продаже',
    'q34_a6'  => 'Чтобы процедура получения образца крови была безболезненной',
    'q34_a7'  => 'Другое',
);
$list['question5_list'] = array(
    'q5_a1'  => 'Чтобы продавцы магазина специализировались на глюкометрах. Хорошо знали плюсы и минусы этих приборов и могли подсказать какой из них лучше выбрать',
    'q5_a2'  => 'Возможность научиться правильно пользоваться глюкометром в день его покупки',
    'q5_a3'  => 'Наличие сервисного центра в этом же магазине (Если после покупки прибора вдруг возникнет необходимость гарантийного обслуживания, я хочу обратиться туда, где покупал(а) прибор, а не бегать по другим адресам)',
    'q5_a4'  => 'Чтобы продавец проверил точность измерения глюкометра. И я смог(ла) убедиться в ней во время покупки',
    'q5_a5'  => 'Чтобы при появлении любых вопросов по работе глюкометра можно было позвонить специалистам магазина, и они помогли в них разобраться',
    'q5_a6'  => 'Другое',
);
$list['question6_list'] = array(
    'q6_a1'  => 'Постоянное (бесперебойное) наличие тест-полосок и расходных материалов в магазине',
    'q6_a2'  => 'Доставка тест-полосок до дверей после оформления заявки на сайте',
    'q6_a3'  => 'Доставка тест-полосок до дверей после оформления заявки по телефону',
    'q6_a4'  => 'Возможность оплатить товар с помощью банковской карты',
    'q6_a5'  => 'Другое',
);

$other_answer = array(
    'q2_a5' => 'q2_a6',
    'q3_a3' => 'medical_referral',
    'q3_a6'  => 'q3_a7',
    'q34_a7'  => 'q34_a8',
    'q5_a6'  => 'q5_a7',
    'q6_a5'  => 'q6_a6',
);

$map_fields = array(
    'number' => 1,
    'type' => '',
    'coordinated_by' => '',
    'lastname' => '',
    'name' => '',
    'middlename' => '',
    'c_lastname' => '',
    'c_name' => '',
    'c_middlename' => '',
    'birthday' => '',
    'phone_u' => '',
    'phone_u2' => '',
    'phone_u3' => '',
    'phone_c' => '',
    'phone_c2' => '',
    'phone_c3' => '',
    'email_u' => '',
    'email_c' => '',
    'index_u' => '',
    'state_u' => '',
    'city_u' => '',
    'street_u' => '',
    'build_u' => '',
    'campus_u' => '',
    'flat_u' => '',
    'index_c' => '',
    'state_c' => '',
    'city_c' => '',
    'street_c' => '',
    'build_c' => '',
    'campus_c' => '',
    'flat_c' => '',
    'diagnosis' => '',
    'used' => '',
    'glucometr' => '',
    'count_glucometr' => '',
    'day_purchase_glucometr' => '',
    'glucometr2' => '',
    'count_glucometr2' => '',
    'day_purchase_glucometr2' => '',
    'glucometr3' => '',
    'count_glucometr3' => '',
    'day_purchase_glucometr3' => '',
    'glucometr4' => '',
    'count_glucometr4' => '',
    'day_purchase_glucometr4' => '',
    'glucometr5' => '',
    'count_glucometr5' => '',
    'day_purchase_glucometr5' => '',
    'q1_a1' => '',
    'q2_a1' => '',
    'q2_a2' => '',
    'q2_a3' => '',
    'q2_a4' => '',
    'q2_a5' => '',
    'q3_a1' => '',
    'q3_a2' => '',
    'q3_a3' => '',
    'q3_a4' => '',
    'q3_a5' => '',
    'q3_a6' => '',
    'q34_a1' => '',
    'q34_a2' => '',
    'q34_a3' => '',
    'q34_a4' => '',
    'q34_a5' => '',
    'q34_a6' => '',
    'q34_a7' => '',
    'q4_a1' => '',
    'q5_a1' => '',
    'q5_a2' => '',
    'q5_a3' => '',
    'q5_a4' => '',
    'q5_a5' => '',
    'q5_a6' => '',
    'q6_a1' => '',
    'q6_a2' => '',
    'q6_a3' => '',
    'q6_a4' => '',
    'q6_a5' => '',
    'q7_a1' => '',
    'q8_a1' => '',
    'q9_a1' => '',
    'q10_a1' => '',
);

$file = 'anket_beginner.xls';

if (file_exists($file)) {
    $existing_excel_arr = readExelFile($file);
    $last_row = array_filter(end($existing_excel_arr));
    while (empty($last_row)) {
        array_pop($existing_excel_arr);
        $last_row = array_filter(end($existing_excel_arr));
    }
}

foreach ($map_fields as $key => $value) {
    if (!empty($_REQUEST[$key])) {
        $map_fields[$key] = $_REQUEST[$key];
    }
}

if (!empty($last_row[0])) {
    if (!is_string($last_row[0])){
        $map_fields['number'] = $last_row[0] + 1;
    }
    else {
        $map_fields['number'] = 1;
    }
}

if ($map_fields['type'] === 'user') {
    $map_fields['phone_u'] = !empty($_REQUEST['phone']) && $_REQUEST['phone'] !== '7' ? $_REQUEST['phone'] : '';
    $map_fields['phone_u2'] = !empty($_REQUEST['phone2']) && $_REQUEST['phone2'] !== '7' ? $_REQUEST['phone2'] : '';
    $map_fields['phone_u3'] = !empty($_REQUEST['phone3']) && $_REQUEST['phone3'] !== '7' ? $_REQUEST['phone3'] : '';
    $map_fields['email_u'] = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
    $map_fields['index_u'] = !empty($_REQUEST['index']) ? $_REQUEST['index'] : '';
    $map_fields['state_u'] = !empty($_REQUEST['state']) ? $_REQUEST['state'] : '';
    $map_fields['city_u'] = !empty($_REQUEST['city']) ? $_REQUEST['city'] : '';
    $map_fields['street_u'] = !empty($_REQUEST['street']) ? $_REQUEST['street'] : '';
    $map_fields['build_u'] = !empty($_REQUEST['build']) ? $_REQUEST['build'] : '';
    $map_fields['campus_u'] = !empty($_REQUEST['campus']) ? $_REQUEST['campus'] : '';
    $map_fields['flat_u'] = !empty($_REQUEST['flat']) ? $_REQUEST['flat'] : '';
}
else {
    if (!empty($_REQUEST['phone_select'])) {
        if ($_REQUEST['phone_select'] === 'coordinator') {
            $map_fields['phone_c'] = !empty($_REQUEST['phone']) && $_REQUEST['phone'] !== '7' ? $_REQUEST['phone'] : '';
            $map_fields['phone_c2'] = !empty($_REQUEST['phone2']) && $_REQUEST['phone2'] !== '7' ? $_REQUEST['phone2'] : '';
            $map_fields['phone_c3'] = !empty($_REQUEST['phone3']) && $_REQUEST['phone3'] !== '7' ? $_REQUEST['phone3'] : '';
        }
        elseif ($_REQUEST['phone_select'] === 'user') {
            $map_fields['phone_u'] = !empty($_REQUEST['phone']) && $_REQUEST['phone'] !== '7' ? $_REQUEST['phone'] : '';
            $map_fields['phone_u2'] = !empty($_REQUEST['phone2']) && $_REQUEST['phone2'] !== '7' ? $_REQUEST['phone2'] : '';
            $map_fields['phone_u3'] = !empty($_REQUEST['phone3']) && $_REQUEST['phone3'] !== '7' ? $_REQUEST['phone3'] : '';
        }
    }

    if (!empty($_REQUEST['email_owner'])) {
        if ($_REQUEST['email_owner'] === 'coordinator') {
            $map_fields['email_c'] = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
        }
        elseif ($_REQUEST['email_owner'] === 'user') {
            $map_fields['email_u'] = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
        }
    }

    if (!empty($_REQUEST['address_owner'])) {
        if ($_REQUEST['address_owner'] === 'user') {
            $map_fields['index_u'] = !empty($_REQUEST['index']) ? $_REQUEST['index'] : '';
            $map_fields['state_u'] = !empty($_REQUEST['state']) ? $_REQUEST['state'] : '';
            $map_fields['city_u'] = !empty($_REQUEST['city']) ? $_REQUEST['city'] : '';
            $map_fields['street_u'] = !empty($_REQUEST['street']) ? $_REQUEST['street'] : '';
            $map_fields['build_u'] = !empty($_REQUEST['build']) ? $_REQUEST['build'] : '';
            $map_fields['campus_u'] = !empty($_REQUEST['campus']) ? $_REQUEST['campus'] : '';
            $map_fields['flat_u'] = !empty($_REQUEST['flat']) ? $_REQUEST['flat'] : '';
        }
        elseif ($_REQUEST['address_owner'] === 'coordinator') {
            $map_fields['index_c'] = !empty($_REQUEST['index']) ? $_REQUEST['index'] : '';
            $map_fields['state_c'] = !empty($_REQUEST['state']) ? $_REQUEST['state'] : '';
            $map_fields['city_c'] = !empty($_REQUEST['city']) ? $_REQUEST['city'] : '';
            $map_fields['street_c'] = !empty($_REQUEST['street']) ? $_REQUEST['street'] : '';
            $map_fields['build_c'] = !empty($_REQUEST['build']) ? $_REQUEST['build'] : '';
            $map_fields['campus_c'] = !empty($_REQUEST['campus']) ? $_REQUEST['campus'] : '';
            $map_fields['flat_c'] = !empty($_REQUEST['flat']) ? $_REQUEST['flat'] : '';
        }
    }
}

if (!empty($map_fields['type'])) {
    $map_fields['type'] = $list['owner_list'][$map_fields['type']];
}
if (!empty($map_fields['used'])) {
    $map_fields['used'] = $list['used_list'][$map_fields['used']];
}
if (!empty($map_fields['diagnosis'])) {
    if ($map_fields['diagnosis'] !== 'other') {
        $map_fields['diagnosis'] = $list['diagnosis_list'][$map_fields['diagnosis']];
    }
    else {
        $map_fields['diagnosis'] = 
            $list['diagnosis_list'][$map_fields['diagnosis']] . ';' . 
            !empty($_REQUEST['diagnosis_another']) ? $_REQUEST['diagnosis_another'] : '';
    }
}
if (!empty($_REQUEST['free_test_line'])) {
    $map_fields['count_glucometr'] = !empty($_REQUEST['comment']) ? $_REQUEST['comment'] : '';
}
if (!empty($_REQUEST['free_test_line2'])) {
    $map_fields['count_glucometr2'] = !empty($_REQUEST['comment2']) ? $_REQUEST['comment2'] : '';
}
if (!empty($_REQUEST['free_test_line3'])) {
    $map_fields['count_glucometr3'] = !empty($_REQUEST['comment3']) ? $_REQUEST['comment3'] : '';
}
if (!empty($_REQUEST['free_test_line4'])) {
    $map_fields['count_glucometr4'] = !empty($_REQUEST['comment4']) ? $_REQUEST['comment4'] : '';
}
if (!empty($_REQUEST['free_test_line5'])) {
    $map_fields['count_glucometr5'] = !empty($_REQUEST['comment5']) ? $_REQUEST['comment5'] : '';
}

$excel_array = array();
$question_excel_array = array(
    'question1' => '',
    'question2' => '',
    'question3' => '',
    'question34' => '',
    'question4' => '',
    'question5' => '',
    'question6' => '',
    'question7' => '',
    'question8' => '',
    'question9' => '',
    'question10' => '',
);
$question_arr = array (
    'q1' => array('type' => 'textarea', 'name_field_excel' => 'question1'),
    'q2' => array('type' => 'prize_place', 'name_field_excel' => 'question2', 'option' => 'question2_list'),
    'q3' => array('type' => 'checkbox', 'name_field_excel' => 'question3', 'option' => 'question3_list'),
    'q34' => array('type' => 'prize_place', 'name_field_excel' => 'question34', 'option' => 'question34_list'),
    'q4' => array('type' => 'textarea', 'name_field_excel' => 'question4'),
    'q5' => array('type' => 'prize_place', 'name_field_excel' => 'question5', 'option' => 'question5_list'),
    'q6' => array('type' => 'prize_place', 'name_field_excel' => 'question6', 'option' => 'question6_list'),
    'q7' => array('type' => 'textarea', 'name_field_excel' => 'question7'),
    'q8' => array('type' => 'textarea', 'name_field_excel' => 'question8'),
    'q9' => array('type' => 'textarea', 'name_field_excel' => 'question9'),
    'q10' => array('type' => 'textarea', 'name_field_excel' => 'question10'),
);

foreach ($map_fields as $key => $value) {
    $go_next_value = false;
    foreach ($question_arr as $search => $data) {
        if (strstr($key, $search)) {
            $go_next_value = true;
            switch ($data['type']) {
                case 'prize_place':
                    if ($value !== '') {
                        if (array_key_exists($key, $other_answer)) {
                            $question_excel_array[$data['name_field_excel']] .= 
                                $list[$data['option']][$key] . ";" . $_REQUEST[$other_answer[$key]] . ";" . $value . '; ';
                        }
                        else {
                            $question_excel_array[$data['name_field_excel']] .= $list[$data['option']][$key] . ";" . $value . '; ';
                        }
                    }
                    break;
                case 'checkbox':
                    if ($value !== '') {
                        if (array_key_exists($key, $other_answer)) {
                            $question_excel_array[$data['name_field_excel']] .= 
                                $list[$data['option']][$key] . ";" . $_REQUEST[$other_answer[$key]] . "; ";
                        }
                        else {
                            $question_excel_array[$data['name_field_excel']] .= $list[$data['option']][$key] . '; ';
                        }
                        
                    }
                    break;
                case 'radiobutton':
                    if ($value !== '') {
                        $question_excel_array[$data['name_field_excel']] .= $list[$data['option']][$key] . '; ';
                    }
                    break;
                default:
                    $question_excel_array[$data['name_field_excel']] .= $value;
                    break;
            }

        }
    }
    if ($go_next_value) {
        continue;
    }

    $excel_array[$key] = $value;
}


$excel_array = array_merge($excel_array, $question_excel_array);
$existing_excel_arr[] = $excel_array;
die(writeExelFile($file, $existing_excel_arr));

function readExelFile($filepath){
    require_once('Classes/PHPExcel.php');
    $existing_arr=array();
    $input_file_type = PHPExcel_IOFactory::identify($filepath);
    $objReader = PHPExcel_IOFactory::createReader($input_file_type);
    $objPHPExcel = $objReader->load($filepath);
    $input_file_type = $objPHPExcel->getActiveSheet()->toArray();
    return $input_file_type;
}

function writeExelFile($filename, $data) {
    require_once('Classes/PHPExcel.php');
    require_once('Classes/PHPExcel/Writer/Excel5.php');
    
    $xls = new PHPExcel();
    $xls->setActiveSheetIndex(0);
    $sheet = $xls->getActiveSheet();

    $columnID = 'A';
    $lastColumn = 'BG';
    $sheet->getStyle('A1:BG1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    do {
       $sheet->getColumnDimension($columnID)->setAutoSize(true);
       $columnID++;
    } 
    while ($columnID != $lastColumn);
    $row = 1;
    foreach($data as $row_anket){
        $column = 0;
        foreach($row_anket as $value){
            $sheet->setCellValueByColumnAndRow($column, $row, $value);
            $column++;
        }
        $row++;
        $sheet->getStyle('A'.$row.':BG'.$row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    }
    $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save($filename);
    return 'true';
}
