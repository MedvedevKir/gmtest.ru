<?php 
global $page, $paged, $woocommerce, $current_user;
get_currentuserinfo();
$fb_html = '';
if ( sp_isset_option( 'facebook_opengraph', 'boolean', 'true' ) && ( ( class_exists( 'WP_eCommerce' ) && wpsc_is_single_product() ) ||  ( class_exists( 'woocommerce' ) && is_product() ) ) ) 
{ 
	$fb_html = 'xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"';
} ?>
<?php
/** Так уж вышло, хотел спать, а доделать нужно @todo перенести в плагин */
//    if (isset($_POST['type']))
//    {
//        function form_process()
//        {
//            $type = $_POST['type'];
//            $body = 'Категория участника проекта:';
//            if ($_POST['type'] == 'user') {
//                $body .= ' Пользователь'.PHP_EOL;
//            } else {
//                $body .= ' Куратор '.$_POST['coordinated_by'].PHP_EOL;
//            }
//
//            $body .= 'ФИО пользователя: ';
//            $body .= $_POST['lastname'].' '.$_POST['name'].' '.$_POST['middlename'].PHP_EOL;
//            $body .= 'Дата рождения пользователя: ';
//            $body .= $_POST['day'].' '.$_POST['month'].' '.$_POST['year'].PHP_EOL;
//            $body .= 'Контактный телефон ';
//            if ($_POST['phone_owner'] == '1')
//            {
//                $body .= 'пользователя: ';
//            }
//            else
//            {
//                $body .= 'куратора: ';
//            }
//
//            $body .= $_POST['phone'].PHP_EOL;
//            $body .= 'Контактный email ';
//
//            if ($_POST['email_owner'] == '1')
//            {
//                $body .= 'пользователя: ';
//            }
//            else
//            {
//                $body .= 'куратора: ';
//            }
//
//            $body .= $_POST['email'].PHP_EOL;
//
//            $body .= 'Адрес ';
//            if ($_POST['address_owner'] == '2')
//            {
//                $body .= 'пользователя: ';
//            }
//            else
//            {
//                $body .= 'куратора: ';
//            }
//            $body .= $_POST['state'].' '.$_POST['index'].' '.$_POST['city'].' '.$_POST['street'].' '.$_POST['build'].' '.$_POST['flat'].PHP_EOL;
//
//            if ($type == 'user')
//            {
//                $body .= 'Диагноз: ';
//                if ($_POST['diagnosis'] == '5')
//                {
//                    $body .= $_POST['diagnosis_another'].PHP_EOL;
//                }
//                else
//                {
//                    $body .= $_POST['diagnosis'].PHP_EOL;
//                }
//            }
//
//            if (isset($_POST['circumstances']))
//            {
//                $body .= 'По каким критериям Вы будете выбирать место, для дальнейшей покупки тест-полосок и других расходных материалов?: ';
//
//                if ($_POST['circumstances'] == "3")
//                {
//                    $body .= 'circumstances_textarea'.PHP_EOL;
//                }
//                else
//                {
//                    $body .= $_POST['circumstances'].PHP_EOL;
//                }
//            }
//
//            $body .= 'Что для Вас является самым главным при выборе глюкометра? Что особенного должно быть в этом приборе, чтобы Вы выбрали именно его?';
//
//            if (isset($_POST['group3_1_count'])) {
//                if (isset($_POST['group3_1_count']))
//                {
//                    $body .= $_POST['group3_1'].' - '.$_POST['group3_1_count'].PHP_EOL;
//                }
//            }
//            if (isset($_POST['group3_2_count'])) {
//                if (isset($_POST['group3_2_count']))
//                {
//                    $body .= $_POST['group3_2'].' - '.$_POST['group3_2_count'].PHP_EOL;
//                }
//            }
//            if (isset($_POST['group3_3_count'])) {
//                if (isset($_POST['group3_3_count']))
//                {
//                    $body .= $_POST['group3_3'].' - '.$_POST['group3_3_count'].PHP_EOL;
//                }
//            }
//            if (isset($_POST['group3_4_count'])) {
//                if (isset($_POST['group3_4_count']))
//                {
//                    $body .= $_POST['group3_4'].' - '.$_POST['group3_4_count'].PHP_EOL;
//                }
//            }
//            if (isset($_POST['group3_5_count'])) {
//                if (isset($_POST['group3_5_count']))
//                {
//                    $body .= $_POST['group3_5'].' - '.$_POST['group3_5_count'].PHP_EOL;
//                }
//            }
//            mail('svyatoslav.klyuchev@gmail.com','Какая то тема', $body);
//        }
//        form_process();
//    }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js <?php echo sp_get_browser_agent();?>" <?php echo $fb_html; ?>>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="http://gmtest.ru/wp-content/uploads/2013/09/favicon.png" />

<?php 
	if (is_page('main')) {
echo <<<EOT
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='80405185-11',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
EOT;
	}
?>




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42858808-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>

<input hidden id="site_url" name="site_url" value="<?php echo site_url(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/navigation.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/enhanced.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="stylesheet" href="<?php echo plugins_url(); ?>/questionnaire/assets/css/style.css" /> 
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'sp' ), max( $paged, $page ) );

	?></title>
          


</head>

<body <?php body_class(); ?>>
<?php echo sp_facebook_script(); ?>
<?php dynamic_sidebar( 'site-top-widget' ); ?>
<div id="wrap-all">
<div class="container">
<div id="wrapper" class="hfeed">
<?php 
	if (!is_page('beginner') && !is_page('skilled')) {
		require_once('wp-content/themes/mio/custom_header.php');
	}
?>

<div id="content_container" class="group">