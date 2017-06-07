<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 15:54
 */

namespace System;


class Templater
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir(SITE_DIR.'/site/templates/');
        $this->smarty->setCacheDir(SITE_DIR . '/site/templates_c');
        $this->smarty->caching = false;
    }

    public function getTemplate($path, $args = array()){
        if($args){
            foreach ($args as $key => $arg){
                $this->smarty->assign([$key => $arg]);
            }
        }
        return $this->smarty->display($path.'.tpl');
    }
    public function getFileHtml($path){
        return file_get_contents(SITE_DIR.'/site/templates/'.$path.'.tpl');
    }
}