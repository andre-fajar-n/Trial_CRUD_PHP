<?php
    define('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    define('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'var'.DS.'www'.DS.'trial_php');
    // wamp64/www/phprest/includes
    define('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
    define('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');

    // load the config file first
    require_once(INC_PATH.DS."config.php");

    // core classes
    require_once(CORE_PATH.DS."post.php");
?>