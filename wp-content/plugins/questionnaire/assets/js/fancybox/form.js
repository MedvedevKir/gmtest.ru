$(function() {
    var index_phone = 1,
        index_glucometr = 2,
        status_video = 'close',
        $diagnosis = $('#diagnosis'),
        $birthday = $( "#birthday" ),
        $type = $('#type'),
        $add_phone = $('#add_phone'),
        $banner = $("#banner"),
        $page_header = $(".page-header"),
        $video = $(".video"),
        $btn_main_anket = $('[name="main_anket"]'),
        $btn_personal_data = $('[name="personal_data"]'),
        $btn_data_glukometr = $('[name="data_glukometr"]'),
        $personal_data = $("#personal_data_form"),
        $data_glukometr = $('#data_glukometr_form'),
        $main_anket = $('#main_anket_form'),
        $step_1 = $("#step_1"),
        $step_2 = $("#step_2"),
        $step_3 = $("#step_3"),
        $agree_row = $("#agree").closest('.row'),
        $add_glucometr = $('#add_glucometr'),
        header = document.querySelector('.header'),
        origOffsetY = header.offsetTop,
        $day_purchase_glucometr = $(".day_purchase_glucometr"),
        site_url = $('#site_url').val()
        $select_glucometr = '',
        $comment = $('#comment'),
        $diagnosis_another = $('#diagnosis_another'),
        $coordinated_by = $('#coordinated_by'),
        $email = $('[name="email"]'),
        $phone = $('input[name="phone"]'),
        $phone2 = $('input[name="phone2"]'),
        $phone3 = $('input[name="phone3"]'),
        $div_phone = $('div.phone'),
        $div_phone2 = $('div.phone2'),
        $div_phone3 = $('div.phone3'),
        $phone_select = $('[name="phone_select"]'),
        $phone_select2 = $('[name="phone_select2"]'),
        $phone_select3 = $('[name="phone_select3"]'),
        $email_owner = $('[name="email_owner"]'),
        $index = $('[name="index"]'),
        $state = $('[name="state"]'),
        $city = $('[name="city"]'),
        $street = $('[name="street"]'),
        $build = $('[name="build"]'),
        $address_owner = $('[name="address_owner"]'),
        current_type = '',
        type_for_dialog = '';
        

    $(window).load(function () {
          $(window).scrollTop(0);
    });
       
    window.addEventListener('orientationchange', function () {
        $('#wrapper').css('min-height', $(window).height() + 0 + "px");
    });

    $('#wrapper').css('min-height', $(window).height() + 0 + "px");
    closeWindow();
    changeType();
    loadkladr();
    settingDialog();

    $('body').on('change', '[data-required]', function() {
        if ($(this).valid()) {
            $(this).closest('.row').find('.succes').removeClass('hide');
        }
        else {
           $(this).closest('.row').find('.succes').addClass('hide'); 
        }
    });


    $('[name="index"], [name="state"], [name="city"], [name="street"], [name="build"]').on('change focusout', function(){
        if ($(this).valid()) {
            if ($type.val() === 'coordinator') {
                if ($address_owner.val() !== '') {
                    $(this).closest('.row').find('.succes').removeClass('hide');
                }
                else {
                   $(this).closest('.row').find('.succes').addClass('hide');
                }
            }
            else {
                $(this).closest('.row').find('.succes').removeClass('hide');
            }
        }
        else {
           $(this).closest('.row').find('.succes').addClass('hide'); 
        }
    });

    $address_owner.on('change', function() {
        if ($(this).val() !== '') {
            if ($index.val() !== '' && $index.valid()) {
                $index.closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $index.closest('.row').find('.succes').addClass('hide');
            }

            if ($state.val() !== '' && $state.valid()) {
                $state.closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $state.closest('.row').find('.succes').addClass('hide');
            }

            if ($city.val() !== '' && $city.valid()) {
                $city.closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $city.closest('.row').find('.succes').addClass('hide');
            }

            if ($street.val() !== '' && $street.valid()) {
                $street.closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $street.closest('.row').find('.succes').addClass('hide');
            }

            if ($build.val() !== '' && $build.valid()) {
                $build.closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $build.closest('.row').find('.succes').addClass('hide');
            }
        }
        else {
            $index.closest('.row').find('.succes').addClass('hide');
            $state.closest('.row').find('.succes').addClass('hide');
            $city.closest('.row').find('.succes').addClass('hide');
            $street.closest('.row').find('.succes').addClass('hide');
            $build.closest('.row').find('.succes').addClass('hide');
        }
    });




    $email.on('change', function() {
        if ($(this).valid()) {
            if ($type.val() === 'coordinator') {
                if ($email_owner.val() !== '') {
                    $(this).closest('.row').find('.succes').removeClass('hide');
                }
                else {
                   $(this).closest('.row').find('.succes').addClass('hide');
                }
            }
            else {
                $(this).closest('.row').find('.succes').removeClass('hide');
            }
        }
        else {
           $(this).closest('.row').find('.succes').addClass('hide'); 
        }
    });

    $email_owner.on('change', function() {
        if ($(this).val() !== '') {
            if ($email.val() !== '' && $email.valid()) {
                $(this).closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $(this).closest('.row').find('.succes').addClass('hide');
            }
        }
        else {
           $(this).closest('.row').find('.succes').addClass('hide'); 
        }
    });

    $('body').on('focusout', 'input[name^="phone"]',  function() {
        if ($(this).valid()) {
            if ($type.val() === 'coordinator') {
                if ($(this).closest('div').find('[name^="phone_select"]').val() !== '') {
                    $(this).closest('.row').find('.succes').removeClass('hide');
                }
                else {
                   $(this).closest('.row').find('.succes').addClass('hide');
                }
            }
            else {
                $(this).closest('.row').find('.succes').removeClass('hide');
            }
        }
        else {
           $(this).closest('.row').find('.succes').addClass('hide'); 
        }
    });

    $('body').on('change', 'select[name^="phone_select"]', function() {
        if ($(this).val() !== '') {
            if ($(this).closest('div').find('input[name^="phone"]').val() !== '7' && 
                $(this).closest('div').find('input[name^="phone"]').valid()
            ){
                $(this).closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $(this).closest('.row').find('.succes').addClass('hide');
            }
        }
        else {
           $(this).closest('.row').find('.succes').addClass('hide'); 
        }
    });

    $(".validate_on_change").on('change', function(){
        if ($(this).valid()) {            
            if ($(this).val() !== 'other') {
                $(this).closest('.row').find('.succes').removeClass('hide');
            }
            else {
                $(this).closest('.row').find('.succes').addClass('hide'); 
            }
        }
        else {
            $(this).closest('.row').find('.succes').addClass('hide');            
        }
    });
    
    $('.answer select').on('change', function() {
        var $answer = $(this),
            $row = $answer.closest('.row'),
            $fieldset = $(this).closest('fieldset'),
            selected_answer = ['1', '2', '3'],
            hide_options = [];

        switch ($answer.val()) {
        case '1':
            $row.css('background-color', '#7cd4a2');
            $row.css('border-radius','4px');
            $answer.css('color', '#333');
            break;
        case '2':
            $row.css('background-color', '#7bcbf1');
            $row.css('border-radius','4px');
            $answer.css('color', '#333');
            break;
        case '3':
            $row.css('background-color', '#b0b3f4');
            $row.css('border-radius','4px');
            $answer.css('color', '#333');
            break;
        default:
            $row.css('background-color', 'inherit');
            $answer.css('color', 'black');
            break;
        }


        $fieldset.find('select').each(function(){
            if ($(this).val() !== '') {
                hide_options.push($(this).val());
                delete selected_answer[$(this).val() - 1];
            }
        });

        selected_answer.sort();

        $fieldset.find('select').each(function(){
            if ($(this).val() === '') {
                $(this).find('option[value!=""]').attr('value', selected_answer[0]).text(selected_answer[0]);
            }
        });

        if (hide_options.length === 3) {
            $fieldset.find('select').each(function(){
                if ($(this).val() === '') {
                    $(this).addClass('hide');
                }
            });
        }
        else {
            $fieldset.find('select').removeClass('hide');
        }
    });


    $btn_data_glukometr.on('click', function(event){
        var href_step_1 = $step_1.attr('src'),
            href_step_2 = $step_2.attr('src'),
            href_step_3 = $step_3.attr('src'),
            go_to_page = false,
            form = $('form:visible');

        event.preventDefault();
        if (form.attr('name') === 'personal_data_form'){
            if (form.valid()) {
                $personal_data.addClass('hide');
                $step_1.attr('src', href_step_1.replace('active', 'middle'));
                $step_2.attr('src', href_step_2.replace('noactive', 'active'));
                go_to_page = true;
            }
        }
        else if(form.attr('name') === 'main_anket_form'){
            $main_anket.addClass('hide');
            $step_1.attr('src', href_step_1.replace('noactive', 'middle'));
            $step_2.attr('src', href_step_2.replace('middle', 'active'));
            $step_3.attr('src', href_step_3.replace('active', 'noactive'));
            go_to_page = true;
        }
        if (go_to_page) {
            $data_glukometr.removeClass('hide');
        }
        scrollToError();
    });

    $btn_personal_data.on('click', function(event){
        var href_step_1 = $step_1.attr('src'),
            href_step_2 = $step_2.attr('src'),
            href_step_3 = $step_3.attr('src'),
            go_to_page = false,
            form = $('form:visible');

        event.preventDefault();

        if (form.attr('name') === 'data_glukometr_form'){
            $data_glukometr.addClass('hide');
            $step_1.attr('src', href_step_1.replace('middle', 'active'));
            $step_2.attr('src', href_step_2.replace('active', 'noactive'));
            go_to_page = true;
        }
        if (go_to_page) {
            $personal_data.removeClass('hide');
        }
        scrollToError();
    });

    $btn_main_anket.on('click', function(event){
        var href_step_1 = $step_1.attr('src'),
            href_step_2 = $step_2.attr('src'),
            href_step_3 = $step_3.attr('src'),
            go_to_page = false,
            form = $('form:visible');

        event.preventDefault();

        if (form.attr('name') === 'data_glukometr_form'){
            if (form.valid()) {
                $data_glukometr.addClass('hide');
                $step_1.attr('src', href_step_1.replace('middle', 'noactive'));
                $step_2.attr('src', href_step_2.replace('active', 'middle'));
                $step_3.attr('src', href_step_3.replace('noactive', 'active'));
                go_to_page = true;
            }
        }
        if (go_to_page) {
            $main_anket.removeClass('hide');
        }
        scrollToError();
    });

    $step_1.on('click', function(event){
        var href_step_1 = $step_1.attr('src'),
            href_step_2 = $step_2.attr('src'),
            href_step_3 = $step_3.attr('src'),
            go_to_page = false,
            form = $('form:visible');

        event.preventDefault();

        if (form.attr('name') === 'data_glukometr_form'){
            $data_glukometr.addClass('hide');
            $step_1.attr('src', href_step_1.replace('middle', 'active'));
            $step_2.attr('src', href_step_2.replace('active', 'noactive'));
            go_to_page = true;
        }
        if (go_to_page) {
            $personal_data.removeClass('hide');
        }
        scrollToError();

    });

    $step_2.on('click', function(event){
        var href_step_1 = $step_1.attr('src'),
            href_step_2 = $step_2.attr('src'),
            href_step_3 = $step_3.attr('src'),
            go_to_page = false,
            form = $('form:visible');

        event.preventDefault();

        if (form.attr('name') === 'personal_data_form'){
            if (form.valid()) {
                $personal_data.addClass('hide');
                $step_1.attr('src', href_step_1.replace('active', 'middle'));
                $step_2.attr('src', href_step_2.replace('noactive', 'active'));
                go_to_page = true;
            }
        }
        else if(form.attr('name') === 'main_anket_form'){
            $main_anket.addClass('hide');
            $step_1.attr('src', href_step_1.replace('noactive', 'middle'));
            $step_2.attr('src', href_step_2.replace('middle', 'active'));
            $step_3.attr('src', href_step_3.replace('active', 'noactive'));
            go_to_page = true;
        }
        if (go_to_page) {
            $data_glukometr.removeClass('hide');
        }
        scrollToError();
    });

    $step_3.on('click', function(event){
        var href_step_1 = $step_1.attr('src'),
            href_step_2 = $step_2.attr('src'),
            href_step_3 = $step_3.attr('src'),
            go_to_page = false,            
            form = $('form:visible');

        event.preventDefault();

        if(form.attr('name') === 'data_glukometr_form'){
            if (form.valid()) {
                $data_glukometr.addClass('hide');
                $step_1.attr('src', href_step_1.replace('middle', 'noactive'));
                $step_2.attr('src', href_step_2.replace('active', 'middle'));
                $step_3.attr('src', href_step_3.replace('noactive', 'active'));
                go_to_page = true;
            }
        }
        if (go_to_page) {
            $main_anket.removeClass('hide');
        }
        scrollToError();
    });

    $video.on('click', function(event) {
        if (status_video === 'close'){
            status_video = 'open';
        }
        else{
            event.preventDefault();
            $video.removeClass('fancybox-media');
            $('.fancybox-overlay').css('opacity', '1');
            $('.fancybox-overlay').css('z-index', '8010');
            $('.fancybox-opened').css('opacity', '1');
            $('.fancybox-opened').css('z-index', '8020');
        }

    });

    $(".fancybox").fancybox();
    $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
            media : {},
            overlay: {
                closeClick: false
            }
        }
    });

    $day_purchase_glucometr.datepicker({
            dateFormat: 'dd.mm.yy',
            changeMonth: true,
            changeYear: true,
            autoSize: true,
            yearRange: "1990:2014",
    });

    $birthday.datepicker({
            dateFormat: 'dd.mm.yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2014",
            defaultDate: '2014'
    });

    $('input[name^="agree"]').on('change', function(data){
        if ($(this).prop('checked') === true) {
            $(this).closest('.row').find('.succes').removeClass('hide');
        } else {
            $(this).closest('.row').find('.succes').addClass('hide');
        }
    });



    $coordinated_by.on('change', function(data){
        if($(this).valid() && $type.val() !== ''){
            $(this).closest('.row').find('.succes').removeClass('hide');
        }
        else {
            $(this).closest('.row').find('.succes').addClass('hide');
        }
    });


    $diagnosis.on('change', function (){
        if ($(this).val() === 'other') {
            $diagnosis_another.parent('div').removeClass('hide');
            $diagnosis_another.closest('.row').find('.succes').addClass('hide'); 
        } else {
            $diagnosis_another.val('').parent('div').addClass('hide');
        }
    })

    $('.other').on('change', function (){
        if ($(this).val() !== '') {
            $(this).closest('fieldset').find('textarea').removeClass('hide');
        } else {
            $(this).closest('fieldset').find('textarea').val('').addClass('hide');
        }
    })

    $('[name="q3_a6"],[name="q3_a3"]').on('click', function(){
        if ($(this).prop('checked') === true) {
            if ($(this).attr('name') === 'q3_a6') {
                $(this).closest('fieldset').find('textarea').removeClass('hide');
            }
            else if ($(this).attr('name') === 'q3_a3') {
                $(this).closest('fieldset').find('#medical_referral').removeClass('hide');  
            }
        } else {
            if ($(this).attr('name') === 'q3_a6') {
                $(this).closest('fieldset').find('textarea').val('').addClass('hide');
            }
            else if ($(this).attr('name') === 'q3_a3') {
                $(this).closest('fieldset').find('#medical_referral').val('').addClass('hide');  
            }
        }
    });

    $('#used_yes').on('click', function(){
        $('.devices').removeClass('hide');
    });

    $('#used_no').on('click', function(){
        $('.devices').addClass('hide');
    });


    var listRU = $.masksSort($.masksLoad(site_url+"/phone_code/phones-ru.json"), ['#'], /[0-9]|#/, "mask");
    var optsRU = {
        inputmask: {
            definitions: {
                '#': {
                    validator: "[0-9]",
                    cardinality: 1
                }
            },
            showMaskOnHover: false,
            autoUnmask: true
        },
        match: /[0-9]/,
        replace: '#',
        list: listRU,
        listKey: "mask",
        onMaskChange: function(maskObj, determined) {
        }
    };

    $('.phone_input').inputmasks(optsRU);


    $add_phone.on('click', function(data){

        index_phone++;

        $('div.phone'+index_phone).removeClass('hide');        

        $add_phone.focus();

        if (index_phone === 3) {
            $add_phone.addClass('hide');
        }
    });

    
    
    $('body').on('mouseenter', '[name="close_phone"]', function(event){
        $(this).prop('src', site_url+'/wp-content/plugins/questionnaire/assets/css/images/close_hover.png');
    });
    $('body').on('mouseout', '[name="close_phone"]', function(event){
        $(this).prop('src', site_url+'/wp-content/plugins/questionnaire/assets/css/images/close.png');
    });

    $('body').on('click', '[name="close_phone"]', function(event){
        var phone_value2 = $phone2.val(),
            phone_select_value2 = $phone_select2.val(),
            phone_value3 = $phone3.val(),
            phone_select_value3 = $phone_select3.val(),
            name_closest_phone = $(this).closest('div .row').find('input[name^="phone"]').attr('name');

        event.preventDefault();
        $phone2.val('7');
        $phone3.val('7');
        $phone_select2.val('');
        $phone_select3.val('');
        $div_phone2.find('.succes').addClass('hide');
        $div_phone3.find('.succes').addClass('hide');
        $add_phone.removeClass('hide');
        index_phone--;
        if (name_closest_phone === 'phone2') {
            $phone2.val(phone_value3);
            $phone_select2.val(phone_select_value3);

            if ($div_phone3.find('label.error_personal_data:visible').size() === 0) {
                $phone2.closest('div').find('label.error_personal_data').remove();
                $phone2.removeClass('error_personal_data');
            }
            else {
                if ($('input[name="phone3"].error_personal_data:visible').size() === 1) {
                    $phone2.valid();
                }
                else if ($('[name="phone_select3"].error_personal_data:visible').size() === 1) {
                    console.log($phone_select2.valid());
                    $phone_select2.valid();
                }
            }
            $phone3.closest('div').find('label.error_personal_data').remove();
            $phone3.removeClass('error_personal_data');


            if ($type.val() === 'user' && phone_value3.length === 11) {
                $div_phone2.find('.succes').removeClass('hide');
            }
            else if ($type.val() === 'coordinator' && phone_value3.length === 11 && phone_select_value3 !== '') {
                $div_phone2.find('.succes').removeClass('hide');
            }
        }
        else {
            $phone3.closest('div').find('label.error_personal_data').remove();
            $phone3.removeClass('error_personal_data');
            $phone2.val(phone_value2);
            $phone_select2.val(phone_select_value2);

            if ($type.val() === 'user' && phone_value2.length === 11) {
                $div_phone2.find('.succes').removeClass('hide');
            }
            else if ($type.val() === 'coordinator' && phone_value2.length === 11 && phone_select_value2 !== '') {
                $div_phone2.find('.succes').removeClass('hide');
            }
        }
        $div_phone2.addClass('hide');
        $div_phone3.addClass('hide');
        $('div.phone'+index_phone).removeClass('hide');
    });

    $add_glucometr.on('click', function(data){
        var html = 
        '<fieldset class="fieldset_glukometr">'+
            '<legend><span>Глюкометр '+index_glucometr+'</span>'+
                '<a tabindex="-1" class="close_glukometr" href="#">'+
                    '<img class="close" name="close_glucometr" src="'+site_url+'/wp-content/plugins/questionnaire/assets/css/images/close.png" alt="">'+
                '</a>'+
            '</legend>'+
            '<div class="block_glucometr_add">'+
                '<div class="row">'+
                    '<div class="col-md-12">'+
                        '<label>Выберите прибор, который вы используете, а рядом укажите сколько тест-полосок в месяц используется с этим прибором:<span class="required">*</span></label>'+
                    '</div>'+
                '</div>'+
                '<div class="row">'+
                    '<div class="col-md-8 col-sm-8">'+
                        '<input type="text" class="input_glukometr" name="glucometr'+index_glucometr+'" size="45" >'+
                    '</div>'+
                    '<div class="col-md-4 col-sm-4">'+
                        '<input type="text" class="hide" name="count_glucometr'+index_glucometr+'" size="3" data-required="">'+
                        '<img class="succes succes_glukometr hide" src="'+site_url+'/wp-content/plugins/questionnaire/assets/css/images/succes.png" alt="">'+
                    '</div>'+
                '</div>'+
                '<div class="row">'+
                    '<div class="col-md-1 col-sm-1">'+
                        '<input type="checkbox" class="free_test_line_checkbox" name="free_test_line'+index_glucometr+'">'+
                    '</div>'+
                    '<div class="col-md-11 col-sm-11">'+
                        '<label style="color: #666;" class="free_test_line free_test_line_label">Я отдаю предпочтение бесплатным тест-полоскам</label>'+
                    '</div>'+
                '</div>'+
                '<div class="row hide">'+
                    '<div class="col-md-9 col-sm-9">'+
                        '<textarea type="text" rows="3" class="comment" name="comment'+index_glucometr+'" id="comment'+index_glucometr+'" placeholder="Комментарий" cols="58"></textarea>'+
                    '</div>'+
                '</div>'+
                '<hr class="hr_glukometr"></hr>'+
                '<div class="row">'+
                    '<div class="col-md-7 col-sm-7">'+
                        '<label style="margin-top: 6px;">Укажите примерную дату покупки прибора:<span class="required">*</span></label>'+
                    '</div>'+
                    '<div class="col-md-4 col-sm-4">'+
                        '<input size="10" readonly type="text" class="validate_on_change day_purchase_glucometr" data-required name="day_purchase_glucometr'+index_glucometr+'" >'+
                        '<img class="succes hide" src="'+site_url+'/wp-content/plugins/questionnaire/assets/css/images/succes.png" alt="">'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</fieldset>';
        $(this).parent('div').before(html);

        $(".day_purchase_glucometr").datepicker({
            dateFormat: 'dd.mm.yy',
            changeMonth: true,
            changeYear: true,
        });
        $('#wrapper').css('min-height', $('#wrapper').height() + 50 + "px");

        autocomplete();

        $('[name="glucometr'+index_glucometr+'"]').focus();

        index_glucometr++;

        if (index_glucometr === 6) {
            $add_glucometr.addClass('hide');
        }
    });

    $('body').on('mouseenter', '[name="close_glucometr"]', function(event){
        $(this).prop('src', site_url+'/wp-content/plugins/questionnaire/assets/css/images/close_hover.png');
    });
    $('body').on('mouseout', '[name="close_glucometr"]', function(event){
        $(this).prop('src', site_url+'/wp-content/plugins/questionnaire/assets/css/images/close.png');
    });

    $('body').on('click', '[name="close_glucometr"]', function(event){
        event.preventDefault();
        $(this).closest('fieldset.fieldset_glukometr').remove();
        $('div.block_glucometr_add').each(function (index) {
            $(this).find('[name^="glucometr"]').attr('name', 'glucometr'+(index+2));
            $(this).find('[name^="count_glucometr"]').attr('name', 'count_glucometr'+(index+2));
            $(this).find('[name^="comment"]').attr('name', 'comment'+(index+2));
            $(this).find('[name^="comment"]').attr('id', 'comment'+(index+2));
            $(this).find('[name^="day_purchase_glucometr"]').attr('name', 'day_purchase_glucometr'+(index+2));
            $(this).find('[name^="free_test_line"]').attr('name', 'free_test_line'+(index+2));
            $(this).closest('fieldset.fieldset_glukometr').find('legend').html('Глюкометр '+(index+2)+'<a tabindex="-1" class="close_glukometr" href="#">'+
                    '<img class="close" name="close_glucometr" src="'+site_url+'/wp-content/plugins/questionnaire/assets/css/images/close.png" alt="">'+
                '</a>');
        });
        $add_glucometr.removeClass('hide');
        index_glucometr--;
    });



    function autocomplete(){
        var glucometerTags = [
            "Accu-Chek Active (Акку-Чек Актив)",
            "Accu-Chek Active New (Акку-Чек Актив Нью)",
            "Accu-Chek Go (Акку-Чек Гоу)",
            "Accu-Chek Go New (Акку-Чек Гоу Нью)",
            "Accu-Chek Performa (Акку-Чек Перформа)",
            "Accu-Chek Performa Nano (Акку-Чек Перформа Нано)",
            "Accu-Chek Mobile (Акку-Чек Мобайл)",
            "Accutrend Plus (Аккутренд Плюс)",
            "OneTouch Ultra (УанТач Ультра)",
            "OneTouch Ultra Easy (УанТач УльтраИзи)",
            "OneTouch Select (УанТач Селект)",
            "OneTouch Select Simple (УанТач СелектСимпл)",
            "OneTouch Horizon (Уан Тач Горизонт)",
            "OneTouch Verio Pro+ (Уан Тач Верио Про+)",
            "Contour TS (Контур ТС)",
            "Ascensia Elite (Асцензия Элит)",
            "Ascensia Entrust (Асцензия Энтраст)",
            "FreeStyle Papillon Mini (Фристайл Папиллон Мини)",
            "Optium Xceed (Оптиум Эксид)",
            "Optium Omega (Оптиум Омега)",
            "Clever Chek ТD-4209 (Клевер Чек TD-4209)",
            "Clever Chek ТD-4227 (Клевер Чек TD-4227)",
            "Сателлит",
            "Сателлит Плюс",
            "Сателлит-Экспресс",
            "IME-DC (АЙМЕ-ДиСи)",
            "Bionime Rightest GM300 (Бионайм Райтест ГМ300)",
            "Bionime Rightest GM500 (Бионайм Райтест ГМ500)",
            "Sensocard (Сенсокард)",
            "Sensocard Plus (Сенсокард Плюс)",
            "SensoLite Nova (СенсоЛайт Нова)",
            "SensoLite Nova Plus (СенсоЛайт Нова Плюс)",
            "Super Glucocard 2 (Супер Глюкокард 2)",
            "WG-70 Slim (ВГ-70 Слим)",
            "WG-72 Voice (ВГ-72 Говорящий)",
            "Bluecare (Блюкеар)",
            "iCheck (АйЧек)",
            "Diabest (Диабест)",
            "Diacont (Диаконт)",
            "Клевер Чек СКС-03",
            "Клевер Чек СКС-05",
            "CareSens POP (КэаСенс Поп)",
            "ОМЕЛОН А-1",
            "SD Check Gold (ЭсДи Чек Голд)",
            "EasyTouch GC (Изи Тач ДжиСи)",
            "EasyTouch GCHb (Изи Тач ДжиСиЭйчБи)",
            "EasyTouch GCU (Изи Тач ДжиСиЮ)",
            "MultiCare-in (MультиКэа-ин)",
            "TRUEresult twist (Тру Резалт Твист)",
        ];
        $('[name^="glucometr"]').autocomplete({
          source: glucometerTags
        });
    }

    autocomplete();

    $.validator.addMethod(
        'regexp',
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
    );    

    $personal_data.validate({ 
        onfocusout: false,
         rules:{
            phone_select:{
                required: true,
            },
            phone_select2:{
                required: true,
            },
            phone_select3:{
                required: true,
            },
            email_owner:{
                required: true,
            },
            address_owner:{
                required: true,
            },
            type:{
                required: true,
            },
            lastname:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            name:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            middlename:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            c_lastname:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            c_name:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            c_middlename:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            birthday:{
                required: true,
            },
            phone:{
                required: true,
                minlength: 11,
            },
            phone2:{
                required: true,
                minlength: 11,
            },
            phone3:{
                required: true,
                minlength: 11,
            },
            email:{
                required: true,
                email: true,
                regexp: '^[-a-zA-Z@._]+$'
            },
            index:{
                required: true,
                digits: true,
            },
            state:{
                required: true,
                regexp: '^[-Nnа-яА-ЯЁё0-9 ().,]+$'
            },
            city:{
                required: true,
                regexp: '^[-Nnа-яА-ЯЁё0-9 ().,]+$'
            },
            street:{
                required: true,
                regexp: '^[-Nnа-яА-ЯЁё0-9 ().,]+$'
            },
            build:{
                required: true,
                digits: true,
            },
            diagnosis:{
                required: true,
            },
            coordinated_by:{
                required: true,
                regexp: '^[-а-яА-ЯЁё ]+$'
            },
            diagnosis_another:{
                required: true,
            },
            flat:{
                digits: true,
            },
            campus:{
                regexp: '^[-а-яА-ЯЁё0-9 ]+$'
            },
         },
         messages:{
            phone_select:{
                required: "Выберите категорию участника проекта, которому принадлежит телефон",
            },
            phone_select2:{
                required: "Выберите категорию участника проекта, которому принадлежит телефон",
            },
            phone_select3:{
                required: "Выберите категорию участника проекта, которому принадлежит телефон",
            },
            email_owner:{
                required: "Выберите категорию участника проекта, которому принадлежит email",
            },
            address_owner:{
                required: "Выберите категорию участника проекта, которому принадлежит адрес",
            },
            type:{
                required: "Укажите категорию участника проекта",
            },
            lastname:{
                required: "Укажите фамилию пользователя",
                regexp: "Только русские буквы"
            },
            name:{
                required: "Укажите имя пользователя",
                regexp: "Только русские буквы"
            },
            middlename:{
                required: "Укажите отчество пользователя",
                regexp: "Только русские буквы"
            },
            c_lastname:{
                required: "Укажите фамилию куратора",
                regexp: "Только русские буквы"
            },
            c_name:{
                required: "Укажите имя куратора",
                regexp: "Только русские буквы"
            },
            c_middlename:{
                required: "Укажите отчество куратора",
                regexp: "Только русские буквы"
            },
            birthday:{
                required: "Укажите дату рождения пользователя",
            },
            phone:{
                required: "Укажите контактный телефон",
                minlength: "Укажите контактный телефон",
            },
            phone2:{
                required: "Укажите контактный телефон",
                minlength: "Укажите контактный телефон",
            },
            phone3:{
                required: "Укажите контактный телефон",
                minlength: "Укажите контактный телефон",
            },
            email:{
                required: "Укажите контактный email",
                email: "Введен неправильный email",
                regexp: 'Только спец. символы и английские буквы'
            },
            index:{
                required: "Укажите индекс",
                digits: "Только цифры",
            },
            state:{
                required: "Укажите область",
                regexp: "Только русские буквы"
            },
            city:{
                required: "Укажите город",
                regexp: "Только русские буквы"
            },
            street:{
                required: "Укажите улицу",
                regexp: "Только буквы и цифры"
            },
            build:{
                required: "Укажите дом",
                digits: "Только цифры",
            },
            diagnosis:{
                required: "Выберите диагноз пользователя из списка, или укажите свой вариант",
            },
            coordinated_by:{
                required: "Укажите кого вы курируете",
                regexp: "Только русские буквы"
            },
            diagnosis_another:{
                required: "Укажите свой вариант",
            },
            flat:{
                digits: "Только цифры. Если вы заполнили данное поле ошибочно, удалите из него всё содержимое и повторите попытку перехода",
            },
            campus:{
                regexp: "Только русские буквы и цифры. Если вы заполнили данное поле ошибочно, удалите из него всё содержимое и повторите попытку перехода"
            },
         },
        errorClass: "error_personal_data"
    });


    $data_glukometr.validate({
        onfocusout: false,
         rules:{
            used:{
                required: true,
            },
            glucometr:{
                required: true,
            },
            day_purchase_glucometr:{
                required: true,
            },
            count_glucometr:{
                required: true,
                range: [1, 999],
                digits: true,
            },
            comment:{
                required: true,
            },
            glucometr2:{
                required: true,
            },
            day_purchase_glucometr2:{
                required: true,
            },
            count_glucometr2:{
                required: true,
                range: [1, 999],
                digits: true,
            },
            comment2:{
                required: true,
            },
            glucometr3:{
                required: true,
            },
            day_purchase_glucometr3:{
                required: true,
            },
            count_glucometr3:{
                required: true,
                range: [1, 999],
                digits: true,
            },
            comment3:{
                required: true,
            },
            glucometr4:{
                required: true,
            },
            day_purchase_glucometr4:{
                required: true,
            },
            count_glucometr4:{
                required: true,
                range: [1, 999],
                digits: true,
            },
            comment4:{
                required: true,
            },
            glucometr5:{
                required: true,
            },
            day_purchase_glucometr5:{
                required: true,
            },
            count_glucometr5:{
                required: true,
                range: [1, 999],
                digits: true,
            },
            comment5:{
                required: true,
            },
         },
         messages:{
            used:{
                required: "Необходимо выбрать вариант ответа",
            },
            glucometr:{
                required: "Выберите модель вашего глюкометра",
            },
            day_purchase_glucometr:{
                required: "Укажите примерную дату покупки глюкометра.",
            },
            count_glucometr:{
                required: 'Укажите количество тест-полосок, которое вы используете совместно с выбранным глюкометром в месяц, или отметьте пункт "Я отдаю предпочтение бесплатным тест-полоскам". Если вы получаете бесплатные тест-полоски к своему глюкометру.',
                range: "Укажите значение от 1 до 999",
                digits: "Только цифры",
            },
            comment:{
                required: "Введите комментарий",
            },
            glucometr2:{
                required: "Выберите модель вашего глюкометра",
            },
            day_purchase_glucometr2:{
                required: "Укажите примерную дату покупки глюкометра.",
            },
            count_glucometr2:{
                required: 'Укажите количество тест-полосок, которое вы используете совместно с выбранным глюкометром в месяц, или отметьте пункт "Я отдаю предпочтение бесплатным тест-полоскам". Если вы получаете бесплатные тест-полоски к своему глюкометру.',
                range: "Укажите значение от 1 до 999",
                digits: "Только цифры",
            },
            comment2:{
                required: "Введите комментарий",
            },
            glucometr3:{
                required: "Выберите модель вашего глюкометра",
            },
            day_purchase_glucometr3:{
                required: "Укажите примерную дату покупки глюкометра.",
            },
            count_glucometr3:{
                required: 'Укажите количество тест-полосок, которое вы используете совместно с выбранным глюкометром в месяц, или отметьте пункт "Я отдаю предпочтение бесплатным тест-полоскам". Если вы получаете бесплатные тест-полоски к своему глюкометру.',
                range: "Укажите значение от 1 до 999",
                digits: "Только цифры",
            },
            comment3:{
                required: "Введите комментарий",
            },
            glucometr4:{
                required: "Выберите модель вашего глюкометра",
            },
            day_purchase_glucometr4:{
                required: "Укажите примерную дату покупки глюкометра.",
            },
            count_glucometr4:{
                required: 'Укажите количество тест-полосок, которое вы используете совместно с выбранным глюкометром в месяц, или отметьте пункт "Я отдаю предпочтение бесплатным тест-полоскам". Если вы получаете бесплатные тест-полоски к своему глюкометру.',
                range: "Укажите значение от 1 до 999",
                digits: "Только цифры",
            },
            comment4:{
                required: "Введите комментарий",
            },
            glucometr5:{
                required: "Выберите модель вашего глюкометра",
            },
            day_purchase_glucometr5:{
                required: "Укажите примерную дату покупки глюкометра.",
            },
            count_glucometr5:{
                required: 'Укажите количество тест-полосок, которое вы используете совместно с выбранным глюкометром в месяц, или отметьте пункт "Я отдаю предпочтение бесплатным тест-полоскам". Если вы получаете бесплатные тест-полоски к своему глюкометру.',
                range: "Укажите значение от 1 до 999",
                digits: "Только цифры",
            },
            comment5:{
                required: "Введите комментарий",
            },
         },
        errorClass: "error_glukometr_data",
        errorPlacement: function(error, element) {
            if (element.attr("name") == "count_glucometr" || 
                element.attr("name") == "count_glucometr2" || 
                element.attr("name") == "count_glucometr3" || 
                element.attr("name") == "count_glucometr4" || 
                element.attr("name") == "count_glucometr5" ||
                element.attr("name") == "day_purchase_glucometr" ||
                element.attr("name") == "day_purchase_glucometr2" ||
                element.attr("name") == "day_purchase_glucometr3" ||
                element.attr("name") == "day_purchase_glucometr4" ||
                element.attr("name") == "day_purchase_glucometr5" ||
                element.attr("name") == "glucometr" ||
                element.attr("name") == "glucometr2" ||
                element.attr("name") == "glucometr3" ||
                element.attr("name") == "glucometr4" ||
                element.attr("name") == "glucometr5" ||
                element.attr("name") == "comment" || 
                element.attr("name") == "comment2" || 
                element.attr("name") == "comment3" || 
                element.attr("name") == "comment4" || 
                element.attr("name") == "comment5" ||
                element.attr("name") == "used") {
              error.insertAfter(element.closest('div.row').find('div:last'));
            } else {
              error.insertAfter(element);
            }
        }
    });
 
    $main_anket.validate({
        onfocusout: false,
         rules:{
            agree:{
                required: true,
            },
            q1_a1:{
                required: true,
            },
            q2_a6:{
                required: true,
            },
            q3_a7:{
                required: true,
            },
            q4_a1:{
                required: true,
            },
            q5_a7:{
                required: true,
            },
            q6_a6:{
                required: true,
            },
            q7_a1:{
                required: true,
            },
            q8_a1:{
                required: true,
            },
            q9_a1:{
                required: true,
            },
            medical_referral:{
                required: true,
            },
         },
         messages:{
            agree:{
                required: "Прочитайте и примите условия соглашения",
            },
            q1_a1:{
                required: "Ответьте на вопрос в свободной форме",
            },
            q2_a6:{
                required: "Укажите свой вариант ответа",
            },
            q3_a7:{
                required: "Укажите свой вариант ответа",
            },
            q4_a1:{
                required: "Ответьте на вопрос в свободной форме",
            },
            q5_a7:{
                required: "Укажите свой вариант ответа",
            },
            q6_a6:{
                required: "Укажите свой вариант ответа",
            },
            q7_a1:{
                required: "Ответьте на вопрос в свободной форме",
            },
            q8_a1:{
                required: "Ответьте на вопрос в свободной форме",
            },
            q9_a1:{
                required: "Ответьте на вопрос в свободной форме",
            },
            medical_referral:{
                required: "Укажите номер/название справочной",
            },
         },
        errorClass: "error_questions",
        errorPlacement: function(error, element) {
            if (element.attr("name") == "agree") {
              error.insertAfter("#agree_label");
            } else {
              error.insertAfter(element);
            }
        }
    });


    $('[name="button_submit"]').on('click', function(event){
        var send_anket = true;

        event.preventDefault();


        if (!$main_anket.valid()) {
            send_anket = false;
        } 
        
        $('.prize_places').each(function(){
            if (!validate_prize_places($(this))) {
                send_anket = false;
            }
        });

        $('.validate_checkbox').each(function(){
            if (!validate_checkbox($(this))) {
                send_anket = false;
            } 
        });

        

        if (send_anket) {
            $.post(
                site_url+"/be/anket.php", 
                $("form").serialize(), 
                function(data){
                    if (data === 'true') {
                        window.location = site_url+'/successful-fill-beginner';
                    }
                }
            );
        }
        else {
            scrollToError();
        }

    });

    $('.prize_places').on('change', function(){
        if (validate_prize_places($(this))) {
            if ($(this).find('.other').val() !== '') {
                if ($(this).find('.other_answer:visible').val() !== ''){
                    $(this).closest('.div_succes').find('.succes').removeClass('hide');
                }
                else {
                    $(this).closest('.div_succes').find('.succes').addClass('hide');
                }
            }
            else {
                $(this).closest('.div_succes').find('.succes').removeClass('hide');
            }
        }
        else {
            $(this).closest('.div_succes').find('.succes').addClass('hide');
        }
    });

    $('.validate_checkbox').on('change', function(){
        var $elements = $('.validate_checkbox').find(':checked'),
            $fieldset = $(this),
            medical_referral = false;

        if (validate_checkbox($(this))) {
            $elements.each(function(){
                if ($(this).attr('name') !== 'q3_a6' && $(this).attr('name') !== 'q3_a3' && !medical_referral) {
                    $fieldset.closest('.row').find('.succes').removeClass('hide');
                }
                else {
                    if ($fieldset.find('.other_answer:visible').val()){
                        medical_referral = false;
                        $fieldset.closest('.row').find('.succes').removeClass('hide');
                    }
                    else {
                        medical_referral = true;
                        $fieldset.closest('.row').find('.succes').addClass('hide');
                    }
                }            
            });
        }
        else {
            $fieldset.closest('.row').find('.succes').addClass('hide');
        }
    });


    $('body').on('click focus', '[name^="glucometr"]', function(){
        $select_glucometr = $(this);
    });

    $('body').on('change keyup', '[name^="glucometr"]', function(){
        var $free_test_line = $(this).closest('[class^="block_glucometr"]').find('[name^="free_test_line"]'),
            $comment = $(this).closest('[class^="block_glucometr"]').find('[name^="comment"]');

        if ($(this).val() === '') {
            if (!$free_test_line.is(':checked')) {
                $(this).closest('div .row').find('[name^="count_glucometr"], .succes').addClass('hide');  
            }
            else {
                $comment.closest('.block_glucometr,.block_glucometr_add').find('.succes_glukometr').addClass('hide');
            }
            
        }
        else {
            if (!$free_test_line.is(':checked')) {
                $select_glucometr.closest('div .row').find('[name^="count_glucometr"]').removeClass('hide');   
            }
            else {
                if ($comment.val() !== '') {
                    $comment.closest('.block_glucometr,.block_glucometr_add').find('.succes_glukometr').removeClass('hide');
                }
            }
        }
    });

    $('body').on('click', '[name^="free_test_line"]', function(){
        var $count_glucometr = $(this).closest('[class^="block_glucometr"]').find('[name^="count_glucometr"]'),
            $glucometr = $(this).closest('[class^="block_glucometr"]').find('[name^="glucometr"]'),
            $comment = $(this).closest('[class^="block_glucometr"]').find('[name^="comment"]');

        if ($(this).is(':checked')){
            $(this).closest('.row').find('label').removeClass('free_test_line');
            $count_glucometr.val('').addClass('hide');
            $comment.closest('.row').removeClass('hide');
            $count_glucometr.closest('div').find('.succes').addClass('hide');
            $count_glucometr.closest('div.row').find('label.error_glukometr_data').remove();
        }
        else{
            $(this).closest('.row').find('label').addClass('free_test_line');
            $comment.val('').closest('.row').addClass('hide');
            $comment.closest('.block_glucometr,.block_glucometr_add').find('.succes_glukometr').addClass('hide');
            $comment.removeClass('error_glukometr_data')
            $comment.closest('div.row').find('label.error_glukometr_data').remove();

            if ($glucometr.val() !== '') {
                $glucometr.closest('.row').find('[name^="count_glucometr"]').removeClass('hide').removeClass('error_glukometr_data');
            }
        }
    });
    
    $('body').on('change', '[name^="comment"]', function(){
        var $glucometr = $(this).closest('[class^="block_glucometr"]').find('[name^="glucometr"]');

        if ($glucometr.val() !== '' && $(this).val() !== '') {
            $(this).closest('.block_glucometr,.block_glucometr_add').find('.succes_glukometr').removeClass('hide');
        }
        else {
            $(this).closest('.block_glucometr,.block_glucometr_add').find('.succes_glukometr').addClass('hide');
        }
    });

    function validate_prize_places(fieldset) {
        var succes = false,
            other_prize_place = false,
            select_answer = [];

        fieldset.find('select').each(function(){
            if ($(this).val() === '1') {
                succes = true;
                fieldset.data('success_was', true);
                select_answer.push($(this).val());                
            }
            else if ($(this).val() !== '') {
                other_prize_place = true;
                select_answer.push($(this).val());      
            }
        });
        if (!succes) {
            fieldset.addClass('error_questions');
            if (!other_prize_place && !fieldset.data('success_was')) {
                fieldset.find('label.custom_error').remove();
                fieldset.append(
                    '<label class="error_questions custom_error">'+
                        '<p class="error_text">Присвойте призовое место "1" тому варианту ответа, который считаете наиболее важным.</p> '+
                        '<p class="error_text">Если такового нет в предложенном списке, тогда присвойте призовое место "1" пункту "другое" и впишите свой вариант ответа в окно, которое появится рядом.</p> '+
                        '<p class="error_text">После чего можно присвоить "2" и "3" призовые места тем ответам, которые также важны для вас, но чуть меньше (необязательно). Можно присвоить не более 3 призовых мест.</p>'+
                    '</label>'
                );
            }
            else {
                fieldset.find('label.custom_error').remove();
                fieldset.append(
                    '<label class="error_questions custom_error">'+
                        '<p class="error_text">Присвойте призовое место "1" тому варианту ответа, который считаете наиболее важным.</p> '+
                        '<p class="error_text">Если такового нет в предложенном списке, тогда присвойте призовое место "1" пункту "другое" и впишите свой вариант ответа в окно, которое появится рядом.</p> '+
                    '</label>'
                );

            }
        }
        else {
            if (select_answer.length === 2 && $.inArray('2', select_answer ) === -1) {
                succes = false;
                fieldset.addClass('error_questions');
                fieldset.find('label.custom_error').remove();
                fieldset.append(
                    '<label class="error_questions custom_error">'+
                        'Присвойте призовое место 2'+
                    '</label>'
                );
            }
            else {
                fieldset.removeClass('error_questions');
                fieldset.find('label.custom_error').remove();
            }
        }
        return succes;
    }

    function validate_checkbox(fieldset) {
        var succes = false;

        fieldset.find('input').each(function(){
            if ($(this).prop('checked')) {
                succes = true;
            }
        });
        if (!succes) {
            fieldset.addClass('error_questions');
            fieldset.find('label.custom_error').remove();
            fieldset.append(
                '<label class="row error_questions custom_error">'+
                    'Выберите как минимум 1 вариант ответа (количество вариантов, которые вы можете выбрать - неограничено)'+
                '</label>'
            );
        }
        else {
            fieldset.removeClass('error_questions');
            fieldset.find('label.custom_error').remove();
        }

        return succes;
    }


    function scrollToError() {        
        var top_error = $('.error:visible,.error_personal_data:visible,.error_glukometr_data:visible,.error_questions:visible');

        if (top_error.size() !== 0 && top_error.first().offset().top > 275) {
            $(window).scrollTop(top_error.first().offset().top - 275);
        }
        else {
            $(window).scrollTop(0);   
        }
    }

    function loadkladr() {
        $state.kladr({
            token: '5277d2c531608f5a130001bd',
            key: '1ed3b7bbeb41b2d7cf6b357e83429408bdce6127',
            type: $.kladr.type.region,
            withParents: true,
            select: function( obj ){
                $city.kladr('parentId', obj.id);
            },
        });

        $city.kladr({
            token: '5277d2c531608f5a130001bd',
            key: '1ed3b7bbeb41b2d7cf6b357e83429408bdce6127',
            type: $.kladr.type.city,
            parentType : $.kladr.type.region,
            parentId : '0',
            withParents: true,
            select: function( obj ){
                $street.kladr('parentId', obj.id);
            },
        });


        $street.kladr({
            token: '5277d2c531608f5a130001bd',
            key: '1ed3b7bbeb41b2d7cf6b357e83429408bdce6127',
            type: $.kladr.type.street,
            parentId : '0',
            parentType : $.kladr.type.city,
        });

        $state.on('change', function(){
            if ($type.val() === 'coordinator') {
                if ($address_owner.val() !== '') {
                    $('.kladr_autocomplete_state').find('li,a').on('click', function(){
                        $state.closest('.row').find('.succes').removeClass('hide');
                        $state.removeClass('error_personal_data');
                        $state.closest('.row').find('label.error_personal_data').remove();
                    });
                }
                else{
                    $state.closest('.row').find('.succes').addClass('hide');
                    $state.removeClass('error_personal_data');
                    $state.closest('.row').find('label.error_personal_data').remove();
                }
            }    
            else{
                $('.kladr_autocomplete_state').find('li,a').on('click', function(){
                    $state.closest('.row').find('.succes').removeClass('hide');
                    $state.removeClass('error_personal_data');
                    $state.closest('.row').find('label.error_personal_data').remove();
                });
            }
        })

        $city.on('change', function(){
            if ($type.val() === 'coordinator') {
                if ($address_owner.val() !== '') {
                    $('.kladr_autocomplete_city').find('li,a').on('click', function(){
                        $city.closest('.row').find('.succes').removeClass('hide');
                        $city.removeClass('error_personal_data');
                        $city.closest('.row').find('label.error_personal_data').remove();
                    });
                }
                else{
                    $city.closest('.row').find('.succes').addClass('hide');
                    $city.removeClass('error_personal_data');
                    $city.closest('.row').find('label.error_personal_data').remove();
                }
            }    
            else{
                $('.kladr_autocomplete_city').find('li,a').on('click', function(){
                    $city.closest('.row').find('.succes').removeClass('hide');
                    $city.removeClass('error_personal_data');
                    $city.closest('.row').find('label.error_personal_data').remove();
                });
            }
        })

        $street.on('change', function(){
            if ($type.val() === 'coordinator') {
                if ($address_owner.val() !== '') {
                    $('.kladr_autocomplete_street').find('li,a').on('click', function(){
                        $street.closest('.row').find('.succes').removeClass('hide');
                        $street.removeClass('error_personal_data');
                        $street.closest('.row').find('label.error_personal_data').remove();
                    });
                }
                else{
                    $street.closest('.row').find('.succes').addClass('hide');
                    $street.removeClass('error_personal_data');
                    $street.closest('.row').find('label.error_personal_data').remove();
                }
            }    
            else{
                $('.kladr_autocomplete_street').find('li,a').on('click', function(){
                    $street.closest('.row').find('.succes').removeClass('hide');
                    $street.removeClass('error_personal_data');
                    $street.closest('.row').find('label.error_personal_data').remove();
                });
            }
        })
    }

    function closeWindow() {
        window.onbeforeunload = function() {
            return ''
        }
    }

    $('body').on('click', '#button_submit', function () {
        window.onbeforeunload = null;
        setTimeout(function(){
            closeWindow();
        }, 10000);
    });
    $('body').on('click', '#agree_page', function () {
        window.onbeforeunload = null;
        setTimeout(function(){
            closeWindow();
        }, 10000);
    });
    $('body').on('click', '.fancybox-close', function () {
        window.onbeforeunload = null;
        setTimeout(function(){
            closeWindow();
        }, 10000);
    });

    function settingDialog() {
        $("#change_type").dialog({
          dialogClass: "no-close",
          autoOpen: false,
          resizable: true,
          height:480,
          width: 600,
          modal: true,
          buttons: {
            "Сохранить и продолжить": function() {
              $('label.error,label.error_personal_data,label.error_glukometr_data,label.error_questions').remove();
              $('.error').removeClass('error');
              $('.error_personal_data').removeClass('error_personal_data');
              $('.error_glukometr_data').removeClass('error_glukometr_data');
              $('.error_questions').removeClass('error_questions');
              $(this).dialog( "close" );
            },
            "Продолжить": function() {
                $('form').trigger( 'reset' );
                $('.succes').addClass('hide');
                $('.succes').addClass('hide');
                $type.val(current_type).trigger('change');
                $('label.error,label.error_personal_data,label.error_glukometr_data,label.error_questions').remove();
                $('.error').removeClass('error');
                $('.error_personal_data').removeClass('error_personal_data');
                $('.error_glukometr_data').removeClass('error_glukometr_data');
                $('.error_questions').removeClass('error_questions');
                $(this).dialog( "close" );
                $('input[name^="phone"]').trigger('mouseout');
                $(this).dialog( "close" );
            },
            Отмена: function() {
                $type.val(type_for_dialog).trigger('change');
                $( this ).dialog( "close" );
            }
          }
        });
    }

    function changeType() {
        $type.on('change', function(data){
            $type.find('option[value=""]').remove();
            if ($(this).val() !== '') {
                if (current_type !== '') { 
                    type_for_dialog = current_type;
                    $( "#change_type" ).dialog( "open" );
                    $(window).scrollTop($('.ui-dialog').offset().top);
                }

                $('.questions').removeClass('hide');
                $('.'+$(this).prop('value')).removeClass('hide');

                if ($(this).prop('value') === 'user') {
                    $(this).closest('.row').find('.succes').removeClass('hide');
                    $('.coordinator').addClass('hide');
                    var fields =
                        [
                            {
                                field: $phone,
                                field_search_value: '7',
                            },
                            {
                                field: $phone2,
                                field_search_value: '7',
                            },
                            {
                                field: $phone3,
                                field_search_value: '7',
                            },
                            {
                                field: $email,
                                field_search_value: '',
                            },
                            {
                                field: $index,
                                field_search_value: '',
                            },
                            {
                                field: $state,
                                field_search_value: '',
                            },
                            {
                                field: $city,
                                field_search_value: '',
                            },
                            {
                                field: $street,
                                field_search_value: '',
                            },
                            {
                                field: $build,
                                field_search_value: '',
                            }
                        ];

                    $(fields).each(function(){
                        if (this.field.val() !== undefined && this.field.val() !== this.field_search_value) {
                            if (this.field.valid()){
                                this.field.closest('.row').find('.succes').removeClass('hide');                                                   
                            }
                        }
                        else {
                            this.field.closest('.row').find('.succes').addClass('hide');
                        }
                    });
                } 
                else {
                    var owners_and_fields =
                        [
                            {
                                owner: $phone_select,
                                field: $phone,
                                field_search_value: '7',
                            },
                            {
                                owner: $phone_select2,
                                field: $phone2,
                                field_search_value: '7',
                            },
                            {
                                owner: $phone_select3,
                                field: $phone3,
                                field_search_value: '7',
                            },
                            {
                                owner: $email_owner,
                                field: $email,
                                field_search_value: '',
                            },
                            {
                                owner: $address_owner,
                                field: $index,
                                field_search_value: '',
                            },
                            {
                                owner: $address_owner,
                                field: $state,
                                field_search_value: '',
                            },
                            {
                                owner: $address_owner,
                                field: $city,
                                field_search_value: '',
                            },
                            {
                                owner: $address_owner,
                                field: $street,
                                field_search_value: '',
                            },
                            {
                                owner: $address_owner,
                                field: $build,
                                field_search_value: '',
                            }
                        ];

                    $(owners_and_fields).each(function(){
                        if (this.field.val() !== undefined && this.field.val() !== this.field_search_value && this.owner.val() !== '') {
                            if (this.field.valid()){
                                this.field.closest('.row').find('.succes').removeClass('hide');                                                   
                            }
                        }
                        else {
                            this.field.closest('.row').find('.succes').addClass('hide');
                        }
                    });
                    
                    if ($coordinated_by.val() !== '') {
                        $coordinated_by.closest('.row').find('.succes').removeClass('hide');
                    }
                    else {

                        $coordinated_by.closest('.row').find('.succes').addClass('hide');

                    }

                    $('.user').addClass('hide');
                }
                $(this).closest('fieldset').addClass('custom_fieldset');
            } 
            else {
                $('.user, .coordinator').addClass('hide');
                $('.questions').addClass('hide');
                $(this).closest('fieldset').removeClass('custom_fieldset');
                $(this).closest('.row').find('.succes').addClass('hide');
            }
            
            current_type = $(this).val();

        });
    }

});

