<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 16:24
 */

namespace Pages;


class Index
{
    public $title = '';

    public function __construct()
    {
        $this->setTitle('Main');

    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        $header = $this->getHeader(\Main::$Pages->getHeaderData());
        $body = $this->getBody(\Main::$Pages->getBodyData());
        $footer = $this->getFooter(\Main::$Pages->getFooterData());

        return $header . $body . $footer;
    }

    public function getHeader($args){
        $args['title'] = $this->getTitle();
        return \Main::$Templater->getTemplate('site/core/header', $args);
    }

    private function getBody($args)
    {
        $args['body'] = 'Index Body';
        $args['method'] = \Main::$Pages->getMethod();
        return \Main::$Templater->getTemplate('site/pages/index',$args);
    }

    private function getFooter($args)
    {
        return \Main::$Templater->getTemplate('site/core/footer');
    }

}