<?php
/**
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
require_once __DIR__.'/../vendor/autoload.php';

define('PAGE_PARSE_START_TIME', microtime());
define('OSCOM_BASE_DIR', __DIR__.'/../catalog/includes/OSC/');
require(OSCOM_BASE_DIR.'OM/OSCOM.php');
spl_autoload_register('OSC\OM\OSCOM::autoload');

OSC\OM\OSCOM::initialize();
OSC\OM\OSCOM::loadSite('Shop');

$OSCOM_Db       = \OSC\OM\Registry::get('Db');
$OSCOM_Language = \OSC\OM\Registry::get('Language');

