<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 16:14
 */
require_once '../../../controller.php';
if(isset($_REQUEST['user_action']) && $_REQUEST['user_action'] != ''){

    $action = $_REQUEST['user_action'];

    switch ($action){
        case 'register':
            $login = $_POST['login'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $user = Main::$Users->getUser(0);

            $user->setLogin($login)
                ->setEmail($email)
                ->setPassword($pass)
                ->setLevel(2)
                ->Register();

            if($user->errors){
                foreach ($user->errors as $error){
                    echo $error;
                }
            }else{
                header("Location: /");
            }

            break;
        case 'login':
            $login = $_POST['login'];
            $pass = $_POST['password'];

            $user = Main::$Users->getUser(0);

            $user->setLogin($login)
                ->setPassword($pass)
                ->Login();
           header("Location:/");
            break;
        case 'logout':
            $id = $_SESSION['user']['user_id'];
             Main::$Users->getUser($id)->Unlogin();
             header("Location: /");
            break;
    }
}