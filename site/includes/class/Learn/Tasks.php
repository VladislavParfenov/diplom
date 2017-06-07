<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.04.2017
 * Time: 22:23
 */

namespace Learn;


class Tasks
{
    private $course_id = 0;
    private $tasks = [];

    public function __construct($course_id)
    {
        $this->course_id = $course_id;
        $this->loadTasks();
    }

    public function loadTasks(){
        $sql = "SELECT * FROM tasks WHERE course_id = :id";
        $tasks = \DB_CONNECTION::run($sql,[':id' => $this->course_id])->fetchAll();
        foreach ($tasks as $task){
            $this->tasks[$task['id']] = new Task($task);
        }
    }

    public function getTasks(){
        return $this->tasks;
    }
    public function getTask($task){
        if(isset($this->tasks[$task])){
            return $this->tasks[$task];
        }else{
            return new Task($task);
        }
    }



}