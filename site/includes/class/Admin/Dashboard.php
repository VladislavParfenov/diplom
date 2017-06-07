<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 19:07
 */

namespace Admin;


class Dashboard
{
    public $title = '';

    public function __construct()
    {
        $this->setTitle('Dashboard');
    }

    public function getContent(){
        $header = $this->getHeader(\Main::$AdminPages->getHeaderData());
        $body = $this->getBody(\Main::$AdminPages->getBodyData());
        $footer = $this->getFooter(\Main::$AdminPages->getFooterData());

        return $header . $body . $footer;
    }

    private function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getBody($args){
        return \Main::$Templater->getTemplate('admin/pages/dashboard', $args);
    }
    public function getHeader($args){
        $args['title'] = $this->getTitle();
        return \Main::$Templater->getTemplate('admin/core/header', $args);
    }
    public function getFooter($args){
        return \Main::$Templater->getTemplate('admin/core/footer', $args);
    }

}