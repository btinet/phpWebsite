<?php

// Konstanten definieren
// Trennzeichen zwischen Ordnern (Windows: \ und Linux: / )
if(!defined('DS'))
    define('DS',DIRECTORY_SEPARATOR);

// Basisverzeichnis definieren
if(!defined('BASEDIR'))
    define('BASEDIR',dirname(__FILE__) . DS);

// Basisklasse importieren
require(BASEDIR . 'view' . DS . 'App.php');

// Verzeichnisse für den automatischen Import definieren
set_include_path(get_include_path()
    . PATH_SEPARATOR . BASEDIR . 'controller' . DS
    . PATH_SEPARATOR . BASEDIR . 'model' . DS
    . PATH_SEPARATOR . BASEDIR . '' . DS
    . PATH_SEPARATOR . BASEDIR . 'view' . DS
);

// Endungen für zu importierende Dateien festlegen
spl_autoload_extensions('.php,.inc');

// Funktion für den Autoimport registrieren
$spl_funcs = spl_autoload_functions();
if($spl_funcs === false)
    spl_autoload_register();
elseif(!in_array('spl_autoload',$spl_funcs))
    spl_autoload_register('spl_autoload');

// Basisklasse instanziieren
$app = new view\App();
