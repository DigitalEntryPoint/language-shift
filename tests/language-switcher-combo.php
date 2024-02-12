<?php
/**
 * Plugin Name: Language Switchers
 * Description: A simple language switcher plugin with a combobox.
 * Version:  1.0
 * Author: Mojtaba Mehrara
 */


 function language_switcher_shortcode_func() {
    ob_start();
    ?>
    <form id="lang-switcher" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select id="lang-option" name="lang">
            <option value="en">English</option>
            <option value="fa">Farsi</option>
        </select>
        <input type="submit" value="Switch Language">
    </form>
    <script>
        document.getElementById('lang-switcher').addEventListener('submit', function(event) {
            event.preventDefault();
            var lang = document.getElementById('lang-option').value;
            window.location.href = '<?php echo home_url('/'); ?>' + lang;
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('language_switcher', 'language_switcher_shortcode_func');
