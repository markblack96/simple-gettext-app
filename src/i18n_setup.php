<?php
    /*
     * Verifies given $locale is supported in project
     * @param string $locale
     * @return bool
     */

    function valid($locale) {
        return in_array($locale, ['en_US',  'es_ES']);
    }
    
    session_start();
    // setting our default or source locale
    // we may want to make this an if statement, where we check if it's set, and only use
    // our source ('en_US') if so. That *may* prevent us from having to append our selected
    // language every single time we load a page.
    if (!isset($lang)) {
        $lang = 'en_US'; // changing this to es_ES will make index.php translated
    }
    if (isset($_SESSION["locale"])) {
        $lang = $_SESSION["locale"];
    } // shouldn't be an "else" here, don't put one on here, is2g
    if (isset($_GET['lang']) && valid($_GET['lang'])) {
        // locale can be changed thru the query-string
        $lang = $_GET['lang']; // Apparently I should sanitize this? Whatever that means...
        // setcookie('lang', $lang); // This is stored in a cookie for reuse, altho we may not want this
        $_SESSION['locale'] = $lang;
    }
    
    
    // define global system locale given found language
    putenv("LANG=$lang");

    // this could come in handy later
    setlocale(LC_ALL, $lang);

    // this tells gettext where to look for translations
    bindtextdomain('es', '../locale');

    // encoding
    bind_textdomain_codeset('es', 'UTF-8');

    // if we ever add any more domains for localization ('es' is the one we will be using), they'd go here

    // specify default domain
    textdomain('es');

?>
