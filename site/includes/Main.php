<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 15:52
 */
use \System\Templater;
use \Pages\Pages;
use \Auth\Users;
use \Pages\AdminPages;
use \Learn\Courses;

class Main
{

    /**
     * @var $Templater \System\Templater
     */
    public static $Templater;
    /**
     * @var $Pages Pages
     */
    public static $Pages;

    /**
     * @var $Users \Auth\Users
     */
    public static $Users;

    /**
     * @var $AdminPages \Pages\AdminPages
     */
    public static $AdminPages;

    /**
     * @var $Courses \Learn\Courses
     */
    public static $Courses;

    public function __construct()
    {

    }

    public static function init(){

        self::$Templater = new Templater();

        self::$Pages = new Pages();

        self::$Users = new Users();

        self::$AdminPages = new AdminPages();

        self::$Courses = new Courses();

        self::$Pages->getCurrPage();
    }

    public static function getIndexPage(){
        return '/diplom';
    }
}