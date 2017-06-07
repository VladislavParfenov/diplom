<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 17:31
 */

namespace Auth;


class Users
{
    private $users = array();

    public function __construct()
    {
        $this->loadUsers();
    }

    private function loadUsers(){
        $sql = "SELECT * FROM users";
        $users = \DB_CONNECTION::run($sql)->fetchAll();
        foreach ($users as $user){
            $this->users[$user['id']] = new User($user);
        }
    }

    public function getUsers(){
        if(!$this->users){
            $this->loadUsers();
        }

        return $this->users;
    }

    public function getUser($user){
        if(isset($this->users[$user])){
            return $this->users[$user];
        }
        else{
            return new User($user);
        }
    }

    public function getCurrentUser(){
        if(isset($_SESSION['user'])){
            $user_id = $_SESSION['user']['user_id'];
            $user = \Main::$Users->getUser($user_id);
            return $user;
        }else{
            return false;
        }
    }
}