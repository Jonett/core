<?php

require_once('D:/applications/xampp/phpMyAdmin/vendor/autoload.php');
// Kickstart the framework
// Install f3 into .../CMS/f3
$f3 = require('f3/base.php');

$f3->set('DEBUG', 3);
if ((float) PCRE_VERSION < 7.9)
    trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

//Load language
$f3->set('LANGUAGE', 'en');

//Load routes
$f3->config('routes.ini');

$f3->run();
