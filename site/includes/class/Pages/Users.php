<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 18:20
 */

namespace Pages;


class Users
{
    public $title = '';
    public function __construct()
    {

    }
    public function getContent(){
        $header = $this->getHeader(\Main::$Pages->getHeaderData());
        $body = $this->getBody(\Main::$Pages->getBodyData());
        $footer = $this->getFooter(\Main::$Pages->getFooterData());

        return $header . $body . $footer;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getHeader($args){
        $args['title'] = $this->getTitle();
        return \Main::$Templater->getTemplate('site/core/header', $args);
    }
    public function getBody($args){
        $users = \Main::$Users->getUsers();
        /**
         * @var $user \Auth\User
         */
        foreach ($users as $user){
            $args['users'][] = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'login' => $user->getLogin(),
                'level' => $user->getLevel()
            ];
        }

        return \Main::$Templater->getTemplate('site/pages/userlist', $args);
    }
    public function getFooter($args){
        return \Main::$Templater->getTemplate('site/core/footer', $args);
    }


}