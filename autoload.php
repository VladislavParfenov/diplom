<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.04.2017
 * Time: 17:24
 */

function load_class($class){
    if(isset($class)){
        try{
            $class = str_replace('\\', '/', $class);
            require_once SITE_DIR.'/site/includes/class/'.$class.'.php';
        }catch (Exception $e){
            echo  $e->getCode();
        }

    }
}

    spl_autoload_register('load_class');