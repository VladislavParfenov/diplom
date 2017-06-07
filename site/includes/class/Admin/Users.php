<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.04.2017
 * Time: 21:52
 */

namespace Admin;


class Users
{

    public function getContent(){
        /**
         * @var $users \Auth\Users
         */
        $users = \Main::$Users->getUsers();
        /**
         * @var $user \Auth\User
         */
       foreach ($users as $user){
           $all[] = [
               'id' => $user->getId(),
               'login' => $user->getLogin(),
               'email' => $user->getEmail(),
               'user_level' => $user->getLevel(),
               'reg_date' => $user->getRegdate()
           ];
       }
        return $all;
    }
}