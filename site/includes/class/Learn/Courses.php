<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.04.2017
 * Time: 15:37
 */

namespace Learn;


class Courses
{
    public $courses = [];

    public function __construct()
    {
        $this->loadCourses();

    }

    public function loadCourses(){
        $sql = "SELECT * FROM courses";
        $rows = \DB_CONNECTION::run($sql)->fetchAll();

        foreach ($rows as $row){
            $this->courses[$row['id']] = new Course($row);
        }
    }

    public function getCourses(){
        if(!$this->courses){
            $this->loadCourses();
        }
        return $this->courses;
    }

    public function getCurse($course){
        if(isset($this->courses[$course])){
            return $this->courses[$course];
        }else{
            return new Course($course);
        }
    }


}