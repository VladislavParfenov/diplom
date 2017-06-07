<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 17:32
 */

namespace Auth;


class User
{

    private $userInfo = [];

    public $errors = [];

    public function __construct($user)
    {
        if (is_array($user)) {
            $this->userInfo = $user;
        } elseif (is_numeric($user) && $user > 0) {
            $this->setId($user);
            $this->loadUser();
        }
    }


    private function loadUser()
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $this->userInfo = \DB_CONNECTION::run($sql, [':id' => $this->getId()])->fetch();
    }

    public function setId($id)
    {
        $this->userInfo['id'] = $id;
        return $this;
    }

    public function setLogin($login)
    {
        $this->userInfo['login'] = $login;
        return $this;
    }

    public function selLevel($level)
    {
        $this->userInfo['user_level'] = $level;
        return $this;
    }

    public function setEmail($email)
    {
        $this->userInfo['email'] = $email;
        return $this;
    }

    public function setLevel($level){
        $this->userInfo['user_level'] = $level;
        return $this;
    }
    public function setPassword($password)
    {
        $this->userInfo['password'] = md5(md5($password));
        return $this;
    }

    public function getRegdate()
    {
        return $this->userInfo['reg_date'];
    }

    public function getId()
    {
        return $this->userInfo['id'];
    }

    public function getLogin()
    {
        return $this->userInfo['login'];
    }

    public function getLevel()
    {
        return $this->userInfo['user_level'];
    }

    public function getEmail()
    {
        return $this->userInfo['email'];
    }

    public function getPassword()
    {
        return $this->userInfo['password'];
    }

    public function checkLevel(){
        if($this->getLevel() == 1){
            return true;
        }else{
            return false;
        }
    }

    public  function Register(){
        if($this->checkEmail()){
            $this->errors[] = "Email ". $this->getEmail(). " already registered";
        }else{
            $sql = "INSERT INTO users SET login =:login, email =:email, password =:pass, user_level =:level, reg_date =:regs";
            \DB_CONNECTION::run($sql, [':login' => $this->getLogin(), ':email' => $this->getEmail(), ':pass' => $this->getPassword(), ':level' => $this->getLevel(),':regs' => time()]);
        }

    }

    public function checkEmail(){
        $sql = "SELECT * FROM users WHERE email =:email";

        $row = \DB_CONNECTION::run($sql,[':email' => $this->getEmail()])->fetch();

        if($row){
            return true;
        }else{
            return false;
        }
    }

    public function Login(){
        $sql = "SELECT * FROM users WHERE login =:login";

        $rows = \DB_CONNECTION::run($sql, [':login' => $this->getLogin()])->fetch();
        if($rows){
            if($rows['password'] == $this->getPassword()){
                session_start();
                $_SESSION['user'] = [
                    'user_id' => $rows['id'],
                    'login' => $rows['login'],
                    'user_level' => $rows['user_level']
                ];
            }
        }else{
            $this->errors[] = "Input data not found";
        }
    }

    public function Unlogin(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
    }

    public function isAdmin(){
        if($this->userInfo['user_level'] == 2){
            return true;
        }else{
            return false;
        }
    }

}