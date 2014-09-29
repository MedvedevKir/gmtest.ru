<div class="header row menu">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <a tabindex="-1" class="fancybox-media video smartcover-video-trigger" href="www.youtube.com/embed/koNh2bmR2eg?rel=0">
                        <span class="remark"></span>
                    </a>
        </div>
    </div>
    <div class="row">
        <div  class="col-md-12 col-sm-12 col-xs-12 line_menu">
                <a href="#"><img src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/step1-active.png" name="step_1" id="step_1" style="border-radius: 4px 0 0 4px;margin-left: 15px;" class="line_menu"></a>
                <a href="#"><img src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/step2-noactive.png" name="step_2" id="step_2" class="line_menu"></a>
                <a href="#"><img src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/step3-noactive.png" name="step_3" id="step_3" class="line_menu"></a>
        </div>
    </div>
</div>
<div id="content_form">

<div class="questionnaire">
<form id="personal_data_form" name="personal_data_form" action="">
    <fieldset>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-6">
                <label style="margin-top: 8px;" for="type">Категория участника проекта:<span class="required">*</span></label>
                <select name="type" id="type" placeholder="---">
                    <option value>...</option>
                    <option value="user">Пользователь</option>
                    <option value="coordinator">Куратор</option>
                </select>
                <input type="text" id="coordinated_by" name="coordinated_by" class="coordinator hide" placeholder="Кого курируете"/>
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </div>
        </div>
    </fieldset>
    <div class="questions hide">
        <fieldset class="custom_fieldset">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <label for="lastname">ФИО пользователя:<span class="required">*</span></label>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="row">
                        <input type="text" size="10" class="name" placeholder="Фамилия" name="lastname" data-required>                        
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" size="10" class="name" placeholder="Имя" name="name" data-required>                        
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">

                    </div>
                    <div class="row">
                        <input type="text" size="10" class="name" placeholder="Отчество" name="middlename" data-required>                        
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 coordinator">
                    <label for="c_lastname">ФИО куратора:<span class="required">*</span></label>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 coordinator">
                    <div class="row">
                        <input type="text" size="10" class="name" placeholder="Фамилия" name="c_lastname" data-required>                        
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" size="10" class="name" placeholder="Имя" name="c_name" data-required>                        
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" size="10" class="name" placeholder="Отчество" name="c_middlename" data-required>                        
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="custom_fieldset">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-6">
                    <label style="margin-top: 7px;" for="birthday">Дата рождения пользователя:<span class="required">*</span></label>
                    <input size="10" readonly type="text" class="validate_on_change" name="birthday" id="birthday">                        
                    <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                </div>
            </div>
        </fieldset>
        <fieldset class="custom_fieldset">
            <div class="row phone">
                <div class="col-md-4 col-sm-4 col-xs-8">
                    <label style="white-space: nowrap; margin-top: 7px;" for="phone" class="coordinator hide">Контактный телефон:<span class="required">*</span></label>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-10">
                    <select name="phone_select" class="coordinator hide">
                        <option value>...</option>
                        <option value="user">Пользователя</option>
                        <option value="coordinator">Куратора</option>
                    </select>
                    <input type="text" name="phone" id="phone" value="7" class="phone_input" maxlength="32" placeholder="+_(____)__-__-__" size="15" data-required>
                    <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                </div>
            </div>
            <div class="row phone2 hide">
                <div class="col-md-4 col-sm-4 col-xs-8">
                    <label style="white-space: nowrap; margin-top: 7px;" for="phone2" class="coordinator hide">Контактный телефон 2:</label>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-10">
                    <select name="phone_select2" class="coordinator hide">
                        <option value>...</option>
                        <option value="1">Пользователя</option>
                        <option value="2">Куратора</option>
                    </select>
                    <input type="text" name="phone2" id="phone2" class="phone_input" value="7" maxlength="32" placeholder="+_(____)__-__-__" size="15" data-required>
                    <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    <a tabindex="-1" href="#">
                        <img class="close" name="close_phone" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/close.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row phone3 hide">
                <div class="col-md-4 col-sm-4 col-xs-8">
                    <label style="white-space: nowrap; margin-top: 7px;" for="phone3" class="coordinator hide">Контактный телефон 3:</label>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-10">
                    <select name="phone_select3" class="coordinator hide">
                        <option value>...</option>
                        <option value="1">Пользователя</option>
                        <option value="2">Куратора</option>
                    </select>
                    <input type="text" name="phone3" id="phone3" class="phone_input" value="7" maxlength="32" placeholder="+_(____)__-__-__" size="15" data-required>
                    <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    <a tabindex="-1" href="#">
                        <img class="close" name="close_phone" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/close.png" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <input type="button" class="button_add" id="add_phone" value="+ Добавить номер телефона">
            </div>
        </fieldset>
        <fieldset class="custom_fieldset">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-8">
                    <label style="margin-top: 7px;" for="email_owner" class="coordinator hide">Контактный email:<span class="required">*</span></label>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <select name="email_owner" class="coordinator hide">
                        <option value>...</option>
                        <option value="user">Пользователя</option>
                        <option value="coordinator">Куратора</option>
                    </select>
                    <input type="text" name="email" size="15" placeholder="Адрес электронной почты" data-required/>
                    <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                </div>
            </div>
        </fieldset>
        <fieldset class="custom_fieldset">
            <div class="row">
                <div class="col-md-4 col-md-offset-1 col-sm-offset-1 col-sm-4 col-xs-8">
                    <label style="margin-top: 7px;" for="index">Адрес:</label>
                    <select style="margin-top: 7px;" name="address_owner" class="coordinator hide">
                        <option value>...</option>
                        <option value="user">Пользователя</option>
                        <option value="coordinator">Куратора</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-8">
                    <div class="row">
                        <input type="text" name="index" style="width:250px" placeholder="Индекс"/><span class="required_input">*</span>
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" name="state" style="width:250px" placeholder="Область"/><span class="required_input">*</span>
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" name="city" placeholder="Город" style="width:250px"/><span class="required_input">*</span>
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" style="width: 250px;" name="street" placeholder="Улица"/><span class="required_input">*</span>
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" name="build" placeholder="Дом" style="width:250px"/><span class="required_input">*</span>
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row">
                        <input type="text" name="campus" placeholder="Корпус" style="width:250px"/>
                    </div>
                    <div class="row">
                        <input type="text" name="flat" placeholder="Квартира" style="width:250px"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="custom_bottom">
            <div class="row">
                <div class="col-md-3 col-md-offset-2 col-sm-offset-2 col-sm-3 col-xs-8">
                    <label for="diagnosis">Диагноз:<span class="required">*</span></label>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class="row">
                        <select  class="validate_on_change" name="diagnosis" id="diagnosis">
                            <option value="">...</option>
                            <option value="diabetes_mellitus_type1">Сахарный диабет - тип 1</option>
                            <option value="diabetes_mellitus_type2">Сахарный диабет - тип 2</option>
                            <option value="prediabetes">Преддиабет</option>
                            <option value="gestational_diabetes">Гестационный диабет</option>
                            <option value="other">Другой диагноз</option>
                        </select>
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                    <div class="row hide">
                        <textarea type="text" rows="2" class="validate_on_change" name="diagnosis_another" style="margin-top: 10px;width:336px;margin-left: 0px;" id="diagnosis_another" placeholder="Другой диагноз"></textarea> 
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="row questions down_buttons hide">
        <div class="col-md-4 col-md-offset-1 col-sm-offset-1 col-sm-4">
        </div>
        <div class="col-md-4 col-md-offset-3 col-sm-offset-3 col-sm-4">
            <a href="#" class="btn lichR" name="data_glukometr" style="width: 211px; border-radius: 4px 0 0 4px; background-image: url(<?php echo plugins_url(); ?>/questionnaire/assets/css/images/btn_data_glucometr_r.png);"></a>
        </div>
    </div>
</form>

<form id="data_glukometr_form" name="data_glukometr_form" action="" class="hide">
    <fieldset id="used_question" class="custom_fieldset">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <label id="used_label" for="used">Вы уже используете глюкометр?<span class="required">*</span></label>
            </div>
            <div class="col-md-2 col-sm-2">
                <input type="radio" id="used_yes" data-required name="used" value="yes"> <span id="yes_span">Да</span>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="radio" id="used_no" data-required name="used" value="no"> <span id="no_span">Нет</span>
                <img id="used_succes" class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </div>
        </div>
    </fieldset>
    <div class="devices hide">
        <fieldset class="fieldset_glukometr">
            <legend>Глюкометр 1</legend>
            <div class="block_glucometr">
                <div class="row">
                    <div class="col-md-12">
                        <label>Выберите прибор, который вы используете, а рядом укажите сколько тест-полосок в месяц используется с этим прибором:<span class="required">*</span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <input type="text" class="input_glukometr" name="glucometr" size="45">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" name="count_glucometr" class="hide" size="3" data-required=""/>
                        <img class="succes succes_glukometr hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="checkbox" class="free_test_line_checkbox" name="free_test_line">
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <label class="free_test_line free_test_line_label" style="color:#666;">Я отдаю предпочтение бесплатным тест-полоскам</label>
                    </div>
                </div>
                <div class="row hide">
                    <div class="col-md-9 col-sm-9">
                        <textarea type="text" rows="3" class="comment" name="comment" id="comment" placeholder="Комментарий" cols="58"></textarea>
                    </div>
                </div>
                <hr class="hr_glukometr"></hr>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-7 col-sm-7">
                        <label style="margin-top: 6px;">Укажите примерную дату покупки прибора:<span class="required">*</span></label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input size="10" readonly type="text" id="day_purchase_glucometr" name="day_purchase_glucometr" data-required class="validate_on_change day_purchase_glucometr">
                        <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="row">
            <input type="button" class="button_add" id="add_glucometr" value="+ Добавить ещё один глюкометр">
        </div>
    </div>
    <div class="row questions down_buttons hide">
        <div class="col-md-4 col-sm-4">
            <a href="#" class="btn lichR" name="personal_data" style="width: 160px; border-radius: 0 4px 4px 0; background-image: url(<?php echo plugins_url(); ?>/questionnaire/assets/css/images/btn_personal_data.png);"></a>
        </div>
        <div class="col-md-4 col-md-offset-3 col-sm-offset-3 col-sm-4">
            <a href="#" class="btn lichR" name="main_anket" style="width: 274px; margin-left: -5px; border-radius: 4px 0 0 4px; background-image: url(<?php echo plugins_url(); ?>/questionnaire/assets/css/images/btn_main_anket.png);"></a>
        </div>
    </div>
</form>




<form id="main_anket_form" name="main_anket_form" action="" class="hide">
    <div class="addition_questions">
        <div class="row">
            <h4>
                При каких обстоятельствах у вас впервые возникла реальная потребность в покупке глюкометра?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_1 custom_fieldset">
                <textarea class="long" name="q1_a1" data-required></textarea>
            </fieldset>
        </div>
        <div class="row div_succes">
            <h4>
                Решение какого вопроса стало для вас самым важным и первостепенным сразу после того, как возникла потребность в глюкометре?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_2 prize_places custom_fieldset">
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Где купить глюкометр?
                            </li>
                        </ul>
                    </div>
                    <div  class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q2_a1">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Сколько стоит глюкометр?
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q2_a2">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Как правильно выбрать глюкометр и понять какой из них лучше?
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q2_a3">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Где можно научиться правильно пользоваться глюкометром и получить помощь в выборе этого прибора?
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q2_a4">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Другое
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer other" value="" name="q2_a5">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-12 col-sm-12 answer">
                        <textarea class="long other_answer hide" name="q2_a6"></textarea>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="row">
            <h4>
                Каким способом вы решили искать информацию о глюкометре?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_3 validate_checkbox custom_fieldset">
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="checkbox" name="q3_a1" class="label_checkbox"> 
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <label class="label_checkbox">Спросить у своего врача</label><br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="checkbox" name="q3_a2" class="label_checkbox"> 
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <label class="label_checkbox">Обратиться за помощью по контактам в рекламных объявлениях, размещенных в больнице рядом с кабинетом врача</label><br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="checkbox" name="q3_a3" class="label_checkbox"> 
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <label class="label_checkbox">Позвонить в медицинскую справочную</label><br />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="medical_referral" id="medical_referral" class="hide other_answer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="checkbox" name="q3_a4" class="label_checkbox"> 
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <label class="label_checkbox">Спросить у знакомых</label><br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="checkbox" name="q3_a5" class="label_checkbox other"> 
                    </div>
                    <div class="col-md-11 col-sm-11">
                        <label class="label_checkbox">Другое</label><br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <textarea class="long hide other_answer" name="q3_a6"></textarea>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="row">
            <h4>
                Чего вы опасаетесь больше всего, выбирая для себя глюкометр?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_4 custom_fieldset">
                <textarea class="long" name="q4_a1" data-required></textarea>
            </fieldset>
        </div>
        <div class="row div_succes">
            <h4>
                Что для вас особенно важно при выборе магазина, в котором вы хотели бы купить и обслуживать свой первый глюкометр?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_5 prize_places custom_fieldset">
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Чтобы продавцы магазина специализировались на глюкометрах. Хорошо знали плюсы и минусы этих приборов и могли подсказать какой из них лучше выбрать
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q5_a1">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Возможность научиться правильно пользоваться глюкометром в день его покупки
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q5_a2">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Наличие сервисного центра в этом же магазине (Если после покупки прибора вдруг возникнет необходимость гарантийного обслуживания, вам помогут там, где вы покупали прибор, а не заставят бегать по другим адресам)
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q5_a3">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Чтобы продавец проверил точность измерения глюкометра. И вы могли убедиться в ней во время покупки
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q5_a4">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Чтобы при появлении любых вопросов по работе глюкометра можно было позвонить специалистам магазина, и они помогли в них разобраться
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q5_a5">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Другое
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer other" value="" name="q5_a6">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-12 col-sm-12 answer">
                        <textarea class="long other_answer hide" name="q5_a7"></textarea>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="row div_succes">
            <h4>
                По каким критериям вы будете выбирать место для дальнейшей покупки тест-полосок и расходных материалов к своему глюкометру? Что вам необходимо для того, чтобы совершать свои покупки только в этом месте?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_6 prize_places custom_fieldset">
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Постоянное (бесперебойное) наличие расходных материалов в магазине
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q6_a1">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Доставка тест-полосок до дверей после оформления заявки на сайте
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q6_a2">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Доставка тест-полосок до дверей после оформления заявки по телефону
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q6_a3">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Возможность оплатить товар с помощью банковской карты
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer" value="" name="q6_a4">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-11 col-sm-11 answer">
                        <ul>
                            <li class="answer_li">
                                Другое
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 answer">
                        <select class="answer other" value="" name="q6_a5">
                            <option value="">...</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="row answer_row">
                    <div class="col-md-12 col-sm-12 answer">
                        <textarea class="long other_answer hide" name="q6_a6"></textarea>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="row">
            <h4>
                Чего вам не хватает в магазинах/аптеках, которые продают и обслуживают глюкометры? Появлению какой услуги или сервиса вы сейчас были бы рады?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_7 custom_fieldset">
                <textarea class="long" name="q7_a1" data-required></textarea>
            </fieldset>
        </div>
        <div class="row">
            <h4>
                Есть ли моменты в работе этих магазинов/аптек, которые вас раздражают?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_8 custom_fieldset">
                <textarea class="long" name="q8_a1" data-required></textarea>
            </fieldset>
        </div>
        <div class="row">
            <h4>
                Есть ли у вас вопросы, решение которых так и не удалось нигде найти?
                <img class="succes hide" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
            </h4>
            <fieldset class="question_9">
                <textarea class="long" name="q9_a1" data-required></textarea>
            </fieldset>
        </div>
        <div class="row">
            <input type="checkbox" name="agree" id="agree" style="margin-top: 5px;"> 
            <label for="agree" id="agree_label">Участвуя в опросе, я принимаю 
                <a target="_blank" id="agree_page" href="<?php echo site_url(); ?>/agreement-terms/">условия соглашения</a>
            </label>
            <img class="succes hide" style="padding: 0px" src="<?php echo plugins_url(); ?>/questionnaire/assets/css/images/succes.png" alt="">
        </div>
    </div>
    <div class="row questions down_buttons hide">
        <div class="col-md-4 col-sm-4">
            <a href="#" class="btn lichR" name="data_glukometr" style="margin-left: -10px; width: 211px; border-radius: 0 4px 4px 0; background-image: url(<?php echo plugins_url(); ?>/questionnaire/assets/css/images/btn_data_glucometr_l.png);"></a>
        </div>
        <div class="col-md-3 col-md-offset-5 col-sm-offset-5 col-sm-3">
            <a href="#" class="btn lichR" id="button_submit" class="button_submit" name="button_submit" style="margin-left: 15px; width: 146px; border-radius: 4px; background-image: url(<?php echo plugins_url(); ?>/questionnaire/assets/css/images/btn_send.png);"></a>
        </div>
    </div>

    <div id="change_type" title="Вы действительно хотите сменить категорию участника?" style="float: left; margin: 10px 7px -110px 0;">
        <p>Будьте острожны, заполненные вами данные могут быть утеряны!<br/>Чтобы избежать этого, выполните одно из действий, описанных ниже.
        <ol><li>Нажмите кнопку "Сохранить и продолжить", если вы хотите оставить заполненные вами данные, но при этом сменить категорию участника.</li>
        <li>Нажмите кнопку "Продолжить", если вы хотите сменить категорию участника, удалить заполненные данные и заполнить всё заново.</li>
        <li>Нажмите кнопку "Отмена", если вы хотите оставить всё без изменений и продолжить заполнение анкеты.</li></ol></p>
    </div>
</form>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <a tabindex="-1" href=<?php echo site_url(); ?>>Вернуться на главную</a>
    </div>
</div>
</div>

<style>
.container {width:836px;margin:auto;position:relative;padding-top: 0px;}
</style>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo plugins_url(); ?>/questionnaire/assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?php echo plugins_url(); ?>/questionnaire/assets/css/jquery.kladr.min.css" />
<link rel="stylesheet" href="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/jquery.fancybox.css?v=2.1.4" />
<link rel="stylesheet" href="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<link rel="stylesheet" href="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />

<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery2.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.ui.datepicker-ru.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.kladr.min.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.inputmask.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.bind-first-0.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.inputmask-multi.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php echo plugins_url(); ?>/questionnaire/assets/js/form.js"></script>