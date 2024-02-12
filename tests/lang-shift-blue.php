<?php
/**
 * Plugin Name: silver language by force 
 * Description: Redirects the front page based on the 'lang' query variable.
 * Version:  1.0
 * Author: Mojtaba Mehrara
 */

//TODO: use cookies or somthing else like 
//user prefered language to set 
//website language.

 // Register a custom query variable
function register_language_query_var() {
    global $wp;
    $wp->add_query_var('lang');
}
//add_action('init', 'register_language_query_var');

/** */
// Change the locale based on the 'lang' query variable
//add_filter('locale', 'change_user_lang');
function change_user_lang($locale) {    
   
    if (is_admin()) return $locale; // Default to the admin language
    
    $lang = get_query_var('lang');    
    
    if (!empty($lang)) {
        switch ($lang) {
            case 'en':
                $locale = 'en_US'; // English
                case 'fa':
                    $locale= 'fa_IR'; // Arabic
                    case 'ar':
                        $locale= 'ar'; // Arabic
                        // Add more cases for additional languages
                    }
                    
    }

    // if(!=){
    //     switch_to_locale('en_US');
    // }
    return $locale; 
}

 // Apply the text direction to the HTML tag
function page_dir_html_tag_attr() {
    $lang = get_query_var('lang');    
  
    if($lang=='fa')$direction='rtl';
    if($lang=='en')$direction='ltr';

    return ' dir="' . esc_attr($direction) . '"';
}
//add_filter('language_attributes', 'page_dir_html_tag_attr');

/*
function wp_noshor_redefine_locale($locale) {
    if( is_admin() ):
        //switch_to_locale('en_US');
        switch_to_locale('fa_IR');
    endif;
}
add_filter('init','wp_noshor_redefine_locale');
*/