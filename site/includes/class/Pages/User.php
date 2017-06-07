<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 18:35
 */

namespace Pages;


class User
{
    public $title = '';

    public function __construct()
    {

    }

    public function getContent(){
        return $this->getBody();
    }

    private function getBody()
    {
        $userid = \Main::$Pages->getMethod();
        print_r($userid);
        $user = \Main::$Users->getUser($userid);

        print_r($user);
    }

}