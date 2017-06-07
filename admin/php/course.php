<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.04.2017
 * Time: 21:14
 */
require_once '../../controller.php';

if(isset($_REQUEST['action_course'])){
    $action = $_REQUEST['action_course'];
    switch ($action){
        case 'edit_course':
            $course_id = $_POST['id'];
            $name = $_POST['name'];
            print_r($_POST);
            break;
        case 'edit_task':
            $course_id = $_POST['course_id'];
            $task_id = $_POST['task_id'];
            $title = $_POST['task_title'];
            $description = $_POST['description'];

            $course = Main::$Courses->getCurse($course_id);
            /**
             * @var $task \Learn\Task
             */
            $task = $course->tasks->getTask($task_id);
            $task->setCourseId($course_id)
                ->setTitleTask($title)
                ->setDescription($description)
                ->save();
            header("Location: /adminpanel/course/".$course_id);
            break;
        case 'remove_task':
            $task_id = $_POST['task_id'];
            $course_id = $_POST['course_id'];
            $course = Main::$Courses->getCurse($course_id);
            $task = $course->tasks->getTask($task_id);
            $task->remove();
            header("Location: /adminpanel/course/".$course_id);
            break;
    }
}