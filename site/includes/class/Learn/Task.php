<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.04.2017
 * Time: 22:24
 */

namespace Learn;


class Task
{
    private $task = [];

    public function __construct($task)
    {
        if(is_array($task)){
            $this->task = $task;
        }
        if(is_numeric($task) && $task > 0){
            $this->setId($task);
            $this->loadTask();
        }
    }
    public function setId($id){
        $this->task['id'] = $id;
        return $this;
    }
    public function setTitleTask($title){
        $this->task['title_task'] = $title;
        return $this;
    }
    public function setDescription($description){
        $this->task['description'] = $description;
        return $this;
    }
    public function setCourseId($id){
        $this->task['course_id'] = $id;
        return $this;
    }
    private function loadTask(){
        $sql = "SELECT * FROM tasks WHERE id = :id";

        $this->task = \DB_CONNECTION::run($sql,[':id' => $this->getId()])->fetch();
    }
    public function getId(){
        return $this->task['id'];
    }

    public function getTitleTask(){
        return $this->task['title_task'];
    }
    public function getDescription(){
        return $this->task['description'];
    }
    public function getCourseId(){
        return $this->task['course_id'];
    }
    public function getTask(){
        return $this->task;
    }
    private function saveTask(){
        $sql = "INSERT INTO tasks SET course_id = :c_id, title_task = :title, description = :descr";
        \DB_CONNECTION::run($sql,[':c_id' => $this->getCourseId(),':title' => $this->getTitleTask(),':descr' => $this->getDescription()]);
    }
    public function save(){
        if($this->task['id'] > 0){
            $this->updateTask();
        }else{
            $this->saveTask();
        }

    }
    private function updateTask(){
        return false;
    }
    private function removeTask(){
        $sql = "DELETE FROM tasks WHERE  id = :id";
        \DB_CONNECTION::run($sql, [':id' => $this->getId()]);
    }
    public function remove(){
        $this->removeTask();
    }
}