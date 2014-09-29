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
$list['question2_list'] = array(
    'q02_a1'  => 'Чтобы у глюкометра была высокая точность измерения (в соответствии с клиническими стандартами Евросоюза ISO 15197:2003)',
    'q02_a2'  => 'Чтобы глюкометр был очень прост в использовании',
    'q02_a3'  => 'Страна, в которой производят глюкометр',
    'q02_a4'  => 'Чтобы прибор позволял максимально быстро измерить сахар',
    'q02_a5'  => 'Чтобы тест-полоски к глюкометру можно было без проблем найти в продаже',
    'q02_a6'  => 'Чтобы у прибора была связь с компьютером через кабель',
    'q02_a7'  => 'Наличие Большого объёма памяти для хранения результатов измерений',
    'q02_a8'  => 'Чтобы глюкометр не нужно было кодировать',
    'q02_a9'  => 'Чтобы капля крови, необходимая для измерения, была очень маленькой',
    'q02_a10'  => 'Чтобы у глюкометра был большой дисплей и цифры',
    'q02_a11'  => 'Чтобы у глюкометра был интересный дизайн и привлекательный внешний вид',
    'q02_a12'  => 'Другое',
);
$list['question4_list'] = array(
    'q04_a1'  => 'Технология "без кодирования"',
    'q04_a2'  => 'Отметки "до" и "после еды"',
    'q04_a3'  => 'Скорость измерения не более 5 сек.',
    'q04_a4'  => 'Спросить у знакомых',
    'q04_a5'  => 'Красивый и интересный дизайн',
    'q04_a6'  => 'Маленькие размеры прибора, вдвое меньше сотового телефона',
    'q04_a7'  => 'Крошечная капля крови, не более чем 0,6 микролитров',
    'q04_a8'  => 'Передача данных на компьютер для анализа своих измерений сахара',
    'q04_a9'  => 'Кнопка, которая позволяет извлечь из глюкометра использованную тест-полоску, не прикасаясь к ней руками',
    'q04_a10'  => 'Функция "будильник", напоминающая о необходимости выполнить измерение',
    'q04_a11'  => 'Подсветка экрана, позволяющая выполнить измерение или посмотреть данные об измерениях в темноте и при плохом освещении',
    'q04_a12'  => 'Для меня важны все функции в глюкометре',
    'q04_a13'  => 'Другое',
);
$list['question5_list'] = array(
    'q05_a1'  => 'Чтобы продавцы магазина специализировались на глюкометрах. Хорошо знали плюсы и минусы этих приборов, и могли подсказать какой из них лучше выбрать',
    'q05_a2'  => 'Наличие сервисного центра в этом же магазине (Если после покупки прибора вдруг возникнет необходимость гарантийного обслуживания, я хочу обратиться туда, где покупал(а) прибор, а не бегать по другим адресам)',
    'q05_a3'  => 'Чтобы продавец проверил точность измерения глюкометра, и я смогл(а) убедиться в этом во время покупки',
    'q05_a4'  => 'Чтобы при появлении любых вопросов по работе глюкометра можно было позвонить специалистам магазина, и они помогли в них разобраться',
    'q05_a5'  => 'Доставка оплаченного мною заказа до дверей',
    'q05_a6'  => 'Чтобы магазин принимал решение о замене глюкометра по гарантии в день моего обращения',
    'q05_a7'  => 'Другое',
);
$list['question6_list'] = array(
    'q06_a1'  => 'Постоянное (бесперебойное) наличие расходных материалов в магазине',
    'q06_a2'  => 'Возможность получать скидку на товары как постоянному клиенту',
    'q06_a3'  => 'Возможность оставить товар в резерве (под свою Фамилию) и выкупить его в течение 2х дней',
    'q06_a4'  => 'Доставка тест-полосок и расходных материалов до дверей после оформления заявки на сайте',
    'q06_a5'  => 'Доставка тест-полосок и расходных материалов до дверей после оформления заявки по телефону',
    'q06_a6'  => 'Другое',
);

$other_answer = array(
    'q02_a12' => 'q02_a13',
    'q04_a13'  => 'q04_a14',
    'q05_a7'  => 'q05_a8',
    'q06_a6'  => 'q06_a7',
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
    'q01_a1' => '',
    'q02_a1' => '',
    'q02_a2' => '',
    'q02_a3' => '',
    'q02_a4' => '',
    'q02_a5' => '',
    'q02_a6' => '',
    'q02_a7' => '',
    'q02_a8' => '',
    'q02_a9' => '',
    'q02_a10' => '',
    'q02_a11' => '',
    'q02_a12' => '',
    'q03_a1' => '',
    'q04_a1' => '',
    'q04_a2' => '',
    'q04_a3' => '',
    'q04_a4' => '',
    'q04_a5' => '',
    'q04_a6' => '',
    'q04_a7' => '',
    'q04_a8' => '',
    'q04_a9' => '',
    'q04_a10' => '',
    'q04_a11' => '',
    'q04_a12' => '',
    'q04_a13' => '',
    'q05_a1' => '',
    'q05_a2' => '',
    'q05_a3' => '',
    'q05_a4' => '',
    'q05_a5' => '',
    'q05_a6' => '',
    'q05_a7' => '',
    'q06_a1' => '',
    'q06_a2' => '',
    'q06_a3' => '',
    'q06_a4' => '',
    'q06_a5' => '',
    'q06_a6' => '',
    'q07_a1' => '',
    'q08_a1' => '',
    'q09_a1' => '',
    'q10_a1' => '',
    'q11_a1' => '',
);

$file = 'anket_skill.xls';

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
    $map_fields['coordinated_by'] = '';
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
    'question4' => '',
    'question5' => '',
    'question6' => '',
    'question7' => '',
    'question8' => '',
    'question9' => '',
    'question10' => '',
    'question11' => '',
);
$question_arr = array (
    'q01' => array('type' => 'textarea', 'name_field_excel' => 'question1'),
    'q02' => array('type' => 'prize_place', 'name_field_excel' => 'question2', 'option' => 'question2_list'),
    'q03' => array('type' => 'textarea', 'name_field_excel' => 'question3'),
    'q04' => array('type' => 'checkbox_none', 'name_field_excel' => 'question4', 'option' => 'question4_list'),
    'q05' => array('type' => 'prize_place', 'name_field_excel' => 'question5', 'option' => 'question5_list'),
    'q06' => array('type' => 'prize_place', 'name_field_excel' => 'question6', 'option' => 'question6_list'),
    'q07' => array('type' => 'textarea', 'name_field_excel' => 'question7'),
    'q08' => array('type' => 'textarea', 'name_field_excel' => 'question8'),
    'q09' => array('type' => 'textarea', 'name_field_excel' => 'question9'),
    'q10' => array('type' => 'textarea', 'name_field_excel' => 'question10'),
    'q11' => array('type' => 'textarea', 'name_field_excel' => 'question11'),
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
                case 'checkbox_none':
                    if ($value !== '') {
                        if (array_key_exists($key, $other_answer)) {
                            $question_excel_array[$data['name_field_excel']] .= 
                                $list[$data['option']][$key] . ";" . $_REQUEST[$other_answer[$key]] . "; ";
                        }
                        else {
                            $question_excel_array[$data['name_field_excel']] .= $list[$data['option']][$key] . '; ';
                        }
                        
                    }
                    else {
                        if (!array_key_exists($key, $other_answer) && $key !== 'q04_a12') {
                            $question_excel_array[$data['name_field_excel']] .= '!' . $list[$data['option']][$key] . '; ';
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
