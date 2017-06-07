<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.04.2017
 * Time: 15:37
 */

namespace Learn;


class Course
{
    public $course = [];
    public $tasks = [];
    private $loaded_tasks = [];

    public function __construct($course)
    {
        if(is_array($course)){
            $this->course = $course;
            $this->tasks = new Tasks($course['id']);
        }elseif (is_numeric($course) && $course > 0){
            $this->setId($course);
            $this->loadCourse();
            $this->tasks = new Tasks($this->getId());
        }
    }

    public function setId($id){
        $this->course['id'] = $id;
        return $this;
    }

    public function setName($name){
        $this->tasks['name'] = $name;
        return $this;
    }
    public function loadCourse(){
        $sql  = "SELECT * FROM courses WHERE id = :id";

        $this->course = \DB_CONNECTION::run($sql,[':id' => $this->getId()])->fetch();
    }
    public function getCourseTasks(){

        $this->loaded_tasks = $this->tasks->getTasks();
        return $this->loaded_tasks;
    }

    public function getId(){
        return $this->course['id'];
    }

    public function getCourse(){
        if(!$this->course){
            $this->loadCourse();
        }
        return $this->course;
    }


}