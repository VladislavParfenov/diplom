<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 18:53
 */

namespace Pages;


class AdminPages
{

    public $styles = [
        '/admin/access/css/bootstrap.css',
        '/admin/access/css/font-awesome.css',
        '/admin/access/css/custom.css',
    ];

    public $scripts = [
        'admin/access/js/jquery-3.1.1.min.js',
        'admin/access/js/bootstrap.js',
        'admin/access/js/App.js',
    ];

    public $pages = array(
        '' => 'Dashboard',
        'courses' => 'Courses',
        'course' => 'Course',
        'users' => 'Users'
    );

    public function __construct()
    {
        if(!isset($_SESSION['user'])){
//            header("Location:/");
        }elseif(isset($_SESSION['user'])){
            $userid = $_SESSION['user']['user_id'];
            $user = \Main::$Users->getUser($userid);
            if($user->checkLevel()){

            }else{
//                header("Location:".\Main::getIndexPage());
            }

        }
    }

    public function getBodyData(){
        return [
            'navbar' => $this->getNavBar(),
            'sidebar' => $this->getSideBar()
        ];
    }
    public function getHeaderData(){
        return [
            'styles' => $this->styles,
            'scripts' => $this->scripts
        ];
    }

    public function getSideBar(){
        return \Main::$Templater->getFileHtml('admin/includes/sidebar');
    }

    public function getNavBar(){
        return file_get_contents(SITE_DIR .'/site/templates/admin/includes/navbar.tpl');
    }

    public function getFooterData()
    {
        return [];
    }


}