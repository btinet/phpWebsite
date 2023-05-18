<?php

// Konfiguration der Basis-Klasse
$bootstrap = 'App.php';

// Konstanten definieren
if(!defined('DS'))
    define('DS',DIRECTORY_SEPARATOR);
if(!defined('PS'))
    define('PS',PATH_SEPARATOR);
if(!defined('BASEDIR'))
    define('BASEDIR',dirname(__FILE__) . DS);

// Basisklasse inkludieren
require(BASEDIR . $bootstrap);

// Suchpfade hinzufügen
set_include_path(get_include_path()
    . PS . BASEDIR . 'controller' . DS
    . PS . BASEDIR . 'model' . DS
    . PS . BASEDIR . '' . DS
    . PS . BASEDIR . 'view' . DS
);

// Dateieindungen,nach denen gesucht werden soll, definieren
spl_autoload_extensions('.php,.inc');

// Autoload registrieren
$spl_funcs = spl_autoload_functions();
if($spl_funcs == false)
    spl_autoload_register();
elseif(!in_array('spl_autoload',$spl_funcs))
    spl_autoload_register('spl_autoload');

// App starten
$app = new App();
