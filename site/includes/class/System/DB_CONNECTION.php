<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.04.2017
 * Time: 17:21
 */
class DB_CONNECTION
{
    private  $connect;
    private static $_instance = null;

    public function __construct(){

        $host = 'localhost';
        $db   = 'diplom';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        try{
            $this->connect = new PDO("mysql:host={$host}; dbname={$db};charset={$charset}", $user, $pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            throw new Exception($e->getMessage());
        }


    }

    /**
     * @param $sql
     * @param array $params
     * @return PDOStatement
     * @throws Exception
     */
    public static function run($sql, $params = array()){
        try{
            $connect = self::getInstance();
            $stmt = $connect->connect->prepare($sql);

            $stmt->execute($params);
            return $stmt;

        }catch (PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @return DB_CONNECTION|null
     */
    private static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new self();
        }

        return self::$_instance;
    }


}