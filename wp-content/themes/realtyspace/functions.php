<?php
//added by Elsayed to include translate array of arabic
include_once 'translate.php';

require_once get_template_directory() . '/lib/inc/class-cf47rs-theme-php-guard.php';
if (!Cf47rs_Theme_PHP_Guard::check()) {
    return;
}

require_once get_template_directory() . '/lib/inc/class-cf47rs-theme-plugin-guard.php';
require_once get_template_directory() . '/lib/bootstrap.php';
//added by Elsayed to translate to arabic
function realtyspace_change_translate_text( $translated_text ) {
    $lang = custom_get_current_lang();
    $return_item = $translated_text;
    $transalte_items = $GLOBALS['transalte_items'];
    if($lang == 'ar'){
        if(isset($transalte_items[$translated_text])){
            $return_item = $transalte_items[$translated_text];
        }
    }
    return $return_item;
}
add_filter( 'gettext', 'realtyspace_change_translate_text', 20 );
//added by Elsayed to get current language
function custom_get_current_lang(){
    $lang = ICL_LANGUAGE_CODE;
    return $lang;
}