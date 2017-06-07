<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.04.2017
 * Time: 17:21
 */

namespace Pages;

class Pages
{
    public $pages = array(
        '' => 'Index',
        'courses' => 'Courses',
        'course' => 'Course',
        'userlist' => 'Users',
        'user' => 'User'
    );

    public $styles = array(
        'site/access/css/bootstrap.css',
        'site/access/css/font-awesome.css',
        'site/access/css/custom.css'
    );
    public $scripts = array(
        'site/access/js/jquery-3.1.1.min.js',
        'site/access/js/bootstrap.js',
        'site/access/js/custom.js',

    );

    public $method;

    public function __construct()
    {

    }

    public function getCurrPage()
    {
        $url_path = $_SERVER['REQUEST_URI'];

        $url_path = parse_url($url_path, PHP_URL_PATH);
        $url_path = trim($url_path, '/');
        $url_path = explode('/', $url_path);

        $action = array_shift($url_path);
        $package = '\\Pages\\';
        if (isset($this->pages[$action])) {
            $method = array_shift($url_path);
            if(isset($method) && $method != ''){
                $this->method = $method;
            }else{
                $this->method = 0;
            }
            $class = $package . $this->pages[$action];
            $curpage = new $class();
            $content = $curpage->getContent();
            print_r($content);

        }elseif ($action == 'adminpanel' && \Main::$Users->getCurrentUser()->isAdmin()) {
            $newAction = array_shift($url_path);
            $method = array_shift($url_path);
            if(isset($method) && $method != ''){
                $this->method = $method;
            }else{
                $this->method = 0;
            }
            $class = '\\Admin\\';

            if (isset(\Main::$AdminPages->pages[$newAction])) {

                $aminpages = \Main::$AdminPages->pages[$newAction];
                $siis = $class . $aminpages;

                $curpage = new $siis();

                $content = $curpage->getContent();
                print_r($content);
            } else {

            }


        }else{

        }



    }

    public function getHeaderData()
    {
        $args = array(
            'styles' => $this->styles,
            'scripts' => $this->scripts
        );
        return $args;
    }

    public function getFooterData()
    {

        return array();
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getBodyData()
    {
        return array(
            'navbar' => $this->getNavBar()
        );

    }

    public function getNavBar()
    {
        return \Main::$Templater->getTemplate('site/includes/navbar');
    }
}