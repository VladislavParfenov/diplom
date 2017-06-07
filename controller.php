<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.04.2017
 * Time: 17:20
 */
session_start();

require_once "constants.php";
require_once SITE_DIR . '/site/includes/class/System/DB_CONNECTION.php';
require_once SITE_DIR . '/site/modules/smarty/libs/Smarty.class.php';
require_once 'autoload.php';

require_once SITE_DIR . '/site/includes/Main.php';

Main::init();
