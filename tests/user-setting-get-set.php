<?php

/**
 * Plugin Name: Custom User Language Settings Plugin
 * Description: A simple plugin to handle user language preferences.
 * Version:   1.0
 * Author: Your Name
 */
$user_ID = 0;

// add_action('init', 'myFunction', 1);
// add_action('init', 'second_func', 5);
// add_action('init', 'second_func', 4);
// add_filter('locale', 'first_func');

function first_func()
{
    echo '<h1 dir="ltr">Locale filter</h1>';
}
function second_func()
{
    echo '<h1 dir="ltr">init Action hook</h1>';
}

function myFunction()
{
    $user_ID = get_current_user_id();

    // Example usage:
    //$current_user_id = get_current_user_id(); // Get the ID of the currently logged in user
    $user_last_name = get_user_meta($user_ID, 'last_name', true);; // Retrieve the current language preference
    $user_locale = get_user_locale($user_ID);; // Retrieve the current language preference

    echo '<h1 dir="ltr">The current language for id: ' . $user_ID . ' Moji ' . $user_last_name . ' uses: ' . $user_locale . ' </h1>';
    echo "User number $user_ID is loggedin";
}

//change language based on user
//add_filter('locale', 'change_lang');
function change_lang($locale)
{
    if ($lang = get_user_meta(get_current_user_id(), 'user_lang', true)) {
        return $lang;
    }
    return $locale;
}

// Do NOT check for action 'set_current_user', but for 'init'!!
// if (!did_action('init')) {
//     _doing_it_wrong(__FUNCTION__, 'get_current_user_id() called before the init hook', null);
// }
// $user_id = get_current_user_id();
