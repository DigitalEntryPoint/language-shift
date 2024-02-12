<?php

namespace SilverUmbrella;

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

class language_worker
{
  public function __construct()
  {
    // Initialize plugin functionality here
    $this->shared_add_action('initialize_plugin');
  }

  public function initialize_plugin()
  {
    $user_ID = get_current_user_id();
    // Example usage:    
    /*
    $user_last_name = get_user_meta($user_ID, 'last_name', true);
    $user_locale = get_user_locale($user_ID);
    echo '<h1 dir="ltr">The current language for id: ' . $user_ID . ' Moji ' . $user_last_name . ' uses: ' . $user_locale . ' </h1>';
    echo "User number $user_ID is loggedin";
    */
  }

  public function register_hooks()
  {
    add_filter('the_content', array($this, 'modify_content'));
  }

  public function modify_content($content)
  {
    // Modify the content and return it
    return $content . '<p>Modified by My OOP Plugin</p>';
  }

  public function shared_add_action($function_name)
  {
    add_action('init', array($this, $function_name));
  }
}
