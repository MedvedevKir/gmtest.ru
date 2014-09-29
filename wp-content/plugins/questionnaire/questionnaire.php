<?php
/*
Plugin Name: Questionnaire
Description: Плагин для анкеты gmtest
Version: 0.0.1
Author: Svyatoslav Klyuchev
Author URI: https://www.facebook.com/profile.php?id=100003806474067
*/

define('QUESTIONNAIRE_DIR', plugin_dir_path(__FILE__));
define('QUESTIONNAIRE_URL', plugin_dir_url(__FILE__));

// Название плагина
$pluginName = plugin_basename(WIDGET_ATTACHMENTS_DIR);

// URI путь до директории с плагином
$pluginUrl = trailingslashit(WP_PLUGIN_URL . '/' . $pluginName);

// Путь для CSS, JS скриптов и картинок
$assetsUrl = $pluginUrl . '/assets';

function questionnaire_load() {
    if (is_admin()) {
        require_once(QUESTIONNAIRE_DIR.'includes/admin.php');
    }
    require_once(QUESTIONNAIRE_DIR.'includes/core.php');
}

questionnaire_load();

function hw()
{
    if (isset($_POST['questionnaire']))
    {
        $result = '<PRE>';
        print_r($_POST);
        return $result;
    }
    else
    {
        require_once QUESTIONNAIRE_DIR.'includes/form.php';
//        return $data;
    }
}

function sk()
{
    require_once QUESTIONNAIRE_DIR.'includes/form2.php';
}
function p1()
{
    require_once QUESTIONNAIRE_DIR.'includes/proga1.php';
}
add_shortcode('anketa', 'hw');
add_shortcode('anketa_skill', 'sk');
add_shortcode('proga1', 'p1');

add_shortcode('fuckyou', function(){
    return "Hello world";
});
